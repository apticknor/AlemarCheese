<?php
$recent_posts = wp_get_recent_posts(array(
    'numberposts'       => 3,
    'offset'            => 0,
    'category'          => 0,
    'orderby'           => 'post_date',
    'order'             => 'DESC',
    'post_type'         => 'post',
    'post_status'       => 'publish',
    'suppress_filters'  => true
));
?>
<?php if ($recent_posts) : ?>
<div class="widget">
    <div class="widget-hd">
        <h3 class="hdg hdg_sm mix-hdg_caps">Recent Posts</h3>
    </div>
    <div class="widget-bd">
        <ol>
<?php foreach($recent_posts as $recent) { ?>
            <li>
                <a href="<?php echo get_permalink($recent['ID']); ?>"><?php echo $recent['post_title']; ?></a>
            </li>
<?php } ?>
        </ol>
    </div>
</div>
<?php endif; ?>
