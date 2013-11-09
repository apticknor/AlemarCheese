                <div class="wrapper">
                    <div class="masthead" role="banner">
                        <div class="masthead-logo">
                            <a href="<?php echo home_url(); ?>">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        </div>
                        <div class="masthead-nav" role="navigation">
                            <ul class="navPrimary">
                                <li>
                                    <a href="<?php echo get_page_link(205); ?>">Products</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_page_link(19); ?>">Blog</a>
                                </li>
                                <li>
                                    <a href="<?php $category_id = get_cat_ID('Media'); echo get_category_link($category_id); ?>">Media</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_page_link(6); ?>">About Us</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_page_link(21); ?>">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div> <!-- // END wrapper -->