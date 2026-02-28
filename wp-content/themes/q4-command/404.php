<?php get_header(); ?>
<section class="section page-hero panel-dark is-404">
    <div class="page-hero-copy">
        <p class="section-kicker"><?php esc_html_e( '404', 'q4-command' ); ?></p>
        <h1><?php esc_html_e( 'The page moved. The next step did not.', 'q4-command' ); ?></h1>
        <p><?php esc_html_e( 'Use the primary navigation to jump back into services, insights, or contact Q4 GEMS directly.', 'q4-command' ); ?></p>
        <div class="hero-actions">
            <a class="button button--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go home', 'q4-command' ); ?></a>
            <a class="button button--secondary" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php esc_html_e( 'Contact Q4 GEMS', 'q4-command' ); ?></a>
        </div>
    </div>
</section>
<?php get_footer(); ?>
