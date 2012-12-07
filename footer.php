		</div>
			<!-- .bodyContent -->
		</div>
		<!-- .mainCont -->
		</div>
		<div class="footer">
			<div class="inner">
				<span class="random-message"><?php echo davidwritescode_random_message(); ?></span>
				<div class="right">
					<?php /* wp_nav_menu( array('fallback_cb' => 'lcb_page_menu_flat', 'container' => false, 'depth' => '1', 'theme_location' => 'secondary', 'link_before' => '', 'link_after' => '') ); */ ?>
					<?php dynamic_sidebar('footer-widget-area'); ?>
					<a href="#top">Top</a>
				</div>
			</div>
		</div>
		<!-- .footer -->

		<?php wp_footer(); ?>
		<script>
			var _gaq=[['_setAccount','UA-28395637-1'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script><?php /*
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
		<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4ff9369a70a5bb68"></script> */ ?>
	</body>
</html>