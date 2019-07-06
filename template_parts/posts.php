<div class="posts-listing">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="post-header">
                <?php edit_post_link('Edit'); ?>
                <h2 class="post-title">
                    <a rel="bookmark"
                       href="<?php the_permalink() ?>"
                       title="<?php the_title_attribute(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <?php get_template_part('template_parts/post-meta'); ?>
            </header>

            <div class="post-content">
                <?php the_post_thumbnail(); ?>
                <?php the_excerpt() ?>
            </div>

            <footer class="post-footer">
                <?php get_template_part('template_parts/post-tags'); ?>
            </footer>
        </article>
    <?php endwhile; ?>
</div>

<?php get_template_part('template_parts/posts_navigation'); ?>
