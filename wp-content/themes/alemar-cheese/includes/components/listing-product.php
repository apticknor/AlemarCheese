<?php if (have_posts()) : ?>
<ol class="vlist">
<?php while (have_posts()) : the_post(); ?>
    <li>

        <div class="teaser" id="post<?php the_ID(); ?>">
        <?php if (has_post_thumbnail($post->ID)) { ?>
            <div class="teaser-media">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                </a>
            </div>
        <?php } ?>
            <div class="teaser-bd">
                <div class="feature">
                    <div class="feature-hd">
                        <h3 class="hdg hdg_md">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                    </div>
                    <div class="feature-bd">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
        </div> <!-- // END product -->


    </li>
<?php endwhile; ?>
</ol>
<?php Utilities::get_template_parts(array('includes/snippets/pagination')); ?>
<?php endif; ?>