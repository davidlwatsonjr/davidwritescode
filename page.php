<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="page-content">
            <?php edit_post_link('Edit'); ?>
            <?php the_content(); ?>
        </section>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>
