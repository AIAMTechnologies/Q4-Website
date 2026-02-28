<article <?php post_class( 'post-card' ); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <a class="post-card-media" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
    <?php endif; ?>
    <div class="post-card-copy">
        <p class="card-kicker"><?php echo esc_html( get_the_date() ); ?></p>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo esc_html( q4_command_plain_excerpt( get_the_ID(), 24 ) ); ?></p>
        <a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read article', 'q4-command' ); ?></a>
    </div>
</article>
