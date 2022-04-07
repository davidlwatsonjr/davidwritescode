<!DOCTYPE html>
<html <?php language_attributes('xhtml'); ?>>

    <head>
        <meta charset="utf-8">
        <title><?php dwc_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php get_template_part('template_parts/site_meta'); ?>
        <?php get_template_part('template_parts/favicon'); ?>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

        <link rel="alternate" type="application/rss+xml" title="Subscribe to <?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Subscribe to <?php bloginfo('name'); ?>" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php if (is_singular() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        } ?>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> id="top">
        <?php get_template_part('template_parts/google_analytics'); ?>
        <div class="container">
            <?php get_template_part('template_parts/site_header'); ?>
            <div class="content-wrapper row">
