<?php
namespace RSSSL\Pro\Security\WordPress\Passkey\Capability;
use WP_User;

class Rsssl_Passkey_Capability {
	public function is_feature_enabled(): bool {
		return (bool) rsssl_get_option('enable_passkey_login', false);
	}

	public function user_has_registered_passkey(WP_User $user): bool {
		return get_user_meta($user->ID, 'rsssl_passkey_configured', true) === 'configured';
	}

	public function is_two_fa_enabled(): bool {
		return (bool) rsssl_get_option('login_protection_enabled', false);
	}
}