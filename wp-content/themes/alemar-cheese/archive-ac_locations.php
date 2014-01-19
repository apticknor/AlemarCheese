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

                                <ol class="pianoList">
                                <?php foreach($values as $value) { ?>
                                    <?php $posts_array = get_posts( array(
                                            'posts_per_page' => '2000',
                                            'post_type'  => 'ac_locations',
                                            'orderby'    => 'title',
                                            'order'      => 'ASC',
                                            'meta_query' => array(
                                                array(
                                                    'key'   => 'location_state',
                                                    'value' => $value,
                                                )
                                            )
                                    ));?>
                                    <? if ($posts_array) { ?>
                                    <li>
                                        <h2 class="hdg hdg_md mix-hdg_push"><?php echo $value; ?></h2>

                                        <ul class="blocks blocks_spaced">
                                        <?php foreach($posts_array as $post) { ?>
                                            <li>
                                                <a id="<?php echo $post->post_name ?>" href="<?php the_field('location_link') ?>"><?php the_title() ?></a><br/>
                                                <?php if(get_field('location_address_line_1')) { ?>
                                                    <?php the_field('location_address_line_1') ?><br/>
                                                <?php } ?>
                                                <?php if(get_field('location_address_line_2')) { ?>
                                                    <?php the_field('location_address_line_2') ?><br/>
                                                <?php } ?>
                                                <?php if(get_field('location_city')) { ?><?php the_field('location_city') ?><?php } ?><?php if(get_field('location_state')) { ?>, <?php the_field('location_state') ?><?php } ?><?php if(get_field('location_zip_code')) { ?>, <?php the_field('location_zip_code') ?><?php } ?>
                                                <?php if(get_field('location_phone_number')) { ?><br/><?php the_field('location_phone_number') ?><?php } ?>
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