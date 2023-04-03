        <footer>
            <div class="container-fluid py-5 footer">
                <div class="container py-4">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <h4 class="footer__navtitle">O nas</h4>
                            <?php wp_nav_menu(array(
                                'theme_location' => 'footer-about',
                                'container' => true,
                                'menu_class' => '',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto pe-xl-5 pe-3 w-100 justify-content-end %2$s">%3$s</ul>',
                                'depth' => 1,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            )); ?>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 pt-4 pt-md-0">
                            <h4 class="footer__navtitle">Ubezpieczenia</h4>
                            <?php wp_nav_menu(array(
                                'theme_location' => 'footer-insurance',
                                'container' => true,
                                'menu_class' => '',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto pe-xl-5 pe-3 w-100 justify-content-end %2$s">%3$s</ul>',
                                'depth' => 1,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            )); ?>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 pt-4 pt-lg-0">
                            <h4 class="footer__navtitle">Pomoc</h4>
                            <?php wp_nav_menu(array(
                                'theme_location' => 'footer-support',
                                'container' => true,
                                'menu_class' => '',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto pe-xl-5 pe-3 w-100 justify-content-end %2$s">%3$s</ul>',
                                'depth' => 1,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            )); ?>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 pt-4 pt-lg-0">
                            <h4 class="footer__navtitle">Infolinia</h4>
                            <a class="footer__phone" href="tel:+48223111234">+48 22 311 1234</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>
        </body>

        </html>