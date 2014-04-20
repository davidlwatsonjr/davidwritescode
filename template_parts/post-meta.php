<div class="post-meta">
    <p>
        Posted by <?php the_author_posts_link(); ?>
        on <?php the_time( get_option( 'date_format' ) ) ?>
        in <?php the_category(', '); ?>
    </p>
        <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
</div>
