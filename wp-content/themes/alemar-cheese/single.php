<?php
/*
Template Name: Page Default Template
URL: http://alemarcheese.com/YYYY/MM/POST_NAME/
*/
?>
<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>

                <div class="wrapper">
                    <div role="main">








<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div>

    <h2><?php the_title(); ?></h2>
    <span><?php the_date(); ?> <?php the_time(); ?></span> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
    <?php the_content(); ?>

    <?php if ( get_the_author_meta( 'description' ) ) : ?>
    <?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
    <h3>About <?php echo get_the_author() ; ?></h3>
    <?php the_author_meta( 'description' ); ?>
    <?php endif; ?>

    <?php comments_template( '', true ); ?>

</div>
<?php endwhile; ?>








                    </div>
                </div> <!-- // END wrapper -->

<?php Utilities::get_template_parts( array( 'includes/global/footer','includes/global/html-footer' ) ); ?>