<?php
// find the custom field with the states
$field = get_field_object(
    'field_52a474f75b74d',
    false,
    $options = array()
);
// get the choices listed in the custom field
$values = $field["choices"];
?>
<?php Utilities::get_template_parts(array('includes/global/html-header', 'includes/global/header')); ?>

                <div class="main" role="main">
                    <div class="wrapper">
                        <h1 class="isHidden">Locations</h1>
                        <div class="grid">
                            <div class="grid-col grid-col_full">

                                <ol>
                                <?php foreach($values as $value) { ?>
                                    <?php $posts_array = get_posts( array(
                                            'post_type' => 'ac_locations',
                                            'meta_query' => array(
                                                array(
                                                    'key' => 'location_state',
                                                    'value' => $value,
                                                )
                                            )
                                    )); ?>
                                    <? if ($posts_array) { ?>
                                    <li>
                                        <h2 class="hdg hdg_md"><?php echo $value; ?></h2>
                                        
                                        <ul>
                                        <?php foreach($posts_array as $post) { ?>
                                            <li>
                                                <a id="<?php echo $post->post_name ?>" href="<?php the_field('location_link') ?>"><?php the_title() ?></a><br/>
                                                <?php the_field('location_address_line_1') ?><br/>
                                                <?php if(get_field('location_address_line_2')) { ?>
                                                    <?php the_field('location_address_line_2') ?><br/>
                                                <?php } ?>
                                                <?php the_field('location_city') ?>, <?php the_field('location_state') ?>, <?php the_field('location_zip_code') ?><br/>
                                                <?php the_field('location_phone_number') ?>
                                            </li>
                                        <?php } ?>
                                        </ul>
                                    </li>
                                    <?php } ?>
                                <?php } ?>
                                </ol>

                            </div> <!-- // END grid-col -->
                        </div> <!-- // END grid -->
                    </div> <!-- // END wrapper -->
                </div> <!-- // END main -->

<?php Utilities::get_template_parts(array('includes/global/footer','includes/global/html-footer')); ?>