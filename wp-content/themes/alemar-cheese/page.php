<?php
/*
Template Name: Page Default Template
URL: http://alemarcheese.com/PAGE_NAME/
*/
?>
<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>

                <div class="main" role="main">
                    <div class="wrapper">


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                        <h1 class="isHidden"><?php the_title(); ?></h1>
                        <div class="feature">
<?php if (has_post_thumbnail($post->ID)) { ?>
                            <div class="feature-media">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                </a>
                            </div>
<?php } ?>
                            <div class="feature-bd">
                                <div class="userContent">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
<?php endwhile; ?>


                    </div> <!-- // END wrapper -->
                </div> <!-- // END main -->

<?php Utilities::get_template_parts( array( 'includes/global/footer','includes/global/html-footer' ) ); ?>