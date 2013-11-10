                <div class="wrapper">
                    <div class="masthead" role="banner">
                        <div class="masthead-logo">
                            <a href="<?php echo home_url(); ?>">
                                <span class="isHidden"><?php bloginfo( 'name' ); ?></span>
                            </a>
                        </div> <!-- // END masthead-logo -->
                        <div class="masthead-nav" role="navigation">
                            <?php wp_nav_menu(array(
                                'theme_location'  => 'primary',
                                'menu'            => '',
                                'container'       => false,
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'navPrimary',
                                'menu_id'         => 'js-navPrimary',
                                'echo'            => true,
                                'fallback_cb'     => '',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => ''
                            ));?>
                        </div> <!-- // END masthead-nav -->
                    </div> <!-- // END masthead -->
                </div> <!-- // END wrapper -->