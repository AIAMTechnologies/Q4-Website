<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="section page-hero panel-dark">
    <div class="page-hero-copy">
        <p class="section-kicker"><?php echo esc_html( get_the_date() ); ?> | <?php echo esc_html( q4_command_read_time( get_the_ID() ) ); ?> <?php esc_html_e( 'min read', 'q4-command' ); ?></p>
        <h1><?php the_title(); ?></h1>
        <p><?php echo esc_html( q4_command_plain_excerpt( get_the_ID(), 34 ) ); ?></p>
    </div>
</section>
<section class="section content-surface post-layout">
    <article <?php post_class( 'entry-content prose-content' ); ?>>
        <?php the_content(); ?>
    </article>
    <aside class="post-sidebar">
        <div class="post-sidebar-card">
            <p class="section-kicker"><?php esc_html_e( 'Need help applying this?', 'q4-command' ); ?></p>
            <h2><?php esc_html_e( 'Talk to Q4 GEMS about managed IT or cybersecurity support.', 'q4-command' ); ?></h2>
            <a class="button button--primary" href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php esc_html_e( 'Contact Q4 GEMS', 'q4-command' ); ?></a>
        </div>
    </aside>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
