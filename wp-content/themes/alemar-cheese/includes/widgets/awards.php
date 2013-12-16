<?php // Awards ?>
<?php if(get_field('awards')) { ?>
<div class="box">
    <div class="box-hd">
        <h3 class="hdg hdg_sm mix-hdg_caps">Awards &amp; Recognition</h3>
    </div>
    <div class="box-bd">
        <ul class="hlist hlist_gapMd">
<?php while(has_sub_field('awards')) { ?>
            <li>
<?php
$awardImageId = get_sub_field('award_image');
$awardImage = wp_get_attachment_image_src($awardImageId, 'thumbnail', false);
$awardImage = $awardImage[0];
?>
                    <div class="stamp">
                        <a href="<?php echo get_sub_field('award_link'); ?>">
                            <img src="<?php echo $awardImage; ?>" alt="<?php echo get_sub_field('award_institution'); ?>: <?php echo get_sub_field('award_name'); ?>" />
                        </a>
                    </div>
            </li>
<?php } ?>
        </ul>
    </div>
</div>
<?php } ?>