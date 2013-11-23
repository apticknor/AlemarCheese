<?php
/*
Template Name: Page Default Template
URL: http://alemarcheese.com/YYYY/MM/POST_NAME/
*/
?>
<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>

                <div class="main" role="main">
                    <div class="wrapper">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                        <div class="grid">
                            <div class="grid-col">
                                <div class="feature">
                                    <div class="feature-hd">
                                        <h2 class="hdg hdg_lg"><?php the_title(); ?></h2>
                                    </div>
                                    <div class="feature-meta">
                                        <p>Posted on <?php the_time(get_option('date_format')); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php endwhile; ?>

                        <div class="grid">
                            <div class="grid-col grid-col_main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
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
<?php
    // comments? nope.
    // comments_template('', true);
?>
<?php endwhile; ?>

                            </div> <!-- // END grid-col_main -->
                            <div class="grid-col grid-col_sub">

<?php Utilities::get_template_parts(array('includes/components/sidebar')); ?>

                            </div> <!-- // END grid-col_sub -->
                        </div> <!-- // END grid -->

                    </div> <!-- // END wrapper -->
                </div> <!-- // END main -->

<?php Utilities::get_template_parts( array( 'includes/global/footer','includes/global/html-footer' ) ); ?>