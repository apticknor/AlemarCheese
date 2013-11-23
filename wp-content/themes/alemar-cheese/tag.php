<?php
/*
Template Name: Page Default Template
URL: http://alemarcheese.com/tag/TAG_NAME
*/
?>
<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>

                <div class="main" role="main">
                    <div class="wrapper">
                        <h1 class="isHidden">Tag Archive: <?php echo single_tag_title( '', false ); ?></h1>
                        <div class="grid">
                            <div class="grid-col grid-col_main">

<?php Utilities::get_template_parts(array('includes/components/listing')); ?>

                            </div> <!-- // END grid-col_main -->
                            <div class="grid-col grid-col_sub">

<?php Utilities::get_template_parts(array('includes/components/sidebar')); ?>

                            </div> <!-- // END grid-col_sub -->
                        </div> <!-- // END grid -->
                    </div> <!-- // END wrapper -->
                </div> <!-- // END main -->

<?php Utilities::get_template_parts( array( 'includes/global/footer','includes/global/html-footer' ) ); ?>