<aside class="sidebar col-md-3">
  <?php   /* Widgetized sidebar, if you have the plugin installed. */
  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-widget-area') ) : ?>

    <div class="widget-block">
      <h2>Category</h2>
      <ul>
        <?php wp_list_categories('show_count=1&title_li='); ?>
      </ul>
    </div>

    <div class="widget-block">
      <h2>Archives</h2>
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>
    </div>

    <?php /* If this is the frontpage */ if ( is_home() || is_page() ) : ?>
      <div class="widget-block">
        <h2>Meta</h2>
        <ul>
          <?php wp_register(); ?>
          <li><?php wp_loginout(); ?></li>
          <?php wp_meta(); ?>
        </ul>
      </div>
    <?php endif; ?>

  <?php endif; ?>
</aside>

