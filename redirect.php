<?php /* Template Name: Redirect */

global $post;
$redirectto = get_post_meta($post->ID, 'redirectto', true);
$location = sprintf('Location: %s', $redirectto);
header($location);
exit;
