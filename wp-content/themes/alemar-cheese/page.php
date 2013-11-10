<?php
/*
Template Name: Page Default Template
URL: http://alemarcheese.com/PAGE_NAME/
*/
?>
<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>

                <div class="wrapper">
                    <div class="main" role="main">
                        Page Content
                    </div> <!-- // END main -->
                </div> <!-- // END wrapper -->

<?php Utilities::get_template_parts( array( 'includes/global/footer','includes/global/html-footer' ) ); ?>