<?php get_header(); ?>

    <section class="main-content">
        <?php if (have_posts()) : ?>

            <h2 class="page-type-heading">
                <?php dwc_echo_archive_page_title(); ?>
            </h2>

            <?php get_template_part('template_parts/posts'); ?>

        <?php else : ?>

            <?php get_template_part('template_parts/content_not_found'); ?>

        <?php endif; ?>
    </section>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
