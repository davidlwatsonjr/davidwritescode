<header class="header">
    <div class="branding">
        <h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
        <h2 class="lead"><?php bloginfo('description'); ?></h2>
    </div>

    <?php get_search_form(); ?>

    <nav class="header-nav">
        <?php wp_nav_menu(array('fallback_cb' => 'dwc_page_menu', 'depth' => '3', 'theme_location' => 'primary', 'link_before' => '', 'link_after' => '', 'container' => false)); ?>
    </nav>
</header>
