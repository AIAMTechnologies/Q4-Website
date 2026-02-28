<?php
get_header();
$home = q4_command_home_content();
?>
<section class="hero section section--hero panel-dark">
    <div class="hero-copy">
        <p class="section-kicker"><?php echo esc_html( $home['eyebrow'] ); ?></p>
        <h1><?php echo esc_html( $home['title'] ); ?></h1>
        <p class="hero-intro"><?php echo esc_html( $home['intro'] ); ?></p>
        <div class="hero-actions">
            <?php foreach ( $home['actions'] as $action ) : ?>
                <a class="button button--<?php echo esc_attr( $action['kind'] ); ?>" href="<?php echo esc_url( $action['url'] ); ?>"><?php echo esc_html( $action['label'] ); ?></a>
            <?php endforeach; ?>
        </div>
        <div class="signal-grid">
            <?php foreach ( $home['signals'] as $signal ) : ?>
                <article class="signal-card">
                    <strong><?php echo esc_html( $signal['value'] ); ?></strong>
                    <span><?php echo esc_html( $signal['label'] ); ?></span>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="hero-visual">
        <figure class="hero-image-frame">
            <img src="<?php echo esc_url( $home['hero_image']['url'] ); ?>" alt="<?php echo esc_attr( $home['hero_image']['alt'] ); ?>" />
        </figure>
        <div class="hero-stack">
            <?php foreach ( $home['hero_cards'] as $card ) : ?>
                <article class="hero-stack-card">
                    <h2><?php echo esc_html( $card['title'] ); ?></h2>
                    <p><?php echo esc_html( $card['text'] ); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section logo-section">
    <div class="section-heading inline-heading">
        <p class="section-kicker"><?php esc_html_e( 'Partner ecosystem', 'q4-command' ); ?></p>
        <h2><?php esc_html_e( 'Built to align with the platforms and vendors clients already rely on.', 'q4-command' ); ?></h2>
    </div>
    <div class="logo-strip" aria-label="<?php esc_attr_e( 'Partner and platform logos', 'q4-command' ); ?>">
        <?php foreach ( $home['logo_strip'] as $logo ) : ?>
            <figure class="logo-chip"><img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" /></figure>
        <?php endforeach; ?>
    </div>
</section>

<section class="section services-section">
    <div class="section-heading">
        <p class="section-kicker"><?php esc_html_e( 'Core services', 'q4-command' ); ?></p>
        <h2><?php esc_html_e( 'Managed IT, cybersecurity, Microsoft 365, and continuity services built to support growth.', 'q4-command' ); ?></h2>
        <p><?php esc_html_e( 'Q4 GEMS combines proactive support, security-minded administration, cloud guidance, and strategic planning so teams are not left juggling multiple vendors.', 'q4-command' ); ?></p>
    </div>
    <div class="card-grid card-grid--services">
        <?php foreach ( $home['services'] as $service ) : ?>
            <article class="service-card">
                <p class="card-kicker"><?php echo esc_html( $service['eyebrow'] ); ?></p>
                <h3><?php echo esc_html( $service['title'] ); ?></h3>
                <p><?php echo esc_html( $service['description'] ); ?></p>
                <a href="<?php echo esc_url( home_url( '/' . $service['slug'] . '/' ) ); ?>"><?php esc_html_e( 'View service', 'q4-command' ); ?></a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section split-section panel-muted">
    <div class="section-heading split-copy">
        <p class="section-kicker"><?php esc_html_e( 'Why Q4 GEMS', 'q4-command' ); ?></p>
        <h2><?php esc_html_e( 'A security-minded MSP for organizations that want fewer disruptions and clearer direction.', 'q4-command' ); ?></h2>
        <p><?php esc_html_e( 'Q4 GEMS supports daily operations while helping leadership improve resilience, employee productivity, and return on technology investments.', 'q4-command' ); ?></p>
    </div>
    <div class="feature-stack">
        <?php foreach ( $home['platform'] as $item ) : ?>
            <article class="feature-card">
                <h3><?php echo esc_html( $item['title'] ); ?></h3>
                <p><?php echo esc_html( $item['text'] ); ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section process-section">
    <div class="section-heading">
        <p class="section-kicker"><?php esc_html_e( 'How Q4 GEMS works', 'q4-command' ); ?></p>
        <h2><?php esc_html_e( 'A practical path from reactive IT support to a stronger operating model.', 'q4-command' ); ?></h2>
    </div>
    <div class="timeline-grid">
        <?php foreach ( $home['process'] as $item ) : ?>
            <article class="timeline-card">
                <span class="timeline-step"><?php echo esc_html( $item['step'] ); ?></span>
                <h3><?php echo esc_html( $item['title'] ); ?></h3>
                <p><?php echo esc_html( $item['text'] ); ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section industries-section panel-dark">
    <div class="section-heading">
        <p class="section-kicker"><?php esc_html_e( 'Industry focus', 'q4-command' ); ?></p>
        <h2><?php esc_html_e( 'IT support and cybersecurity shaped around the environments clients operate every day.', 'q4-command' ); ?></h2>
    </div>
    <div class="card-grid card-grid--industries">
        <?php foreach ( $home['industries'] as $industry ) : ?>
            <article class="industry-card">
                <h3><?php echo esc_html( $industry['title'] ); ?></h3>
                <p><?php echo esc_html( $industry['text'] ); ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section testimonials-section">
    <div class="section-heading inline-heading">
        <p class="section-kicker"><?php esc_html_e( 'Client perspective', 'q4-command' ); ?></p>
        <h2><?php esc_html_e( 'What clients say about working with Q4 GEMS.', 'q4-command' ); ?></h2>
    </div>
    <div class="card-grid card-grid--testimonials">
        <?php foreach ( $home['testimonials'] as $testimonial ) : ?>
            <blockquote class="testimonial-card">
                <p>"<?php echo esc_html( $testimonial['quote'] ); ?>"</p>
                <cite><?php echo esc_html( $testimonial['name'] ); ?></cite>
            </blockquote>
        <?php endforeach; ?>
    </div>
</section>

<section class="section insights-section">
    <div class="section-heading inline-heading">
        <p class="section-kicker"><?php esc_html_e( 'Insights', 'q4-command' ); ?></p>
        <h2><?php esc_html_e( 'Practical guidance on managed IT, cybersecurity, Microsoft 365, and business continuity.', 'q4-command' ); ?></h2>
    </div>
    <div class="card-grid card-grid--posts">
        <?php
        $insights = new WP_Query(
            array(
                'post_type'           => 'post',
                'posts_per_page'      => 3,
                'ignore_sticky_posts' => true,
            )
        );

        if ( $insights->have_posts() ) :
            while ( $insights->have_posts() ) :
                $insights->the_post();
                get_template_part( 'template-parts/post-card' );
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

<section class="section faq-section panel-muted">
    <div class="section-heading">
        <p class="section-kicker"><?php esc_html_e( 'FAQ', 'q4-command' ); ?></p>
        <h2><?php esc_html_e( 'Common questions about managed IT services and cybersecurity support.', 'q4-command' ); ?></h2>
    </div>
    <div class="faq-list">
        <?php foreach ( $home['faq'] as $index => $faq ) : ?>
            <article class="faq-item">
                <button class="faq-toggle" type="button" aria-expanded="false" aria-controls="faq-panel-<?php echo esc_attr( $index ); ?>" data-faq-toggle>
                    <span><?php echo esc_html( $faq['question'] ); ?></span>
                    <span class="faq-icon" aria-hidden="true">+</span>
                </button>
                <div class="faq-panel" id="faq-panel-<?php echo esc_attr( $index ); ?>" hidden>
                    <p><?php echo esc_html( $faq['answer'] ); ?></p>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section section--contact-home">
    <?php
    q4_command_render_contact_form(
        array(
            'title' => __( 'Request a strategy conversation', 'q4-command' ),
            'text'  => __( 'Tell Q4 GEMS where support, security, or Microsoft 365 is getting in the way and we will follow up with a practical next step.', 'q4-command' ),
        )
    );
    ?>
</section>
<?php get_footer(); ?>
