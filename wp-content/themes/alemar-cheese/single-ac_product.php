<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>

                <div class="main" role="main">
                    <div class="wrapper">

                        <div class="grid">
                            <div class="grid-col grid-col_main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                                <div class="flag">
<?php if (has_post_thumbnail($post->ID)) { ?>
                                    <div class="flag-media">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
<?php } ?>
                                    <div class="flag-bd">
                                        <div class="feature">
                                            <div class="feature-hd feature-hd_push">
                                                <h2 class="hdg hdg_lg"><?php the_title(); ?></h2>
                                            </div>
                                            <div class="feature-bd">
                                                <?php the_content(); ?>
                                            </div>
                                            <div class="feature-ft">
                                                <?php the_field('paypal_add_to_cart_id'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- // END flag -->
<?php endwhile; ?>

                            </div> <!-- // END grid-col_main -->
                            <div class="grid-col grid-col_sub">

<?php Utilities::get_template_parts(array('includes/components/sidebar')); ?>

                            </div> <!-- // END grid-col_sub -->
                        </div> <!-- // END grid -->


                    </div> <!-- // END wrapper -->
                </div> <!-- // END main -->

<?php Utilities::get_template_parts( array( 'includes/global/footer','includes/global/html-footer' ) ); ?>