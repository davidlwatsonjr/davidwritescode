<div class="post-meta">
    In <?php the_category(', '); ?>
    by <?php the_author_posts_link(); ?>
    &bull; <?php the_time( get_option( 'date_format' ) ) ?> &bull;
    <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
</div>
