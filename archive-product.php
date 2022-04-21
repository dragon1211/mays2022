<?php get_template_part( 'page-content/product/product.header' ); ?>
  <!-- .page-header -->
  <div class="page-header" style="background-image: url(/images/gallery/header.jpg); margin: 0px;">
        <h1><i>Product</i><strong>商品</strong></h1>
  </div><!-- .page-header -->
  
  <section id="product">
    <h3 class="ttl">
      <div class="ttl__header">PRODUCT LIST</div>
      <div class="ttl__desp">商品一覧</div>
    </h3>
    <div class="content">
      <div class="category__list">
        <p style="margin: 15px 0 5px 0"><strong>カテコリー</strong></p>
        <?php 
          if(!isset($term)) $term = '';
          $categories = get_terms( [
              'taxonomy'     => "product_category",
              'order'        => 'ASC',
              'orderby'      => 'date',
          ] );
              foreach($categories as $cat){
          ?>
          <li>
              <a href="<?php echo get_term_link($cat->term_id); ?>">
                <?php echo $cat->name ?> 
              </a>
          </li>
        <? } ?>
      </div>
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
              <p class="brand"><?php echo get_product_brand(); ?></p>
              <h3 class="name"><?php the_title(); ?></h3>
              <p class="price"><?php echo strip_tags(post_custom('Price')); ?></p>
              <div class="chbox"><input type="checkbox" /></div>
            </div>
          </div>
        </a>
        <?php endwhile; ?>
      </div>
    </div>
    <?php page_navigation(); ?>
  </section>

  <?php get_template_part( 'page-content/product/product.footer' ); ?>
