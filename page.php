<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php edit_post_link('Edit', '<p>', '</p>'); ?>

		<div class="page-content">
			<?php the_content(); ?>
		</div>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
