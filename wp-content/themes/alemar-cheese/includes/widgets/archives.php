<div class="widget">
    <div class="widget-hd">
        <h3 class="hdg hdg_sm mix-hdg_caps">Archives</h3>
    </div>
    <div class="widget-bd">
        <ol>
<?php wp_get_archives(array(
    'type'            => 'yearly',
    'limit'           => '',
    'format'          => 'html',
    'before'          => '',
    'after'           => '',
    'show_post_count' => true,
    'echo'            => 1,
    'order'           => 'DESC'
)); ?>
        </ol>
    </div>
</div>