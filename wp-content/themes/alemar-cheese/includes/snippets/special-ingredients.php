<?php // Special Ingredients ?>
<?php if(get_field('special_ingredients')) { ?>
<ul>
<?php while(has_sub_field('special_ingredients')) { ?>
    <li>
    <?php
        $ingredientImageId = get_sub_field('special_ingredient_image');
        $ingredientImage = wp_get_attachment_image_src($ingredientImageId, 'thumbnail', false);
        $ingredientImage = $ingredientImage[0];
    ?>
        <img src="<?php echo $ingredientImage; ?>" alt="<?php echo get_sub_field('special_ingredient_name'); ?>" />
    </li>
<?php } ?>
</ul>
<?php } ?>
