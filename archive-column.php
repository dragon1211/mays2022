<?php get_header(); ?>
<?php
$paged = get_query_var('paged')? get_query_var('paged'): 1;
if(is_tax()){
  $tax_slug = get_query_var('taxonomy');
  $term_slug = get_query_var('term');
  $args = array(
    'post_type' => 'column',
    'posts_per_page' => 12,
    'paged' => $paged,
    'post_status' => 'publish',
    'tax_query' => array(
      'relation' => 'OR',
      array(
        'taxonomy' => $tax_slug,
        'terms' => $term_slug,
        'field' => 'slug',
        'operator' => 'IN'
      ),
    )
  );
}
else{
  $args = array(
    'post_type' => 'column',
    'posts_per_page' => 12,
    'paged' => $paged,
    'post_status' => 'publish'
  );
}
?>
<?php $wp_query = new WP_Query( $args ); ?>
<div class="_2column">
  <div class="main-column">
    <?php if(is_tax('blog_tag')): ?>
    <h2 class="blog-index-heading">
      <strong>タグ：<?php echo single_term_title('', false); ?></strong>
    </h2>
    <?php endif; ?>

    <?php if( $wp_query->have_posts() ) : ?>
    <div class="blog-index archive">
      <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <a class="blog-index-item" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <article class="index blog">
          <picture>
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" srcset="<?php echo wp_get_attachment_image_srcset(get_post_thumbnail_id()); ?>"<?php /* sizes="<?php echo wp_get_attachment_image_sizes(get_post_thumbnail_id()); ?>" */ ?> alt="<?php the_title(); ?>">
          </picture>
          <div class="txt">
            <time><?php the_time('Y.m.d'); ?></time>
            <p><strong><?php the_title(); ?></strong></p>
            <?php
            $terms = get_the_terms($post->ID, 'blog_tag');
            if(!empty($terms)): ?>
            <ul>
              <?php foreach($terms as $term): ?>
              <li><?php echo $term->name; ?></li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          </div><!-- .txt -->
        </article>
      </a>
      <?php endwhile; ?>
    </div>
    <?php else: ?>
    <p>該当する記事は見つかりませんでした。</p>
    <?php endif; ?>
    <?php page_navigation(); ?>
    <?php wp_reset_query(); ?>

  </div><!-- .main-column -->
  <div class="sub-column">
    <aside class="blog-sidebar" role="complementary"><?php dynamic_sidebar('sidebar'); ?></aside>
    <?php /*<script src="<?php echo get_theme_file_uri(); ?>/assets/blogWidget.js"></script>*/ ?>
  </div><!-- .sub-column -->
</div><!-- ._2column -->
<?php get_footer();