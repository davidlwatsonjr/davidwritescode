<?php while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2>
			<a rel="bookmark"
			   href="<?php the_permalink() ?>"
			   title="Permanent Link to <?php the_title_attribute(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>

		<p class="postmeta">
			Posted on
			<a href="<?php the_permalink() ?>"><?php the_time( get_option( 'date_format' ) ) ?></a>
			by <?php the_author(); ?>
		</p>

		<div class="post-content">
			<?php the_post_thumbnail(); ?>
			<?php the_excerpt() ?>
		</div>

		<p>
			<?php the_tags('<strong>Tags:</strong> ', ', ', '</p><p>'); ?>
			<strong>Posted in</strong>
			<?php the_category(', '); ?> |
			<?php edit_post_link('Edit', '', ' | '); ?>
			<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
		</p>
	</article>
<?php endwhile; ?>

<?php get_template_part('template_parts/posts_navigation'); ?>
