<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>

                <div class="main" role="main">
                    <div class="wrapper">

                        <div class="grid">
                            <div class="grid-col grid-col_full">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                                <div class="media">
<?php if (has_post_thumbnail($post->ID)) { ?>
                                    <div class="media-media">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
<?php } ?>
                                    <div class="media-bd">
                                        <div class="feature">
                                            <div class="feature-hd feature-hd_push">
                                                <h2 class="hdg hdg_lg"><?php the_title(); ?></h2>
                                            </div>
                                            <div class="feature-bd">
                                                <?php the_content(); ?>
                                            </div>
                                            <div class="feature-ft">

<?php Utilities::get_template_parts( array( 'includes/snippets/paypal-button' ) ); ?>
<?php Utilities::get_template_parts( array( 'includes/snippets/special-ingredients' ) ); ?>
<?php Utilities::get_template_parts( array( 'includes/snippets/awards' ) ); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- // END flag -->
<?php endwhile; ?>

                            </div> <!-- // END grid-col -->
                        </div> <!-- // END grid -->


                    </div> <!-- // END wrapper -->
                </div> <!-- // END main -->

<?php Utilities::get_template_parts( array( 'includes/global/footer','includes/global/html-footer' ) ); ?>