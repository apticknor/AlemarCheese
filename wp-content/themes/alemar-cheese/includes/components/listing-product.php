<?php if (have_posts()) : ?>
<ol class="blocks">
<?php while (have_posts()) : the_post(); ?>
    <li>
        <div class="feature">
            <div class="feature-media">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                </a>
            </div>
            <div class="feature-hd">
                <a href="<?php the_permalink(); ?>">
                    <h2 class="hdg hdg_md"><?php the_title(); ?></h2>
                </a>
            </div>
            <div class="feature-bd">
                <p><?php the_field('quick_description'); ?></p>
            </div>
        </div><!-- // END feature -->
    </li> <!-- // END blocks-item -->
<?php endwhile; ?>
</ol> <!-- // END blocks -->
<?php Utilities::get_template_parts(array('includes/snippets/pagination')); ?>
<?php endif; ?>