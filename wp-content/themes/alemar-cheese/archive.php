<?php
/*
Template Name: Archive
URL: UNKNOWN
*/
?>
<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>

                <div class="main" role="main">
                    <div class="wrapper">
                        <h1 class="isHidden">
<?php if (is_day())   : echo get_the_date( 'D M Y' );
  elseif (is_month()) : echo get_the_date( 'M Y' );
  elseif (is_year())  : echo get_the_date( 'Y' );
  else                : echo 'Archive';
  endif;
?>
                        </h1>
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