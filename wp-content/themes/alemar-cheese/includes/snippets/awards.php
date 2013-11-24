<?php // Awards ?>
<?php if(get_field('awards')) { ?>
<ul>
<?php while(has_sub_field('awards')) { ?>
    <li>
    <?php
        $awardImageId = get_sub_field('award_image');
        $awardImage = wp_get_attachment_image_src($awardImageId, 'thumbnail', false);
        $awardImage = $awardImage[0];
    ?>
        <img src="<?php echo $awardImage; ?>" alt="<?php echo get_sub_field('award_institution'); ?>: <?php echo get_sub_field('award_name'); ?>" />
    </li>
<?php } ?>
</ul>
<?php } ?>
