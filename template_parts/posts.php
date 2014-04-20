<?php while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="post-header">
			<?php edit_post_link('Edit'); ?>
			<h2 class="post-title">
				<a rel="bookmark"
				   href="<?php the_permalink() ?>"
				   title="<?php the_title_attribute(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
		</header>

		<div class="post-content">
			<?php the_post_thumbnail(); ?>
			<?php the_excerpt() ?>
		</div>

		<footer class="post-footer">
			<?php get_template_part('template_parts/post-meta'); ?>
			<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
		</footer>
	</article>
<?php endwhile; ?>

<?php get_template_part('template_parts/posts_navigation'); ?>
