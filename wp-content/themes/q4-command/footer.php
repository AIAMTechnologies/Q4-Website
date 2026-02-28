    </main>
    <?php $navigation = q4_command_get_navigation_groups(); ?>
    <footer class="site-footer">
        <section class="footer-cta panel-dark">
            <div>
                <p class="section-kicker"><?php esc_html_e( 'Ready for a stronger IT foundation?', 'q4-command' ); ?></p>
                <h2><?php esc_html_e( 'Build a more resilient, better-supported environment with Q4 GEMS.', 'q4-command' ); ?></h2>
                <p><?php esc_html_e( 'Get managed IT services, cybersecurity guidance, Microsoft 365 support, and continuity planning aligned to the way your team actually operates.', 'q4-command' ); ?></p>
            </div>
            <div class="footer-cta-actions">
                <a class="button button--primary" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php esc_html_e( 'Talk to Q4 GEMS', 'q4-command' ); ?></a>
                <a class="button button--secondary" href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Review services', 'q4-command' ); ?></a>
            </div>
        </section>

        <div class="footer-grid">
            <div>
                <div class="brand footer-brand"><?php echo q4_command_brand_markup(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
                <p><?php esc_html_e( 'Managed IT services, cybersecurity, Microsoft 365 support, business continuity, procurement, and IT advisory for growing businesses.', 'q4-command' ); ?></p>
            </div>
            <div>
                <h3><?php esc_html_e( 'Focus areas', 'q4-command' ); ?></h3>
                <ul>
                    <li><?php esc_html_e( 'Managed IT Services', 'q4-command' ); ?></li>
                    <li><?php esc_html_e( 'Cybersecurity', 'q4-command' ); ?></li>
                    <li><?php esc_html_e( 'Microsoft 365', 'q4-command' ); ?></li>
                    <li><?php esc_html_e( 'Business Continuity', 'q4-command' ); ?></li>
                </ul>
            </div>
            <div>
                <h3><?php esc_html_e( 'Coverage', 'q4-command' ); ?></h3>
                <ul>
                    <li><?php esc_html_e( 'Toronto and the GTA', 'q4-command' ); ?></li>
                    <li><?php esc_html_e( 'Remote and hybrid teams', 'q4-command' ); ?></li>
                    <li><?php esc_html_e( 'Security-conscious SMB\'s', 'q4-command' ); ?></li>
                </ul>
            </div>
        </div>

        <?php if ( ! empty( $navigation['utility'] ) ) : ?>
        <div class="footer-utility">
            <p class="footer-utility-title"><?php esc_html_e( 'Quick links', 'q4-command' ); ?></p>
            <?php q4_command_render_navigation_links( $navigation['utility'], 'footer-utility-links' ); ?>
        </div>
        <?php endif; ?>

        <div class="footer-meta">
            <p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php esc_html_e( 'Q4 GEMS. All rights reserved.', 'q4-command' ); ?></p>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
