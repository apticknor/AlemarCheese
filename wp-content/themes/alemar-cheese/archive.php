<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>
<div role="main">


<?php if ( have_posts() ): ?>

<?php if ( is_day() ) : ?>
<h2>Archive: <?php echo  get_the_date( 'D M Y' ); ?></h2>
<?php elseif ( is_month() ) : ?>
<h2>Archive: <?php echo  get_the_date( 'M Y' ); ?></h2>
<?php elseif ( is_year() ) : ?>
<h2>Archive: <?php echo  get_the_date( 'Y' ); ?></h2>
<?php else : ?>
<h2>Archive</h2>
<?php endif; ?>

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
<h2>No posts to display</h2>
<?php endif; ?>


</div>
<?php Utilities::get_template_parts( array( 'includes/global/footer','includes/global/html-footer' ) ); ?>