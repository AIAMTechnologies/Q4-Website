<?php
declare(strict_types=1);
/**
 * Passkey integration for Really Simple SSL Pro.
 *
 * Handles registration of scripts, the onboarding flow, and REST controller setup
 * for passkey-based two-factor authentication.
 *
 * @package   ReallySimpleSSL\Pro\Security\WordPress\Passkey
 * @author    Really Simple Plugins
 * @link      https://really-simple-ssl.com
 */

namespace RSSSL\Pro\Security\WordPress\Passkey;

use Exception;
use RSSSL\Pro\Security\WordPress\Passkey\Capability\Rsssl_Passkey_Capability;
use RSSSL\Pro\Security\WordPress\Passkey\Models\Rsssl_Webauthn;
use RSSSL\Pro\Security\WordPress\Passkey\Policy\Rsssl_Secure_Auth_Policy;
use RSSSL\Pro\Security\WordPress\Two_Fa\Providers\Rsssl_Two_Factor_Passkey;
use RSSSL\Security\WordPress\Two_Fa\Controllers\Rsssl_Base_Controller;
use RSSSL\Security\WordPress\Two_Fa\Rsssl_Two_Fa_Authentication;
use RSSSL\Security\WordPress\Two_Fa\Rsssl_Two_Factor;
use RSSSL\Security\WordPress\Two_Fa\Traits\Rsssl_Two_Fa_Helper;
use WP_User;

/**
 * Bootstraps passkey-based two-factor authentication.
 *
 * - Registers enqueue scripts and login hooks
 * - Triggers onboarding UI if needed
 * - Delegates to the REST & base controllers
 *
 * @package ReallySimpleSSL\Pro\Security\WordPress\Passkey
 */
class Rsssl_Passkey {
	use Rsssl_Two_Fa_Helper;

	private const PLUGIN_SLUG = 'really-simple-security';
	private const API_VERSION = 'v1';
	private const TWO_FA_VERSION = 'v2';
    private const POLICY_LOCKED_OUT = 'rsssl_locked_out';

	private const POLICY_ENFORCED = 'rsssl_enforced';

	public const REST_NAMESPACE = self::PLUGIN_SLUG . '/' . self::API_VERSION . '/two-fa/' . self::TWO_FA_VERSION;

	private static ?self $instance = null;

	/**  Holds the user who’s in the middle of onboarding  */
	private static ?WP_User $onboarding_user = null;

	private ?Rsssl_Login_Flow_Decider $decider = null;


	/**
	 * Retrieve single instance.
	 *
	 * @return self
	 */
	public static function get_instance(): self {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Run hooks
	 * @return void
	 */
	public static function run_hooks(): void {
		if ( ( defined( 'RSSSL_DISABLE_2FA' ) && RSSSL_DISABLE_2FA )
		     || ( defined( 'RSSSL_SAFE_MODE' ) && RSSSL_SAFE_MODE )
		) {
			return;
		}
		// if 2fa is enabled, we need to run the hooks. Since this is a feature of the two-factor authentication, we check if the login protection is enabled.
		// if so 2fa takes over and this is not needed.
		$instance = self::get_instance();
        add_filter( 'login_message', [ $instance, 'maybe_print_locked_out_message' ] );
		add_filter( 'login_message', [ $instance, 'maybe_print_passkey_enforced_message' ] );
		if ( rsssl_get_option( 'login_protection_enabled', false ) === 1) {
			// we only load the scripts if the login protection is enabled.
            $instance->register_login_assets_hooks();

			return;
		}

		// Services
		$policy            = new Rsssl_Secure_Auth_Policy();
		$cap               = new Rsssl_Passkey_Capability();
		$skip              = new Rsssl_Skip_Strategy();
		$instance->decider = new Rsssl_Login_Flow_Decider( $policy, $cap, $skip );

		// Check if the passkey table is enabled.
		add_action( 'init', [ Rsssl_Webauthn::class, 'maybe_install_table' ] );
        $instance->register_login_assets_hooks();
		// after successful login, maybe kick off the passkey setup
		add_action( 'wp_login', [ $instance, 'maybe_start_passkey_onboarding' ], 10, 2 );
		/*
		 * Start the controller for the passkey this is needed for all the logic to work.
		 */
		Rsssl_Two_Factor_Passkey::start_controller( self::PLUGIN_SLUG, self::API_VERSION, self::TWO_FA_VERSION );
		// We add the skip functionality to the two-factor authentication.
		new Rsssl_Base_Controller( self::PLUGIN_SLUG, self::API_VERSION, self::TWO_FA_VERSION );

		if ( rsssl_admin_logged_in() ) {
			( new RSSSL_Passkey_User_Admin() );
		}

		// We add the passkey profile settings to the user profile.
		Rsssl_Passkey_Profile_Settings::init();
	}

    /**
     * Register login assets hooks.
     */
    private function register_login_assets_hooks(): void {
        add_action( 'login_enqueue_scripts', [ $this, 'enqueue_onboarding_scripts' ] );
        add_action( 'login_enqueue_scripts', [ $this, 'enqueue_onboarding_styles' ] );
    }

	/**
	 * Enqueue onboarding styles
	 * @return void
	 */
	public function enqueue_onboarding_styles(): void {
		$uri       = trailingslashit( rsssl_url ) . 'assets/features/two-fa/styles.min.css';
		$file_path = trailingslashit( rsssl_path ) . 'assets/features/two-fa/styles.min.css';

		if ( file_exists( $file_path ) ) {
			wp_enqueue_style( 'rsssl-passkey-settings', $uri, [], filemtime( $file_path ) );
		}
	}

    /**
     * Resolve verified user ID from the posted login name.
     */
    private function get_verified_user_id_from_request(): int {
        $user_login = isset( $_POST['log'] ) ? sanitize_user( wp_unslash( $_POST['log'] ) ) : '';
        $user       = $user_login ? get_user_by( 'login', $user_login ) : null;
        return (int) ( $user->ID ?? 0 );
    }

    /**
     * Create a login nonce for a verified user or return empty string.
     */
    private function maybe_create_login_nonce( int $verified_user_id ): string {
        if ( (bool) rsssl_get_option( 'login_protection_enabled', false ) === false && $verified_user_id > 0 ) {
            $nonce = Rsssl_Two_Fa_Authentication::create_login_nonce( $verified_user_id );
            return isset( $nonce['rsssl_key'] ) ? (string) $nonce['rsssl_key'] : '';
        }
        return '';
    }

    /**
     * Retrieve the redirect_to parameter safely, with a sane default.
     */
    private function get_redirect_to(): string {
        return isset( $_REQUEST['redirect_to'] )
            ? esc_url_raw( wp_unslash( $_REQUEST['redirect_to'] ) )
            : admin_url();
    }

	/**
	 * Enqueue onboarding scripts
	 * @return void
	 */
	public function enqueue_onboarding_scripts(): void {
        $uri       = trailingslashit( rsssl_url ) . 'assets/features/two-fa/assets.min.js';
        $file_path = trailingslashit( rsssl_path ) . 'assets/features/two-fa/assets.min.js';
        if ( ! file_exists( $file_path ) ) {
            return;
        }

        $this->fallback_enqueue_script( $uri, $file_path );

        $verified_user_id = $this->get_verified_user_id_from_request();
        add_filter( 'rsssl_two_factor_translatables', [ Rsssl_Two_Factor_Passkey::class, 'translatables' ] );
        $login_nonce      = $this->maybe_create_login_nonce( $verified_user_id );

        wp_localize_script( 'rsssl-passkey-login', 'rsssl_login', [
            'nonce'         => wp_create_nonce( 'wp_rest_passkey_onboarding' ),
            'origin'        => 'passkey',
            'root'          => esc_url_raw( rest_url( self::REST_NAMESPACE ) ),
            'login_nonce'   => $login_nonce,
            'redirect_to'   => $this->get_redirect_to(),
            'translatables' => apply_filters( 'rsssl_two_factor_translatables', [] ),
            'user_id'       => $verified_user_id,
        ] );
	}

	/**
	 * Fallback enqueue script for browsers that do not support module scripts
	 *
	 * @param string $uri
	 * @param string $file_path
	 *
	 * @return void
	 */
	private function fallback_enqueue_script( string $uri, string $file_path ): void {
		wp_enqueue_script( 'rsssl-passkey-login', $uri, [], filemtime( $file_path ), true );
		add_filter( 'script_loader_tag', static function ( $tag, $handle ) {
			if ( $handle !== 'rsssl-passkey-login' ) {
				return $tag;
			}

			return str_replace( ' src', ' type="module" src', $tag );
		}, 10, 2 );
	}

	/**
	 * Starts the passkey onboarding process if the user has requested it.
	 *
	 * @throws Exception
	 */
	public function maybe_start_passkey_onboarding( string $user_login, WP_User $user ): void {
        // Current passkey status for the user
        $passkey_status = (string) get_user_meta( $user->ID, 'rsssl_passkey_configured', true );

        // Determine if secure authentication is enforced for this user (fallback-safe)
        $enforced = ( new Rsssl_Secure_Auth_Policy() )->is_enforced_for_user( $user );

		// Use the decider (when available) to determine the flow
		$decision = $this->decider ? $this->decider->decide( $user ) : null;


		if ( $enforced && is_array( $decision ) && isset( $decision['flow'] ) && $decision['flow'] === Rsssl_Login_Flow::PASSKEY_REQUIRED ) {
			wp_redirect( wp_login_url() . '?' . self::POLICY_ENFORCED . '=1' );
			exit;
		}

        // If already configured, we never start onboarding
        if ( $passkey_status === 'configured' ) {
            return;
        }

        // If user previously chose to ignore AND is not enforced, respect that choice
        if ( $passkey_status === 'ignored' && ! $enforced ) {
            return;
        }



        // If enforced and the decider says locked out, redirect with clear message
        if ( $enforced && is_array( $decision ) && isset( $decision['flow'] ) && $decision['flow'] === Rsssl_Login_Flow::LOCKED_OUT ) {
            wp_redirect( wp_login_url() . '?' . self::POLICY_LOCKED_OUT . '=1' );
            exit;
        }

        // Enforce onboarding for specific flows
        if ( is_array( $decision ) && isset( $decision['flow'] ) ) {
            if ( $decision['flow'] === Rsssl_Login_Flow::FORCE_PASSKEY_ENROLLMENT ||
                 $decision['flow'] === Rsssl_Login_Flow::PASSKEY_OPTIONAL ) {
                self::$onboarding_user = $user;
                wp_clear_auth_cookie();
                $this->passkey_onboarding_html( $user, $decision );
                exit;
            }
            // In all other flows do nothing here.
            return;
        }

        // Backward compatibility fallback: if no decider is set but enforcement is true and user isn't configured,
        // require onboarding. Otherwise, do nothing.
        if ( $enforced ) {
            self::$onboarding_user = $user;
            wp_clear_auth_cookie();
            $this->passkey_onboarding_html( $user, [ 'flow' => Rsssl_Login_Flow::FORCE_PASSKEY_ENROLLMENT ] );
            exit;
        }
	}

	/**
	 * Render onboarding UI and halt execution.
	 *
	 * @throws Exception if nonce generation fails
	 */
	private function passkey_onboarding_html( WP_User $user, $loginFlow ): void {
		// Variables needed for the template and scripts
		$redirect_to = admin_url();

		add_action( 'login_enqueue_scripts', [ $this, 'enqueue_onboarding_scripts' ] );

		// Ensure login_header and login_footer functions are available
		if ( ! function_exists( 'login_header' ) ) {
			include_once rsssl_path . 'security/wordpress/two-fa/function-login-header.php';
		}

		if ( ! function_exists( 'login_footer' ) ) {
			include_once rsssl_path . 'security/wordpress/two-fa/function-login-footer.php';
		}

		//Add the styles for the two-factor authentication.
		add_action( 'login_enqueue_scripts', [ Rsssl_Two_Factor::class, 'enqueue_onboarding_styles' ] );

		login_header(
			__( 'Passkey Setup', 'really-simple-ssl' ),
			'',
			null
		);


		rsssl_load_template(
			'onboarding.php',
			$loginFlow,
			rsssl_path . 'pro/assets/templates/passkey/'
		);

		login_footer();

		if ( ob_get_level() > 0 ) {
			ob_flush();
		}
		flush();
		exit;
	}

	/**
	 * Show a clear message on the login screen when a user has been locked out
	 * via the passkey enforcement redirect (?rsssl_locked_out=1).
	 *
	 * @param string $message Existing login message HTML.
	 * @return string Modified login message HTML.
	 */
	public function maybe_print_locked_out_message( string $message ): string {
		if ( isset( $_GET[ self::POLICY_LOCKED_OUT ] ) && (string) $_GET[ self::POLICY_LOCKED_OUT ] === '1' ) {
			$locked = '<div id="login_error" class="notice notice-error">' . esc_html__( 'Your account has been temporarily locked due to security policies. Please contact the administrator to regain access.', 'really-simple-ssl' ) . '</div>';
			return $locked . $message;
		}
		return $message;
	}


	/**
	 * Show a clear message on the login screen when a user has been locked out
	 * via the passkey enforcement redirect (?rsssl_locked_out=1).
	 *
	 * @param string $message Existing login message HTML.
	 * @return string Modified login message HTML.
	 */
	public function maybe_print_passkey_enforced_message( string $message ): string {
		if ( isset( $_GET[ self::POLICY_ENFORCED ] ) && (string) $_GET[ self::POLICY_ENFORCED ] === '1' ) {
			$locked = '<div id="login_error" class="notice notice-error">' . esc_html__( 'Your account has been configured for passkey and is enforced please login using passkey.', 'really-simple-ssl' ) . '</div>';
			return $locked . $message;
		}
		return $message;
	}
}

Rsssl_Passkey::run_hooks();
