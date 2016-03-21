			</div>
			<!-- .content-wrapper -->

			<footer class="footer">
				<div class="footer-content">
					<span class="random-message"><?php echo dwc_random_message(); ?></span>
					<div class="right">
						<a class="link-to-top" href="#top">Top</a>
						<?php wp_nav_menu([
							'fallback_cb' => 'dwc_page_menu_flat',
							'container' => false,
							'depth' => '1',
							'theme_location' => 'secondary',
							'link_before' => '',
							'link_after' => ''
						]); ?>
						<?php dynamic_sidebar('footer-widget-area'); ?>
					</div>
				</div>
			</footer>
			<!-- .footer -->

		</div>
		<!-- .page-wrapper -->

		<?php wp_footer(); ?>
<?php /*
		<div id="fb-root"></div>
		<script>
			(function(d, s, id){
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<script>
			(!function(d,s,id){
				var js,fjs=d.getElementsByTagName(s)[0];
				if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}
			}(document,"script","twitter-wjs"));
		</script>
		<script>
			(function(){
				var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				po.src = 'http://apis.google.com/js/plusone.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			}());
		</script>
		<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4ff9369a70a5bb68"></script>

*/ ?>
	</body>
</html>