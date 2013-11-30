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
                                        <img src="http://maps.googleapis.com/maps/api/staticmap?center=622+North+Riverfront+Dr+Mankato+MN&zoom=14&scale=2&size=480x320&maptype=roadmap&markers=color:red%7C622+North+Riverfront+Dr+Mankato+MN&sensor=false" alt="" />
                                    </div>
                                </div>
                                
                                <div class="widget">
                                    <div class="widget-bd">
                                        
                                        <div class="grid">
                                            <div class="grid-col grid-col_half">
                                                622 North Riverfront Dr<br/>Mankato MN 56001
                                            </div>
                                            <div class="grid-col grid-col_half">
                                                 Phone: 507.385.1004
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