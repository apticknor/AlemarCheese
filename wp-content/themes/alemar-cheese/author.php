<?php
/*
Template Name: Author Template
URL: http://alemarcheese.com/author/USERNAME/
*/
?>
<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>

                <div class="wrapper">
                    <div class="main" role="main">












<?php if ( have_posts() ): the_post(); ?>

<h2>Author Archives: <?php echo get_the_author() ; ?></h2>

<?php if ( get_the_author_meta( 'description' ) ) : ?>
<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
<h3>About <?php echo get_the_author() ; ?></h3>
<?php the_author_meta( 'description' ); ?>
<?php endif; ?>

<ol>
<?php rewind_posts(); while ( have_posts() ) : the_post(); ?>
    <li>
        <div>
            <h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <span><?php the_date(); ?> <?php the_time(); ?></span> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
            <?php the_content(); ?>
        </div>
    </li>
<?php endwhile; ?>
</ol>

<?php else: ?>
<h2>No posts to display for <?php echo get_the_author() ; ?></h2>
<?php endif; ?>











                    </div> <!-- // END main -->
                </div> <!-- // END wrapper -->

<?php Utilities::get_template_parts( array( 'includes/global/footer','includes/global/html-footer' ) ); ?>