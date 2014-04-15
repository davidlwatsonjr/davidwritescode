<?php get_header(); ?>

	<section class="main-content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>

				<div class="post-content">
					<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
	                <div class="clear"></div>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>

				<?php get_template_part('template_parts/post_navigation'); ?>

			</article>

			<?php comments_template(); ?>

		<?php endwhile; endif; ?>
	</section>

	<aside class="sidebar">
		<?php get_sidebar(); ?>
	</aside>

<?php get_footer(); ?>
