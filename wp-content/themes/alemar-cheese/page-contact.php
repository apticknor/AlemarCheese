<?php
/*
Template Name: Contact Us Template
URL: http://alemarcheese.com/contact-us
*/
?>
<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>

                <div class="main" role="main">
                    <div class="wrapper">
                        
                        <div class="grid">
                            <div class="grid-col grid-col_half">
                                <div class="widget">
                                    <div class="widget-bd">
                                        <img src="<?php the_field('google_map_image_link', 'options'); ?>" alt="" />
                                    </div>
                                </div>
                                
                                <div class="widget">
                                    <div class="widget-bd">
                                        
                                        <div class="grid">
                                            <div class="grid-col grid-col_half">
                                                <?php the_field('address', 'options'); ?>
                                            </div>
                                            <div class="grid-col grid-col_half">
                                                 Phone: <?php the_field('phone_number', 'options'); ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div> <!-- // END grid-col_half -->
                            <div class="grid-col grid-col_half">
                            
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                                <div class="feature">
                                    <div class="feature-hd">
                                        <h1 class="hdg hdg_sm"><?php the_title(); ?></h1>
                                    </div>
                                    <div class="feature-bd">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
<?php endwhile; ?>
                            </div> <!-- // END grid-col_half -->
                        </div> <!-- // END grid -->

                    </div> <!-- // END wrapper -->
                </div> <!-- // END main -->

<?php Utilities::get_template_parts( array( 'includes/global/footer','includes/global/html-footer' ) ); ?>