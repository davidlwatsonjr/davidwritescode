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
    </body>
</html>
