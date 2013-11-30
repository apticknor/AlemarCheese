<?php if (have_posts()) : ?>
<ol class="blocks">
<?php while (have_posts()) : the_post(); ?>
    <li>
        <a href="<?php the_permalink(); ?>" class="panel">
            <span class="panel-media">
                <?php the_post_thumbnail('medium'); ?>
            </span>
            <span class="panel-bd">
                <?php the_title() ?>
            </span>
        </a>
    </li> <!-- // END blocks-item -->
<?php endwhile; ?>
</ol> <!-- // END blocks -->
<?php Utilities::get_template_parts(array('includes/snippets/pagination')); ?>
<?php endif; ?>