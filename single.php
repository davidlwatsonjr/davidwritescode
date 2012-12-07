<?php get_header(); ?>
	<div class="leftPanel">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<div class="entryContent">
			<?php /*
				<div class="addthis_toolbox addthis_floating_style addthis_counter_style" style="left:0;top:170px;">
					<a class="addthis_button_facebook_like" fb:like:layout="box_count"></a>
					<a class="addthis_button_tweet" tw:count="vertical" tw:via="davidlwatsonjr"></a>
					<a class="addthis_button_google_plusone" g:plusone:size="tall"></a>
					<!--<a class="addthis_button_linkedin"></a>--><
					<a class="addthis_counter"></a>
				</div>
				<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
				<!-- .addthis -->	
			*/ ?>
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
                <div class="clear"></div>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?><?php /*
				<div class="fb-like" data-href="<?php get_permalink(); ?>" data-send="false" data-layout="box_count" data-width="50" data-show-faces="false"></div>
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="davidlwatsonjr" data-size="large">Tweet</a>
				<div class="g-plusone" data-href="<?php get_permalink(); ?>" data-size="tall"></div>
				*/ ?><?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>

			<div class="navigation">
				<div class="alignleft"><?php previous_post_link('&laquo; %link'); ?></div>
				<div class="alignright"><?php next_post_link('%link &raquo;'); ?></div>
			</div>		
			
		</div>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>

	</div>
	<!-- .leftPanel -->
	<div class="rightPan">
		<?php get_sidebar(); ?>
	</div>
	<!-- .rightPan -->
	
<?php get_footer(); ?>
