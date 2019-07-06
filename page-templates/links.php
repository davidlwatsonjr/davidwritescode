<?php
/*
Template Name: Links
*/
?>
<?php get_header(); ?>

    <section class="main-content col-md-9">

        <h2 class="page-type-heading">Links:</h2>
        <ul><?php wp_list_bookmarks(); ?></ul>

    </section>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
