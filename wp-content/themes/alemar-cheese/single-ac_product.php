<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>

                <div class="main" role="main">
                    <div class="wrapper">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                        <div class="split">
                            <div class="split-md">
                                <?php the_post_thumbnail('large'); ?>
                                <?php Utilities::get_template_parts(array('includes/components/sidebar-product')); ?>
                            </div>
                            <div class="split-bd">

                                <div class="feature">
                                    <div class="feature-hd feature-hd_push">
                                        <h2 class="hdg hdg_lg"><?php the_title(); ?></h2>
                                    </div>
                                    <div class="feature-bd">
                                        <div class="userContent">
                                            <?php the_content(); ?>
                                            <?php Utilities::get_template_parts( array( 'includes/snippets/paypal-button' ) ); ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

<?php endwhile; ?>


                    </div> <!-- // END wrapper -->
                </div> <!-- // END main -->

<?php Utilities::get_template_parts( array( 'includes/global/footer','includes/global/html-footer' ) ); ?>