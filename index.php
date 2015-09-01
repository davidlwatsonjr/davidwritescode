<?php get_header(); ?>

	<section class="main-content">
		<?php if (have_posts()) : ?>

			<?php get_template_part('template_parts/posts'); ?>

		<?php else : ?>

			<?php get_template_part('template_parts/content_not_found'); ?>

		<?php endif; ?>
	</section>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
