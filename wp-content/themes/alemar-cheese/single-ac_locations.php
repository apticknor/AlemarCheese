<?php

$url = get_post_type_archive_link('ac_locations') . '#' . $post->post_name;
wp_redirect( $url, 301 );
exit;

?>