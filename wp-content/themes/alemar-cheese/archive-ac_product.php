<?php Utilities::get_template_parts(array('includes/global/html-header', 'includes/global/header')); ?>

                <div class="main" role="main">
                    <div class="wrapper">
                        <h1 class="isHidden">Products</h1>
                        <div class="grid">
                            <div class="grid-col grid-col_full">
<?php
/* Reverse the sort order of products showing oldest products first */
query_posts($query_string . "&order=ASC");
?>

<?php Utilities::get_template_parts(array('includes/components/listing-product')); ?>

                            </div> <!-- // END grid-col -->
                        </div> <!-- // END grid -->
                    </div> <!-- // END wrapper -->
                </div> <!-- // END main -->

<?php Utilities::get_template_parts(array('includes/global/footer','includes/global/html-footer')); ?>