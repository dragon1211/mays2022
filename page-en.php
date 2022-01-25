<?php get_header(); ?>
<!-- slide -->
<link rel="stylesheet" type="text/css" href="/js/vegas/vegas.min.css">
<script src="/js/vegas/vegas.min.js"></script>
<script type="text/javascript">
  $(function() {
    $('body').vegas({
      slides: [
        { src: '/images/main03.jpg' },
        { src: '/images/main02.jpg' },
        { src: '/images/main01.jpg' },
      ],
      delay: 3500,
      transitionDuration: 2000,
    });
  });
</script>
<script>
  if(navigator.userAgent.match(/MSIE 10/i) || navigator.userAgent.match(/Trident\/7\./) || navigator.userAgent.match(/Edge\/12\./)) {
    $('body').on("mousewheel", function () {
      event.preventDefault();
      var wd = event.wheelDelta;
      var csp = window.pageYOffset;
      window.scrollTo(0, csp - wd);
    });
  }
</script>

<div id="top" class="p-top">
  <div class="p-top__mv">
    <div class="md_top_main_element01"></div>
    <div class="md_top_slide_space">
      <?php
      /*
      <!-- <div class="md_top_main_element02"></div> -->
      <div class="md_top_main_news_wrapper">
        <div class="md_top_main_news">
          <div class="md_top_main_news_heading">News</div>
          <div class="md_top_main_news_post">
            <?php query_posts(array('post_type' => 'news', 'posts_per_page' => 1)); ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <span><?php the_date('Y.m.d'); ?></span>
            <span><?php the_title(); ?></span>
            <?php endwhile; wp_reset_query(); ?>
          </div><!-- .md_top_main_news_heading_post -->
          <a class="md_top_main_news_link" href="/news/">More</a>
        </div><!-- .md_top_main_news -->
      </div><!-- .md_top_main_news_wrapper -->
      <div class="scroll_indicator"><a href="#introduction"><i>SCROLL</i><span></span></a></div>
      */
      ?>
    </div>
    <!-- end slide -->
  </div>
  
  <div class="p-top__concept">
    <div class="p-top__concept__wrap">
      <h2 class="p-top__title01"><span>Concept</span></h2>
      <div class="p-top__concept__flex">
        <h3 class="p-top__concept__heading nopc">High quality interior design for a superior lifestyle</h3>
        <div class="p-top__concept__img">
          <img src="/images/top/img_concept.jpg" alt="Concept イメージ">
        </div>
        <div class="p-top__concept__meta">
          <h3 class="p-top__concept__heading nosp">High quality interior design for a superior lifestyle</h3>
          <p class="p-top__concept__read">"We want to provide our customers with a better lifestyle."<br>
          This is our unchanging desire.<br>
          We believe that interior design is an indispensable part of our daily lives, whether it is for relaxation or for enjoying time with family and friends.<br>
          Interior design has become an indispensable part of our lives.<br>
          Nowadays, interior design has become an important item to realize our ideal lifestyle.<br>
          With more and more options for purchasing furniture, such as mass merchandisers, specialty stores, and online stores, May's has become the place to go to find the right furniture for you.<br>
          At May's, we listen to our customers' lifestyles and requests, and create furniture that meets their needs.<br>
          At May's, we listen to our customers' lifestyles and desires, take into account the dimensions of their rooms and their living lines, and select products that are truly valuable.<br>
          May's is a "purchasing agent" for furniture and interior goods, providing product knowledge, coordination plans, and other services.<br>
          As a "purchasing agent" for furniture and interior goods, we provide total support from providing product knowledge, creating a coordination plan, and delivering various types of furniture.<br>
          We are committed to "creating customer value" through total support, from providing product knowledge, creating coordination plans, and delivering various types of furniture.</p>
          <?php
          /*
          <div class="p-top__button01 p-top__concept__button">
            <a href="<?php echo home_url(); ?>/concept/"><span>More</span></a>
          </div>
          */
          ?>
        </div>
      </div>
    </div>
  </div>
    
  <div class="p-top__service">
    <div class="p-top__service__wrap">
      <h2 class="p-top__title01 gold"><span>Service</span></h2>
      <div class="p-top__service__flex">
        <div class="p-top__service__img">
          <img src="/images/top/img_service_01.jpg" alt="テーラーメイドのインテリアプラン イメージ">
          <img src="/images/top/img_service_02.jpg" alt="家具のリース・レンタルサービス イメージ">
          <img src="/images/top/img_service_03.jpg" alt="サンプル / パッケージプラン イメージ">
          <img src="/images/top/img_service_04.jpg" alt="取扱商品 / 取扱メーカー イメージ">
          <img src="/images/top/img_service_05.jpg" alt="不動産会社・アライアンス先の方へ イメージ">
        </div>
        <ul class="p-top__service__meta">
          <li class="p-top__service__list">
            <a href="<?php echo home_url(); ?>/service-en/" class="p-top__service__link">
              <h3 class="p-top__service__heading">Premium Service</h3>
              <h3 class="p-top__service__subheading">Tailor-made interior plans</h3>
            </a>
          </li>
          <li class="p-top__service__list">
            <a href="<?php echo home_url(); ?>/service-en/lease-en/" class="p-top__service__link">
              <h3 class="p-top__service__heading">Furniture Lease</h3>
              <h3 class="p-top__service__subheading">Furniture leasing and rental services</h3>
            </a>
          </li>
          <?php
          /*
          <li class="p-top__service__list">
            <a href="<?php echo home_url(); ?>/service/plan/" class="p-top__service__link">
              <h3 class="p-top__service__heading">Sample Plan</h3>
              <h3 class="p-top__service__subheading">Samples</h3>
            </a>
          </li>
          <li class="p-top__service__list">
            <a href="<?php echo home_url(); ?>/service/package/" class="p-top__service__link">
              <h3 class="p-top__service__heading">Package Plan</h3>
              <h3 class="p-top__service__subheading">Package Plans</h3>
            </a>
          </li>
          <li class="p-top__service__list">
            <a href="<?php echo home_url(); ?>/service/product-brand/" class="p-top__service__link">
              <h3 class="p-top__service__heading">Product / Brand</h3>
              <h3 class="p-top__service__subheading">Products / Manufacturers</h3>
            </a>
          </li>
          <li class="p-top__service__list">
            <a href="<?php echo home_url(); ?>/service/business/" class="p-top__service__link">
              <h3 class="p-top__service__heading">For Business</h3>
              <h3 class="p-top__service__subheading">For real estate companies and alliance partners</h3>
            </a>
          </li>
          */
          ?>
        </ul>
      </div>
    </div>
  </div>
    
  <?php
  /*
  <div class="p-top__gallery">
    <div class="p-top__gallery__wrap">
      <h2 class="p-top__title01"><span>Gallery</span></h2>
    </div>
    <ul class="p-top__gallery__slider is-pc">
      <?php
      $args = array(
        'post_type' => 'gallery',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'post_status' => 'publish'
      );
      ?>
      <?php $wp_query = new WP_Query( $args ); ?>
      <?php if( $wp_query->have_posts() ) : ?>
      <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>">
          <?php echo wp_get_attachment_image(get_post_meta($post->ID, 'Image', true), 'full'); ?>
        </a>
      </li>
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </ul>
    <ul class="p-top__gallery__slider is-sp">
      <?php
      $args = array(
        'post_type' => 'gallery',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'post_status' => 'publish'
      );
      ?>
      <?php $wp_query = new WP_Query( $args ); ?>
      <?php if( $wp_query->have_posts() ) : ?>
      <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>">
          <?php echo wp_get_attachment_image(get_post_meta($post->ID, 'Image', true), 'full'); ?>
        </a>
      </li>
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </ul>
  </div>
  */
  ?>

  <div class="p-top__company is-en">
    <div class="p-top__company__wrap">
      <h2 class="p-top__title01"><span>Company</span></h2>
      <div class="p-top__company__flex">
        <div class="p-top__company__map">
          <div id="is-map"></div>
        </div>
        <div class="p-top__company__meta">
          <h3 class="p-top__company__heading">Office &amp; Showroom</h3>
          <p class="p-top__company__read">Toranomon 30 Mori Bldg. 1F<br>3-2-2 Toranomon Minato-ku, Tokyo 105-0001</p>
          <p class="p-top__company__read">Tokyo Metro TORANOMON Station - Ginza Line - Exit 2<br>Tokyo Metro KAMIYACHO Station - Hibiya Line - Exit 4a</p>
          <div class="p-top__company__tel is-en">
            <p class="p-top__company__read">TEL <a href="tel:0354024600">+81 (0)3-5402-4600</a></p>
            <p class="p-top__company__read">FAX +81 (0)3-5402-4660</p>
          </div>
          <h4 class="p-top__company__subheading">Office Business Hours</h4>
          <p class="p-top__company__read">Monday - Friday 9:10am - 5:30pm<br>Saturday, Sunday and National Holidays Closed</p>
          <h4 class="p-top__company__subheading">Showroom</h4>
          <p class="p-top__company__read">Visiting our showroom, please make a reservation by phone (only on weekdays from 9:10 to 17:30) or email in advance.</p>
        </div>
      </div>
      <div class="p-top__button01 p-top__company__button">
        <a href="<?php echo home_url(); ?>/company-en/"><span>More</span></a>
      </div>
    </div>
  </div>
   
  <div class="p-top__inquiry">
    <div class="p-top__inquiry__wrap">
      <h3 class="p-top__inquiry__heading">Reservations and inquiries</h3>
      <div class="p-top__inquiry__flex">
        <a href="tel:0354024600" class="p-top__inquiry__link">
          <div class="p-top__inquiry__img">
            <img src="/images/top/icon_inquiry_tel.svg" alt="">
          </div>
          <div class="p-top__inquiry__meta">
            <p class="p-top__inquiry__tel">03-5402-4600</p>
            <p class="p-top__inquiry__time">9:10-17:30  (Weekday)</p>
          </div>
        </a>
        <?php
        /*
        <a href="<?php echo home_url(); ?>/contact/" class="p-top__inquiry__link">
          <div class="p-top__inquiry__img">
            <img src="/images/top/icon_inquiry_email.svg" alt="">
          </div>
          <div class="p-top__inquiry__meta">
            <p class="p-top__inquiry__email">E-mail</p>
          </div>
        </a>
        */
        ?>
      </div>
    </div>
  </div>
    
  <div class="p-top__sns">
    <div class="p-top__sns__wrap">
      <h2 class="p-top__title01"><span>follow us</span></h2>
      <div class="p-top__sns__flex">
        <a href="https://www.instagram.com/mays_interior/" target="_blank" class="p-top__sns__link">
          <img src="/images/top/icon_sns_instagram.svg" alt="Instagram">
        </a>
        <a href="https://www.facebook.com/MaysCorporation" target="_blank" class="p-top__sns__link">
          <img src="/images/top/icon_sns_facebook.svg" alt="Facebook">
        </a>
      </div>
    </div>
  </div>
</div>

<?php if(!is_home() && !is_front_page()): ?>
<script>
  // Smooth scroll
  $(function() {
    var headerH = $('.md_header').height();

    $('a[href*="#"]').on('click', function (e) {
      e.preventDefault();

      var offsetTop = $(this.hash).offset().top,
          scrollTop = offsetTop - headerH;

      $('html, body').animate({scrollTop: scrollTop}, 500, 'swing');
    });
  });
</script>
<?php endif; ?>
<?php get_footer(); ?>