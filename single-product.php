<?php get_template_part( 'page-content/product/product.header' ); ?>
<?php the_post(); ?>
  <!-- .page-header -->
  <link rel="stylesheet" href="/css/case.css" />
  <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_case.css" /><?php } ?>

  <div class="page-header" style="background-image: url(/images/gallery/header.jpg); margin: 0px;">
        <h1><i>Product</i><strong>商品</strong></h1>
  </div>

  <section id="product">
    <h3 class="ttl">
      <div class="ttl__header">PRODUCT DETAIL</div>
      <div class="ttl__desp">商品詳細</div>
    </h3>
    <div id="case2" style="padding: 0">
      <div id="cased1">
        <div id="cased11"><?php echo pickUpImages('Image'); ?></div>
        <div id="cased11_thumbnail">
          <?php echo pickUpThumbnailImages('Image'); ?>
        </div>
        <div id="cased12"></div>
      </div>
      <div id="cased2" class="detail">
        <h3 id="cased21"><?php the_title(); ?></h3>
        <dl id="cased22">
          <dt>ブランド名</dt>
          <dd><?php echo get_product_brand(); ?></dd>
          <dt>サイズ</dt>
          <dd><?php echo post_custom('Size'); ?></dd>
          <dt>素材</dt>
          <dd><?php echo post_custom('Material'); ?></dd>
          <dt>商品説明</dt>
          <dd><?php echo post_custom('Description'); ?></dd>
        </dl>
      </div>
      <div id="cased4">
        <a href="<?php echo home_url(); ?>/product">商品一覧</a>
      </div>
    </div>
  </section>

  <script>
    $(document).ready(function(){
      $(function() {
        $('#cased11').slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
          asNavFor: '#cased11_thumbnail' //サムネイルのクラス名
        });
        $('#cased11_thumbnail').slick({
          infinite: true,
          slidesToShow: 4,
          slidesToScroll: 1,
          asNavFor: '#cased11', //スライダー本体のクラス名
          focusOnSelect: true,
          prevArrow: '<div id="cased1l"></div>',
          nextArrow: '<div id="cased1r"></div>'
        });
      });
    });
  </script>

<?php get_template_part( 'page-content/product/product.footer' ); ?>