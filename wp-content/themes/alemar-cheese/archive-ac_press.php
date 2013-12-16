<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>

                <div class="main" role="main">
                    <div class="wrapper">
                        <h1 class="isHidden">Press</h1>
                        <div class="grid">
                            <div class="grid-col grid-col_full">

<ol class="blocks blocks_tight">
<?php while (have_posts()) : the_post(); ?>
    <li>
        <a id="<?php echo $post->post_name ?>" href="<?php the_field('press_link'); ?>" class="poster">
            <span class="poster-img">
                <?php the_post_thumbnail('large-thumbnail'); ?>
            </span>
            <span class="poster-caption">
                <?php the_title() ?>
            </span>
        </a>
    </li> <!-- // END blocks-item -->
<?php endwhile; ?>
</ol> <!-- // END blocks -->

<?php Utilities::get_template_parts(array('includes/snippets/pagination')); ?>

                            </div> <!-- // END grid-col_sub -->
                        </div> <!-- // END grid -->
                    </div> <!-- // END wrapper -->
                </div> <!-- // END main -->

<?php Utilities::get_template_parts( array( 'includes/global/footer','includes/global/html-footer' ) ); ?>