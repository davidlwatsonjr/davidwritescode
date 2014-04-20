<?php get_header(); ?>

	<section class="main-content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<header class="post-header">
					<?php edit_post_link('Edit'); ?>
					<h2 class="post-title"><?php the_title(); ?></h2>
				</header>

				<div class="post-content">
					<?php the_content('<div class="serif">Read the rest of this entry &raquo;</div>'); ?>
				</div>

				<footer class="post-footer">
					<?php wp_link_pages(array('before' => '<div class="post-links-pages">Pages: ', 'after' => '</div>', 'next_or_number' => 'number')); ?>
					<?php // get_template_part('template_parts/rrssb'); ?>
					<?php get_template_part('template_parts/post-meta'); ?>
					<?php get_template_part('template_parts/post_navigation'); ?>
				</footer>
			</article>

			<?php comments_template(); ?>

		<?php endwhile; endif; ?>
	</section>

	<aside class="sidebar">
		<?php get_sidebar(); ?>
	</aside>

<?php get_footer(); ?>
