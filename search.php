<?php get_header(); ?>

    <section class="main-content">
        <?php if (have_posts()) : ?>

            <h2 class="page-type-heading">Search Results</h2>
            <?php get_template_part('template_parts/posts'); ?>

        <?php else : ?>

            <h2 class="page-type-heading">No posts found. Try a different search?</h2>
            <?php get_search_form(); ?>

        <?php endif; ?>
    </section>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
