<?php get_header(); ?>
<div class="page-header" style="background-image: url(/images/gallery/header.jpg)">
  <h1><i>Product</i><strong>商品</strong></h1>
</div><!-- .page-header -->
<div id="product">
  <section">
    <h3 class="ttl">
      <div class="ttl__header">PRODUCT LIST</div>
      <div class="ttl__desp">商品一覧</div>
    </h3>
    <div>
      <div class="product__list">
        <?php while ( have_posts() ) : the_post(); $loopcounter++; ?>
        <a class="product__card" href="<?php the_permalink(); ?>">
          <div class="product__item">
            <?php
              $arr = post_custom('Image');
              foreach ((array)$arr as $img) {
                $imgs = wp_get_attachment_image_src($img,'full');
                break;
              }
            ?>
            <div class="product__image">
              <div class="img" style="background-image:url(<?php echo $imgs[0]; ?>);"></div>
            </div>
            <div class="product__desp">
              <p class="brand"><?php echo strip_tags(post_custom('Point')); ?></p>
              <h3 class="name"><?php the_title(); ?></h3>
              <p class="price"><?php echo strip_tags(post_custom('Price')); ?></p>
            </div>
          </div>
        </a>
        <?php endwhile; ?>
      </div>
    </div>
    <?php page_navigation(); ?>
  </section>
</div>
<?php get_footer(); ?>