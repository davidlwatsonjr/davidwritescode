<?php get_header(); ?>

	<section class="main-content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>

				<div class="post-content">
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>

			<?php comments_template(); ?>

		<?php endwhile; endif; ?>
	</section>

	<aside class="sidebar">
		<?php get_sidebar(); ?>
	</aside>

<?php get_footer(); ?>
