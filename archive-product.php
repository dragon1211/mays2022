<?php get_template_part( 'page-content/product/product.header' ); ?>
  
  <div class="top__image">
    <img src="/images/product/full.jpg" alt="full.jpg">
  </div>
  
  <section id="product">
    <div class="content">
      <div class="category__list">
        <p style="margin: 15px 0 5px 0"><strong>カテコリー</strong></p>
        <li>
            <a href="/product" class = <?php if(!isset($term)) echo "active"; ?> >  
              ALL
            </a>
        </li>
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
              <a href="<?php echo get_term_link($cat->term_id); ?>" 
                class = "<?php if(strcmp($term, $cat->slug) == 0) echo "active"; ?>" >  
                   <?php echo $cat->name ?> 
              </a>
          </li>
        <? } ?>
      </div>
      <div class="product__list p-slider is-pc" id="<?echo $term?>">
        <?php
          if($term === ''){
            $args = array(
              'post_type' => 'product',
              'posts_per_page' => -1,
              'order' => 'DESC',
              'post_status' => 'publish'
            );
          } else {
            $args = array(
              'post_type' => 'product',
              'posts_per_page' => -1,
              'order' => 'DESC',
              'post_status' => 'publish',
              'tax_query' => array(
                'relation' => 'OR',
                array(
                  'taxonomy' => 'product_category',
                  'terms' => $term,
                  'field' => 'slug',
                  'operator' => 'IN'
                ),
              )
            );
          }
        ?>
        <?php $wp_query = new WP_Query( $args ); ?>
        <?php if( $wp_query->have_posts() ) : ?>
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); $loopcounter++; ?>
        
        <div>
          <a class="product__card" href="<?php the_permalink(); ?>">
            <div class="product__item" id=<? echo "item".($loopcounter-1) ?>>
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
        </div>

        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
      </div>
      <div class="product__list p-slider is-sp" id="<?echo $term?>">
        <?php
          if($term === ''){
            $args = array(
              'post_type' => 'product',
              'posts_per_page' => -1,
              'order' => 'DESC',
              'post_status' => 'publish'
            );
          } else {
            $args = array(
              'post_type' => 'product',
              'posts_per_page' => -1,
              'order' => 'DESC',
              'post_status' => 'publish',
              'tax_query' => array(
                'relation' => 'OR',
                array(
                  'taxonomy' => 'product_category',
                  'terms' => $term,
                  'field' => 'slug',
                  'operator' => 'IN'
                ),
              )
            );
          }
        ?>
        <?php $wp_query = new WP_Query( $args ); ?>
        <?php if( $wp_query->have_posts() ) : ?>
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); $loopcounter++; ?>
        
        <div>
          <a class="product__card" href="<?php the_permalink(); ?>">
            <div class="product__item" id=<? echo "item".($loopcounter-1) ?>>
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
        </div>

        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
      </div>
    </div>
  </section>


<?php get_template_part( 'page-content/product/product.contact' ); ?>
<?php get_template_part( 'page-content/product/product.footer' ); ?>

