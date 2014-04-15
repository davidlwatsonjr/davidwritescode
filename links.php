<?php get_header(); ?>

    <section class="main-content">

		<h2 class="page-type-heading">Links:</h2>
		<ul><?php wp_list_bookmarks(); ?></ul>

	</section>

    <aside class="sidebar">
        <?php get_sidebar(); ?>
    </aside>

<?php get_footer(); ?>
