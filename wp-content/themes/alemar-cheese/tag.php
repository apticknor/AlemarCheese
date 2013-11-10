<?php
/*
Template Name: Page Default Template
URL: http://alemarcheese.com/tag/TAG_NAME
*/
?>
<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>

                <div class="wrapper">
                    <div class="main" role="main">
                        <h1 class="isHidden">Tag Archive: <?php echo single_tag_title( '', false ); ?></h1>
                        <div class="grid">
                            <div class="grid-col grid-col_main">

<?php if (have_posts()) : ?>
                                <ol class="vlist">
<?php while (have_posts()) : the_post(); ?>
                                    <li>
<?php Utilities::get_template_parts(array('includes/snippets/excerpt')); ?>
                                    </li>
<?php endwhile; ?>
                                </ol>
<?php endif; ?>

                            </div> <!-- // END grid-col_main -->
                            <div class="grid-col grid-col_sub">

<?php Utilities::get_template_parts(array('includes/components/sidebar')); ?>

                            </div> <!-- // END grid-col_sub -->
                        </div> <!-- // END grid -->
                    </div> <!-- // END main -->
                </div> <!-- // END wrapper -->

<?php Utilities::get_template_parts( array( 'includes/global/footer','includes/global/html-footer' ) ); ?>