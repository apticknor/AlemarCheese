            </div> <!-- // END site-bd -->
            <div class="site-ft">
                <div class="footerWrapper">
                    <div class="wrapper">
                        <div class="footer" role="contentinfo">
                            <div class="footer-bd">
                                <ul class="hlist hlist_social">
                                    <li>
                                        <a href="<?php the_field('facebook_url', 'option'); ?>">
                                            <i class="icnSocial icnSocial_facebook"></i>
                                            <span class="isHidden">Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php the_field('twitter_url', 'option'); ?>">
                                            <i class="icnSocial icnSocial_twitter"></i>
                                            <span class="isHidden">Twitter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php the_field('googleplus_url', 'option'); ?>">
                                            <i class="icnSocial icnSocial_googlePlus"></i>
                                            <span class="isHidden">Google Plus</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php bloginfo('rss_url'); ?>">
                                            <i class="icnSocial icnSocial_rss"></i>
                                            <span class="isHidden">RSS Feed</span>
                                        </a>
                                    </li>
                                </ul> <!-- // END hlist_social -->
                            </div>
                            <div class="footer-ft">
                                <small>&copy;<?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.</small>
                            </div>
                        </div> <!-- // END footer -->
                    </div> <!-- // END wrapper -->
                </div> <!-- // END footerWrapper -->
            </div> <!-- // END site-ft -->
        </div> <!-- // END site -->
