<?php
get_header();

$textdomain = 'mays';

$context = Timber::get_context();
$paged = get_query_var('paged')? get_query_var('paged') : 1;
$context['posts'] = new Timber\PostQuery(array(
  'post_type' => 'column',
  'posts_per_page' => 12,
  'paged' => $paged,
  'post_status' => 'publish'
));

if($paged != 1): ?>
<?php
/*
<div class="page-header" style="background-image: url(/images/company/header.jpg)">
  <h1><i>Blog</i><strong>コラム</strong></h1>
</div><!-- .page-header -->
*/ ?>
<?php endif;

/* Hero */
if ($paged === 1 && !is_tax()) {
  $hero_menu = new Timber\Menu('blog-hero');
  $context['heros'] = $hero_menu->items;
}

/* Taxonomy */
if (is_tax('blog_tag')) {
  $context['title'] = sprintf('タグ: <strong>%s</strong>', single_term_title('', false));
}

/* Pagination */
$context['pagination'] = get_the_posts_pagination([
  'mid_size' => 3,
  'prev_text' => __('&larr;', $textdomain),
  'next_text' => __('&rarr;', $textdomain),
  'screen_reader_text' => ' ',
]);

/* Sidebar */
$context['sidebar'] = Timber::get_widgets('sidebar');

/* Render */
echo Timber::compile('archive-blog.twig', $context);

get_footer();
