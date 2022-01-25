<?php /* Template Name: Blog Page */

get_header();

$post = Timber::query_post();
$context['post'] = $post;

/* Sidebar */
$context['sidebar'] = Timber::get_widgets('sidebar');

/* Render */
echo Timber::compile('blog-page.twig', $context);

get_footer();
