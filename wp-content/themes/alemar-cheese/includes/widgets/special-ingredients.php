<?php // Special Ingredients ?>
<?php if(get_field('special_ingredients')) { ?>
<div class="widget">
    <div class="widget-hd">
        <h3 class="hdg hdg_sm mix-hdg_caps">Ingredients You'll Love</h3>
    </div>
    <div class="widget-bd">
        <ul class="hlist hlist_gapMd">
<?php while(has_sub_field('special_ingredients')) { ?>
            <li>
<?php
$ingredientImageId = get_sub_field('special_ingredient_image');
$ingredientImage = wp_get_attachment_image_src($ingredientImageId, 'thumbnail', false);
$ingredientImage = $ingredientImage[0];
?>
                <div class="stamp">
                    
                    <a href="<?php echo get_sub_field('special_ingredient_link'); ?>">
                        <img src="<?php echo $ingredientImage; ?>" alt="<?php echo get_sub_field('special_ingredient_name'); ?>" />
                    </a>
                
                </div>
            </li>
<?php } ?>
        </ul>
    </div>
</div>
<?php } ?>
