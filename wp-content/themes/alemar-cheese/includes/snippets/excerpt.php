<div class="teaser" id="post<?php the_ID(); ?>">
<?php if (has_post_thumbnail($post->ID)) { ?>
    <div class="teaser-media">
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail')); ?>" alt="" />
        </a>
    </div>
<?php } ?>
    <div class="teaser-bd">
        <h4>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h4>
        <p>Posted on <?php the_date(); ?></p>
        <div>
            <?php the_excerpt(); ?>
        </div>
    </div>
</div> <!-- // END teaser -->
