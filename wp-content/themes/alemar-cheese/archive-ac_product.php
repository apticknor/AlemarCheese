<?php Utilities::get_template_parts(array('includes/global/html-header', 'includes/global/header')); ?>

                <div class="main" role="main">
                    <div class="wrapper">
                        <h1 class="isHidden">Latest Blog Posts</h1>
                        <div class="grid">
                            <div class="grid-col grid-col_main">

<?php Utilities::get_template_parts(array('includes/components/listing-product')); ?>

                            </div> <!-- // END grid-col_main -->
                            <div class="grid-col grid-col_sub">

<?php Utilities::get_template_parts(array('includes/components/sidebar-product')); ?>

                            </div> <!-- // END grid-col_sub -->
                        </div> <!-- // END grid -->
                    </div> <!-- // END wrapper -->
                </div> <!-- // END main -->

<?php Utilities::get_template_parts(array('includes/global/footer','includes/global/html-footer')); ?>