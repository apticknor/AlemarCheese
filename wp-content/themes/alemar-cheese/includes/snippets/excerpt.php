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
            <div class="feature-meta">
                <p>Posted on <?php the_time(get_option('date_format')); ?></p>
            </div>
            <div class="feature-bd">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
</div> <!-- // END teaser -->
