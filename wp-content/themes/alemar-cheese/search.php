<?php
/*
Template Name: Page Default Template
URL: http://alemarcheese.com/?s=SEARCHTERM
*/
?>
<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>

                <div class="wrapper">
                    <div role="main">










<?php if ( have_posts() ): ?>
<h2>Search Results for '<?php echo get_search_query(); ?>'</h2>
<ol>
<?php while ( have_posts() ) : the_post(); ?>
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
<h2>No results found for '<?php echo get_search_query(); ?>'</h2>
<?php endif; ?>









                    </div>
                </div> <!-- // END wrapper -->

<?php Utilities::get_template_parts( array( 'includes/global/footer','includes/global/html-footer' ) ); ?>