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
                <h4 class="hdg hdg_md">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h4>
            </div>
            <div class="feature-meta">
                <p>Posted on <?php the_date(); ?></p>
            </div>
            <div class="feature-bd">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </div>
</div> <!-- // END teaser -->
