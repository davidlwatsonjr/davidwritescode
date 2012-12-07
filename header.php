<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes('xhtml'); ?>> <![endif]-->
<!--[if IE 7]>	  <html class="no-js lt-ie9 lt-ie8" <?php language_attributes('xhtml'); ?>> <![endif]-->
<!--[if IE 8]>	  <html class="no-js lt-ie9" <?php language_attributes('xhtml'); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes('xhtml'); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php davidwritescode_title(); ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<link rel="alternate" type="application/rss+xml" title="Subscribe to <?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Subscribe to <?php bloginfo('name'); ?>" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script src="<?php echo get_bloginfo('template_url'); ?>/js/libs/modernizr-2.5.3.min.js"></script>
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">
	<div class="wrapperBg">
		<div class="mainCont">
			<div class="header">
				<h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
				<h2><?php bloginfo('description'); ?></h2>
				<?php get_template_part('searchform'); ?>
			</div><!-- .header -->
			<div class="headerMenu">
				<span></span>
				<span class="rightBg"></span>
				<?php wp_nav_menu( array('fallback_cb' => 'lcb_page_menu', 'depth' => '3', 'theme_location' => 'primary', 'link_before' => '', 'link_after' => '', 'container' => false) ); ?> 
			</div>
			<div class="clear"></div>
			<!-- .headerMenu -->
			<div class="bodyContent">