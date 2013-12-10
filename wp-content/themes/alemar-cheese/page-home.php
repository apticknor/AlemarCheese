<?php
/*
Template Name: Home Page Template
URL: http://alemarcheese.com/
*/
?>
<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>

                <div class="main" role="main">
                    <div class="wrapper">

                        <div class="grid">
                            <div class="grid-col grid-col_main">


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                                <div class="feature">
<?php if (has_post_thumbnail($post->ID)) { ?>
                                    <div class="feature-media">
                                        <div class="poster">
                                            <div class="poster-img">
                                                <?php the_post_thumbnail('large'); ?>
                                            </div>
                                            <div class="poster-caption">
                                                <?php echo get_bloginfo('description'); ?>
                                            </div>
                                        </div>
                                    </div>
<?php } ?>
                                </div>
<?php endwhile; ?>


                            </div> <!-- // END grid-col_main -->
                            <div class="grid-col grid-col_sub">

<?php Utilities::get_template_parts(array('includes/components/sidebar-home')); ?>

                            </div> <!-- // END grid-col_sub -->
                        </div> <!-- // END grid -->

                    </div> <!-- // END wrapper -->
                </div> <!-- // END main -->

<?php Utilities::get_template_parts( array( 'includes/global/footer','includes/global/html-footer' ) ); ?>