<?php

$url = get_post_type_archive_link('ac_press') . '#' . $post->post_name;
wp_redirect( $url, 301 );
exit;

?>