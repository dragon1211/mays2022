</main>
<?php if(0) { ?>
<?php if(is_page(array('concept','service','lease'))): ?>
<?php
$page_slug = get_post(get_the_ID())->post_name;
$args = array(
  'post_type' => 'column',
  'posts_per_page' => 1,
  'orderby' => 'rand',
  'post_status' => 'publish',
  'tax_query' => array(
    array(
      'taxonomy' => 'blog_category',
      'field' => 'slug',
      'terms' => $page_slug,
    )
  )
);
?>
<?php $wp_query = new WP_Query( $args ); ?>
<?php if( $wp_query->have_posts() ) : ?>
<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<div class="c-sidebanner">
  <a href="<?php the_permalink(); ?>" class="c-sidebanner__wrap">
    <p class="c-sidebanner__new">New</p>
    <div class="c-sidebanner__img">
      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?> イメージ">
    </div>
    <div class="c-sidebanner__meta">
      <div class="c-sidebanner__meta__logo">
        <img src="/images/logo_new_white.svg" width="64.71" height="16.47" alt="May’s">
      </div>
      <p class="c-sidebanner__meta__cat">Topics</p>
    </div>
    <p class="c-sidebanner__heading">
      <?php
      $text_cnt = 26;
      $post_title = strip_tags(get_the_title());
      if(mb_strlen($post_title, 'UTF-8')>$text_cnt){
        $post_title_mb = mb_substr($post_title, 0, $text_cnt, 'UTF-8');
        echo $post_title_mb.'...';
      }else{
        echo $post_title;
      }
      ?>
    </p>
    <p class="c-sidebanner__more">Read More</p>
  </a>
</div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
<?php endif; ?>
<?php } ?>

<?php if(!is_page('agreement')): ?>
<?php
$http = is_ssl() ? 'https://' : 'http://';
$url = $http . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
if(strstr($url,'/en/') == true || strstr($url,'-en') == true): ?>
<?php else: ?>
<div class="c-sideinquiry nosp">
  <a href="<?php echo home_url(); ?>/contact/">
    <img src="/images/common/footer_img_sideinquiry.png" alt="お気軽にお問い合わせください">
  </a>
</div>
<div class="c-sideinquiry nopc">
  <a href="<?php echo home_url(); ?>/contact/" class="c-sideinquiry__link">
    <div class="c-sideinquiry__img">
      <img src="/images/top/icon_inquiry_email.svg" alt="">
    </div>
    <div class="c-sideinquiry__meta">
      <p class="c-sideinquiry__email">メールでのご予約</p>
    </div>
  </a>
  <a href="tel:0354024600" class="c-sideinquiry__link">
    <div class="c-sideinquiry__img">
      <img src="/images/top/icon_inquiry_tel.svg" alt="">
    </div>
    <div class="c-sideinquiry__meta">
      <p class="c-sideinquiry__tel">03-5402-4600</p>
      <p class="c-sideinquiry__time">9:10-17:30  (平日)</p>
    </div>
  </a>
</div>
<?php endif; ?>

<footer class="c-footer">
  <div class="c-footer__wrap">
    <div class="c-footer__flex">
      <div class="c-footer__logo">
        <?php if(is_page(array('en','company-en','service-en','lease-en'))): ?>
        <a href="<?php echo home_url(); ?>/en/">
          <img src="/images/common/footer_img_logo.svg" alt="<?php bloginfo('name'); ?>">
        </a>
        <?php else: ?>
        <a href="<?php echo home_url(); ?>">
          <img src="/images/common/footer_img_logo.svg" alt="<?php bloginfo('name'); ?>">
        </a>
        <?php endif; ?>
      </div>
      <div class="c-footer__linkbox">
        <?php if(is_page(array('en','company-en','service-en','lease-en'))): ?>
        <ul class="c-footer__linkcol">
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/en/">TOP</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/concept/">Concept</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/gallery/">Gallery</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/column/">Column</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/news/">News</a>
          </li>
          <li class="c-footer__link nopc">
            <a href="<?php echo home_url(); ?>/service-en/">Service</a>
          </li>
        </ul>
        <ul class="c-footer__linkcol nosp">
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/service-en/">Service</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/service-en/">Premium Service</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/service-en/lease/">Furniture Lease</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/service/plan/">Sample Plan</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/service/package/">Package Plan</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/service/product-brand/">Product / Brand</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/service/business/">For Business</a>
          </li>
        </ul>
        <ul class="c-footer__linkcol">
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/company-en/">Company</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/showroom/">Showroom</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/contact/">Contact</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/faq/">Q &amp; A</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/privacy/">Privacy Policy</a>
          </li>
        </ul>
        <?php else: ?>
        <ul class="c-footer__linkcol">
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>">TOP</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/concept/">Concept</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/gallery/">Gallery</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/column/">Column</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/news/">News</a>
          </li>
          <li class="c-footer__link nopc">
            <a href="<?php echo home_url(); ?>/service/">Service</a>
          </li>
        </ul>
        <ul class="c-footer__linkcol nosp">
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/service/">Service</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/service/">Premium Service</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/service/lease/">Furniture Lease</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/service/plan/">Sample Plan</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/service/package/">Package Plan</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/service/product-brand/">Product / Brand</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/service/business/">For Business</a>
          </li>
        </ul>
        <ul class="c-footer__linkcol">
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/company/">Company</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/showroom/">Showroom</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/contact/">Contact</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/faq/">Q &amp; A</a>
          </li>
          <li class="c-footer__link">
            <a href="<?php echo home_url(); ?>/privacy/">Privacy Policy</a>
          </li>
        </ul>
        <?php endif; ?>
      </div>
    </div>
    <div class="c-footer__copyright">
      <p>&copy; <?php echo date('Y'); ?> May’s Corporation.</p>
    </div>
  </div>
</footer>
<?php endif; ?>

<?php
/*
<link rel="stylesheet" href="/css/footer.css">
<footer class="md_footer">
  <div class="md_footer_container">
    <div class="md_footer_contents">
      <div class="me_footer_cmain">
        <a class="md_footer_logo" href="/" title="May’s">
          <img src="/images/logo_new_white.svg" width="110" height="28" alt="May’s">
        </a>
        <?php wp_nav_menu(array(
  'menu' => 'footer-menu',
  'container' => 'nav',
  'container_class' => 'md_footer_nav',
  'depth' => 3,
  'theme_location' => 'footer_menu',
)); ?>
      </div><!-- .me_footer_cmain -->
      <div class="md_footer_csub">
        <div class="fb-page" data-href="https://www.facebook.com/MAYS-573261612825255/" data-tabs="timeline" data-width="280" data-height="220" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/MAYS-573261612825255/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MAYS-573261612825255/">メイズ May&#039;s Corporation</a></blockquote></div>
      </div><!-- .md_footer_csub -->
    </div><!-- .md_footer_contents -->
    <div class="md_copyright">© 2020 May’s Corporation. <span>All rights reserved.</span></div>
  </div><!-- .md_footer_container -->
</footer>
*/
?>
<?php wp_footer(); ?>
<?php if (is_front_page() || is_home() || is_page('showroom')): ?>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDM3IZ_-NHgFvOnOwp7y7IF-VPQBt07lBU&callback=initMap"></script>
<?php endif; ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65570864-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>
