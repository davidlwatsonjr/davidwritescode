<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>

    <section class="main-content">

        <?php get_template_part('template_parts/searchform'); ?>

        <h2>Archives by Month:</h2>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    	</ul>

        <h2>Archives by Subject:</h2>
    	<ul>
    		 <?php wp_list_categories(); ?>
    	</ul>

    </section>

    <aside class="sidebar">
        <?php get_sidebar(); ?>
    </aside>

<?php get_footer(); ?>
