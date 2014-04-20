<!doctype html>
<html <?php language_attributes('xhtml'); ?>>
	<head>
		<meta charset="utf-8">
		<title><?php dwc_title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php dwc_echo_og_('description'); ?>">

		<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
		<link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196">
		<link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
		<meta name="msapplication-TileColor" content="#0E5DAA">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">

		<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
		<meta property="og:url" content="<?php dwc_echo_og_('url'); ?>"/>
		<meta property="og:type" content="<?php dwc_echo_og_('type'); ?>"/>
		<meta property="og:title" content="<?php dwc_echo_og_('title'); ?>"/>
		<meta property="og:description" content="<?php dwc_echo_og_('description'); ?>"/>

		<meta property="fb:admins" content="679587573"/>
		<meta property="article:author" content="679587573"/>

		<meta name="twitter:card" content="summary" />
		<meta name="twitter:creator" content="@davidlwatsonjr" />

		<link rel="author" href="https://plus.google.com/113092115740208953129/posts" />

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

		<link rel="alternate" type="application/rss+xml" title="Subscribe to <?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Subscribe to <?php bloginfo('name'); ?>" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php if ( is_singular() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		} ?>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> id="top">
		<script>
			var _gaq=[['_setAccount','UA-28395637-1'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.async=true;g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s);}(document,'script'));
		</script>
		<div class="page-wrapper">
			<header class="header">
				<div class="branding">
					<h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
					<h2><?php bloginfo('description'); ?></h2>
				</div>

				<?php get_search_form(); ?>

				<nav class="header-nav">
					<?php wp_nav_menu( array('fallback_cb' => 'dwc_page_menu', 'depth' => '3', 'theme_location' => 'primary', 'link_before' => '', 'link_after' => '', 'container' => false) ); ?>
				</nav>
			</header>

			<div class="content-wrapper">