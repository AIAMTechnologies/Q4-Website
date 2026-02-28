<?php
$notice = q4_command_contact_notice();
$args = isset( $GLOBALS['q4_command_contact_form_args'] ) && is_array( $GLOBALS['q4_command_contact_form_args'] ) ? $GLOBALS['q4_command_contact_form_args'] : array();
$form_title = isset( $args['title'] ) ? $args['title'] : __( 'Request a consultation', 'q4-command' );
$form_text  = isset( $args['text'] ) ? $args['text'] : __( 'Share your current challenge and Q4 GEMS can follow up with the right next step.', 'q4-command' );
?>
<section class="contact-form-panel">
    <div class="contact-form-intro">
        <p class="section-kicker"><?php esc_html_e( 'Start the conversation', 'q4-command' ); ?></p>
        <h2><?php echo esc_html( $form_title ); ?></h2>
        <p><?php echo esc_html( $form_text ); ?></p>
    </div>

    <?php if ( $notice ) : ?>
        <div class="form-notice <?php echo esc_attr( $notice['class'] ); ?>">
            <?php echo esc_html( $notice['message'] ); ?>
        </div>
    <?php endif; ?>

    <form class="q4-contact-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
        <input type="hidden" name="action" value="q4_contact_form" />
        <?php wp_nonce_field( 'q4_contact_form', 'q4_contact_nonce' ); ?>

        <div class="form-grid">
            <label>
                <span><?php esc_html_e( 'Name', 'q4-command' ); ?></span>
                <input type="text" name="name" required />
            </label>
            <label>
                <span><?php esc_html_e( 'Work email', 'q4-command' ); ?></span>
                <input type="email" name="email" required />
            </label>
            <label>
                <span><?php esc_html_e( 'Company', 'q4-command' ); ?></span>
                <input type="text" name="company" />
            </label>
            <label>
                <span><?php esc_html_e( 'Topic', 'q4-command' ); ?></span>
                <select name="topic">
                    <option value=""><?php esc_html_e( 'Select a topic', 'q4-command' ); ?></option>
                    <option value="Managed IT Services"><?php esc_html_e( 'Managed IT Services', 'q4-command' ); ?></option>
                    <option value="Cybersecurity"><?php esc_html_e( 'Cybersecurity', 'q4-command' ); ?></option>
                    <option value="Microsoft 365"><?php esc_html_e( 'Microsoft 365', 'q4-command' ); ?></option>
                    <option value="Business Continuity"><?php esc_html_e( 'Business Continuity', 'q4-command' ); ?></option>
                    <option value="Procurement"><?php esc_html_e( 'Procurement', 'q4-command' ); ?></option>
                    <option value="Projects and Advisory"><?php esc_html_e( 'Projects and Advisory', 'q4-command' ); ?></option>
                </select>
            </label>
        </div>

        <label class="form-field-wide">
            <span><?php esc_html_e( 'What do you need help with?', 'q4-command' ); ?></span>
            <textarea name="message" rows="5" required></textarea>
        </label>

        <label class="form-honeypot" aria-hidden="true">
            <span><?php esc_html_e( 'Company website', 'q4-command' ); ?></span>
            <input type="text" name="company_site" tabindex="-1" autocomplete="off" />
        </label>

        <button class="button button--primary" type="submit"><?php esc_html_e( 'Send request', 'q4-command' ); ?></button>
    </form>
</section>
