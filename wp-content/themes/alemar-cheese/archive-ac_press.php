<?php Utilities::get_template_parts( array( 'includes/global/html-header', 'includes/global/header' ) ); ?>

                <div class="main" role="main">
                    <div class="wrapper">
                        <h1 class="isHidden">Press</h1>
                        <div class="grid">
                            <div class="grid-col grid-col_full">
                                <ol class="pianoList">
<?php foreach(press_by_year() as $year => $posts) : ?>
                                    <li>
                                        <h2 class="hdg hdg_md mix-hdg_push"><?php echo $year; ?></h2>
                                        <ul class="blocks blocks_spaced">
<?php foreach($posts as $post) : setup_postdata($post); ?>
                                            <li>
                                                <a id="<?php echo $post->post_name ?>" href="<?php the_field('press_link'); ?>">
                                                    <?php // the_post_thumbnail('large-thumbnail'); ?>

                                                    <?php the_title(); ?>
                                                </a>
                                                    <?php if(get_field('press_source')) { ?>
                                                    <br/>&ndash;<?php the_field('press_source'); ?>
                                                    <?php } ?>

                                            </li>
<?php endforeach; ?>
                                        </ul>
                                    </li>
<?php endforeach; ?>
                                </ol>



                            </div> <!-- // END grid-col_sub -->
                        </div> <!-- // END grid -->
                    </div> <!-- // END wrapper -->
                </div> <!-- // END main -->

<?php Utilities::get_template_parts( array( 'includes/global/footer','includes/global/html-footer' ) ); ?>