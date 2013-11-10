                <div class="wrapper">
                    <div class="masthead" role="banner">
                        <div class="masthead-logo">
                            <a href="<?php echo home_url(); ?>">
                                <span class="isHidden"><?php bloginfo( 'name' ); ?></span>
                            </a>
                        </div>
                        <div class="masthead-nav" role="navigation">
                            <ul class="navPrimary">
                                <li>
                                    <a href="<?php echo get_page_link(9); ?>">Products</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_page_link(11); ?>">Blog</a>
                                </li>
                                <li>
                                    <a href="<?php $category_id = get_cat_ID('Media'); echo get_category_link($category_id); ?>">Media</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_page_link(13); ?>">About Us</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_page_link(15); ?>">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div> <!-- // END wrapper -->