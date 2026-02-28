<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        $slug           = get_post_field( 'post_name', get_the_ID() );
        $title          = get_the_title();
        $page_key       = q4_command_page_key( $slug, $title );
        $page_data      = q4_command_page_data( $slug, $title );
        $page_sections  = q4_command_page_sections( $slug, $title );
        $is_custom_page = ! empty( $page_data );
        $is_contact     = 'contact' === $page_key;
        $is_services    = 'services' === $page_key;
        ?>
        <section class="section page-hero panel-dark">
            <div class="page-hero-copy">
                <?php if ( $page_data && ! empty( $page_data['eyebrow'] ) ) : ?>
                    <p class="section-kicker"><?php echo esc_html( $page_data['eyebrow'] ); ?></p>
                <?php endif; ?>
                <h1><?php echo esc_html( $page_data ? $page_data['title'] : $title ); ?></h1>
                <p><?php echo esc_html( $page_data ? $page_data['intro'] : q4_command_plain_excerpt( get_the_ID(), 38 ) ); ?></p>
            </div>
            <div class="page-hero-side">
                <div class="page-hero-panel">
                    <?php if ( ! empty( $page_sections['panel_title'] ) ) : ?>
                        <h2><?php echo esc_html( $page_sections['panel_title'] ); ?></h2>
                    <?php else : ?>
                        <h2><?php esc_html_e( 'How Q4 GEMS helps', 'q4-command' ); ?></h2>
                    <?php endif; ?>

                    <?php if ( ! empty( $page_sections['panel_text'] ) ) : ?>
                        <p><?php echo esc_html( $page_sections['panel_text'] ); ?></p>
                    <?php else : ?>
                        <p><?php esc_html_e( 'Q4 GEMS helps organizations turn technical requirements into practical next steps and clearer outcomes.', 'q4-command' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <?php if ( $is_custom_page && ! empty( $page_data['highlights'] ) ) : ?>
            <section class="section panel-muted">
                <div class="card-grid card-grid--highlights">
                    <?php foreach ( $page_data['highlights'] as $highlight ) : ?>
                        <article class="highlight-card">
                            <h2><?php echo esc_html( $highlight ); ?></h2>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

        <?php if ( $is_custom_page && ! empty( $page_sections['overview'] ) ) : ?>
            <section class="section split-section panel-muted">
                <div class="section-heading split-copy">
                    <p class="section-kicker"><?php echo esc_html( $page_sections['overview']['eyebrow'] ); ?></p>
                    <h2><?php echo esc_html( $page_sections['overview']['title'] ); ?></h2>
                    <p><?php echo esc_html( $page_sections['overview']['text'] ); ?></p>
                    <?php if ( ! empty( $page_sections['overview']['details'] ) ) : ?>
                        <ul class="detail-list">
                            <?php foreach ( $page_sections['overview']['details'] as $detail ) : ?>
                                <li><?php echo esc_html( $detail ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>

                <?php if ( $is_contact && ! empty( $page_sections['contact_points'] ) ) : ?>
                    <div class="contact-point-list">
                        <?php foreach ( $page_sections['contact_points'] as $point ) : ?>
                            <article class="contact-point">
                                <strong><?php echo esc_html( $point['label'] ); ?></strong>
                                <?php if ( ! empty( $point['link'] ) ) : ?>
                                    <a href="<?php echo esc_url( $point['link'] ); ?>"><?php echo esc_html( $point['value'] ); ?></a>
                                <?php else : ?>
                                    <span><?php echo esc_html( $point['value'] ); ?></span>
                                <?php endif; ?>
                            </article>
                        <?php endforeach; ?>
                    </div>
                <?php elseif ( ! empty( $page_sections['capabilities'] ) ) : ?>
                    <div class="feature-stack">
                        <?php foreach ( $page_sections['capabilities'] as $capability ) : ?>
                            <article class="feature-card">
                                <h3><?php echo esc_html( $capability['title'] ); ?></h3>
                                <p><?php echo esc_html( $capability['text'] ); ?></p>
                            </article>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>
        <?php endif; ?>

        <?php if ( $is_services ) : ?>
            <section class="section services-section">
                <div class="card-grid card-grid--services">
                    <?php foreach ( q4_command_home_content()['services'] as $service ) : ?>
                        <article class="service-card">
                            <p class="card-kicker"><?php echo esc_html( $service['eyebrow'] ); ?></p>
                            <h3><?php echo esc_html( $service['title'] ); ?></h3>
                            <p><?php echo esc_html( $service['description'] ); ?></p>
                            <a href="<?php echo esc_url( home_url( '/' . $service['slug'] . '/' ) ); ?>"><?php esc_html_e( 'View service', 'q4-command' ); ?></a>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

        <?php if ( $is_custom_page && ! empty( $page_sections['outcomes']['cards'] ) ) : ?>
            <section class="section">
                <div class="section-heading">
                    <p class="section-kicker"><?php echo esc_html( $page_sections['outcomes']['eyebrow'] ); ?></p>
                    <h2><?php echo esc_html( $page_sections['outcomes']['title'] ); ?></h2>
                    <?php if ( ! empty( $page_sections['outcomes']['text'] ) ) : ?>
                        <p><?php echo esc_html( $page_sections['outcomes']['text'] ); ?></p>
                    <?php endif; ?>
                </div>
                <div class="card-grid card-grid--outcomes">
                    <?php foreach ( $page_sections['outcomes']['cards'] as $card ) : ?>
                        <article class="outcome-card">
                            <h3><?php echo esc_html( $card['title'] ); ?></h3>
                            <p><?php echo esc_html( $card['text'] ); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

        <?php if ( $is_custom_page && ! empty( $page_sections['journey']['steps'] ) ) : ?>
            <section class="section process-section">
                <div class="section-heading">
                    <p class="section-kicker"><?php echo esc_html( $page_sections['journey']['eyebrow'] ); ?></p>
                    <h2><?php echo esc_html( $page_sections['journey']['title'] ); ?></h2>
                </div>
                <div class="timeline-grid">
                    <?php foreach ( $page_sections['journey']['steps'] as $step ) : ?>
                        <article class="timeline-card">
                            <span class="timeline-step"><?php echo esc_html( $step['step'] ); ?></span>
                            <h3><?php echo esc_html( $step['title'] ); ?></h3>
                            <p><?php echo esc_html( $step['text'] ); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

        <?php if ( $is_contact ) : ?>
            <section class="section section--contact-page">
                <?php
                get_template_part(
                    'template-parts/contact-form',
                    null,
                    array(
                        'title' => __( 'Request a consultation', 'q4-command' ),
                        'text'  => __( 'Tell us what you need help with and Q4 GEMS will follow up with the right next step.', 'q4-command' ),
                    )
                );
                ?>
            </section>
        <?php elseif ( $is_custom_page && ! empty( $page_sections['cta'] ) ) : ?>
            <section class="section page-cta-shell">
                <?php
                get_template_part(
                    'template-parts/contact-form',
                    null,
                    array(
                        'title' => $page_sections['cta']['title'],
                        'text'  => $page_sections['cta']['text'],
                    )
                );
                ?>
            </section>
        <?php elseif ( ! $is_custom_page ) : ?>
            <section class="section content-surface">
                <article <?php post_class( 'entry-content prose-content' ); ?>>
                    <?php the_content(); ?>
                </article>
            </section>
        <?php endif; ?>
        <?php
    endwhile;
endif;

get_footer();
