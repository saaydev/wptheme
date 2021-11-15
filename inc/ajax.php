<?php
function set_comment()
{

	echo json_encode(true);
    wp_die();
}
add_action('wp_ajax_set_comment', 'set_comment');
add_action('wp_ajax_nopriv_set_comment', 'set_comment');
