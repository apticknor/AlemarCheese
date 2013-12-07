<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>

                <div class="main" role="main">
                    <div class="wrapper">

                        <div class="grid">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                            <div class="grid-col grid-col_sub">
                                <?php the_post_thumbnail('medium'); ?>
                            </div> <!-- // END grid-col -->
                            
                            <div class="grid-col grid-col_half">
                                <div class="feature">
                                    <div class="feature-hd feature-hd_push">
                                        <h2 class="hdg hdg_lg"><?php the_title(); ?></h2>
                                    </div>
                                    <div class="feature-bd feature-bd_push">
                                        <div class="userContent">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- // END grid-col -->
                            <div class="grid-col grid-col_sub">
<?php Utilities::get_template_parts( array( 'includes/snippets/paypal-button' ) ); ?>

<?php Utilities::get_template_parts( array( 'includes/snippets/special-ingredients' ) ); ?>
<?php Utilities::get_template_parts( array( 'includes/snippets/awards' ) ); ?>
                            </div> <!-- // END grid-col -->
<?php endwhile; ?>
                        </div> <!-- // END grid -->


                    </div> <!-- // END wrapper -->
                </div> <!-- // END main -->

<?php Utilities::get_template_parts( array( 'includes/global/footer','includes/global/html-footer' ) ); ?>