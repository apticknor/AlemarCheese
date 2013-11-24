<?php // Awards ?>
<?php if(get_field('awards')) { ?>
<div class="feature">
    <div class="feature-hd feature-hd_push">
        <h3 class="hdg hdg_md">Awards &amp; Recognition</h3>
    </div>
    <div class="feature-bd feature-bd_push">
        <ul class="hlist hlist_gapMd">
<?php while(has_sub_field('awards')) { ?>
            <li>
<?php
$awardImageId = get_sub_field('award_image');
$awardImage = wp_get_attachment_image_src($awardImageId, 'thumbnail', false);
$awardImage = $awardImage[0];
?>
                    <div class="stamp">
                        <img src="<?php echo $awardImage; ?>" alt="<?php echo get_sub_field('award_institution'); ?>: <?php echo get_sub_field('award_name'); ?>" />
                    </div>
            </li>
<?php } ?>
        </ul>
    </div>
</div>
<?php } ?>
