<?php get_header(); ?>
<section class="section page-hero panel-dark">
    <div class="page-hero-copy">
        <p class="section-kicker"><?php esc_html_e( 'Insights', 'q4-command' ); ?></p>
        <h1><?php esc_html_e( 'Practical articles on IT operations, cybersecurity, Microsoft 365, and resilience.', 'q4-command' ); ?></h1>
        <p><?php esc_html_e( 'The blog layout is simplified to keep the content scannable and SEO-friendly while removing the older demo-theme clutter.', 'q4-command' ); ?></p>
    </div>
</section>
<section class="section content-surface">
    <div class="card-grid card-grid--posts">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/post-card' ); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <?php the_posts_pagination(); ?>
</section>
<?php get_footer(); ?>
