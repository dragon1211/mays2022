<?php
get_header();

$textdomain = 'mays';

$context = Timber::get_context();
$context['posts'] = new Timber\PostQuery();

/* Title */
$context['title'] = single_term_title('', false);

/* Pagination */
$context['pagination'] = get_the_posts_pagination([
	'mid_size' => 3,
	'prev_text' => __('&larr;', $textdomain),
	'next_text' => __('&rarr;', $textdomain),
	'screen_reader_text' => ' ',
]);

/* Render */
echo Timber::compile('taxonomy-topics_tag.twig', $context);

get_footer();
