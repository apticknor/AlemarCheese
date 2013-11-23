<?php if (have_posts()) : ?>
<ol class="blocks">
<?php while (have_posts()) : the_post(); ?>
    <li>
        <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail($post->ID)) { ?>
            <?php the_post_thumbnail('medium'); ?>
        <?php } else { ?>

        <?php } ?>
        </a>
    </li> <!-- // END blocks -->
<?php endwhile; ?>
</ol>
<?php Utilities::get_template_parts(array('includes/snippets/pagination')); ?>
<?php endif; ?>