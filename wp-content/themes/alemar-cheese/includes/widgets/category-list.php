<?php
$categories = get_categories(array(
    'type'         => 'post',
    'child_of'     => 0,
    'parent'       => '',
    'orderby'      => 'name',
    'order'        => 'ASC',
    'hide_empty'   => 1,
    'hierarchical' => 1,
    'exclude'      => '1',
    'include'      => '',
    'number'       => '',
    'taxonomy'     => 'category',
    'pad_counts'   => false
));
?>
<?php if ($categories) : ?>
<div class="widget">
    <div class="widget-hd">
        <h3 class="hdg hdg_sm mix-hdg_caps">Categories</h3>
    </div>
    <div class="widget-bd">
        <ol>
<?php foreach($categories as $category) { ?>
            <li>
                <a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->name; ?></a>
            </li>
<?php } ?>
        </ol>
    </div>
</div>
<?php endif; ?>