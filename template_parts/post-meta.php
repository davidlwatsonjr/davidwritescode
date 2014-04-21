<div class="post-meta">
    <p>
        In <?php the_category(', '); ?>
        by <?php the_author_posts_link(); ?>
        &bull; <?php the_time( get_option( 'date_format' ) ) ?> &bull;
        <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
    </p>
        <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
</div>
