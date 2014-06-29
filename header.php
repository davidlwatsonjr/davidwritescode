<!doctype html>
<html <?php language_attributes('xhtml'); ?>>
	<head>
		<meta charset="utf-8">
		<title><?php dwc_title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php dwc_echo_og_('description'); ?>">

		<?php get_template_part('template_parts/favicon'); ?>

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
		<?php get_template_part('template_parts/google_analytics'); ?>
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