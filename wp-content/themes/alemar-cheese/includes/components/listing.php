<?php if (have_posts()) : ?>
<ol class="vlist">
<?php while (have_posts()) : the_post(); ?>
    <li>
<?php Utilities::get_template_parts(array('includes/snippets/excerpt')); ?>
    </li>
<?php endwhile; ?>
</ol>
<?php Utilities::get_template_parts(array('includes/snippets/pagination')); ?>
<?php endif; ?>