<?php // Special Ingredients ?>
<?php if(get_field('special_ingredients')) { ?>
<div class="feature">
    <div class="feature-hd feature-hd_push">
        <h3 class="hdg hdg_md">Special Ingredients</h3>
    </div>
    <div class="feature-bd feature-bd_push">
        <ul class="hlist hlist_gapMd">
<?php while(has_sub_field('special_ingredients')) { ?>
            <li>
<?php
$ingredientImageId = get_sub_field('special_ingredient_image');
$ingredientImage = wp_get_attachment_image_src($ingredientImageId, 'thumbnail', false);
$ingredientImage = $ingredientImage[0];
?>
                <div class="stamp">
                    <img src="<?php echo $ingredientImage; ?>" alt="<?php echo get_sub_field('special_ingredient_name'); ?>" />
                </div>
            </li>
<?php } ?>
        </ul>
    </div>
</div>
<?php } ?>
