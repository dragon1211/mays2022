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
    <div class="p-top__mv__box">
      <div class="p-top__mv__slider">
        <div class="p-top__mv__news">
          <h2 class="p-top__title01 black small"><span>News</span></h2>
          <?php
          $args = array(
            'post_type' => 'news',
            'posts_per_page' => 3,
            'post_status' => 'publish'
          );
          ?>
          <?php $wp_query = new WP_Query( $args ); ?>
          <?php if( $wp_query->have_posts() ) : ?>
          <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
          <a href="<?php echo home_url(); ?>/news/#<?php echo get_the_ID(); ?>" class="p-top__mv__news__link">
            <p class="p-top__mv__news__day"><?php the_time('Y.m.d'); ?></p>
            <h3 class="p-top__mv__news__heading"><span><?php the_title(); ?></span></h3>
          </a>
          <?php endwhile; ?>
          <?php else: ?>
          <?php endif; ?>
          <?php wp_reset_query(); ?>
        </div>
        <div class="p-top__mv__blog">
          <h2 class="p-top__title01 black small"><span>新着コラム</span></h2>
          <?php
          $args = array(
          'post_type' => 'column',
          'posts_per_page' => 3,
          'post_status' => 'publish'
          );
          ?>
          <?php $wp_query = new WP_Query( $args ); ?>
          <?php if( $wp_query->have_posts() ) : ?>
          <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="p-top__mv__blog__link">
            <div class="p-top__mv__blog__img" style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>);"></div>
            <div class="p-top__mv__blog__meta">
              <p class="p-top__mv__blog__day"><?php the_time('Y.m.d'); ?></p>
              <h3 class="p-top__mv__blog__heading"><span><?php the_title(); ?></span></h3>
            </div>
          </a>
          <?php endwhile; ?>
          <?php else: ?>
          <?php endif; ?>
          <?php wp_reset_query(); ?>
        </div>
      </div>
      <div class="p-top__mv__banner">
        <a href="<?php echo home_url(); ?>/telework/">
          <img src="/images/top/img_mv_telework.png" alt="自宅の勤務環境を整えて在宅ワークをもっと快適に イメージ">
        </a>
        <a href="<?php echo home_url(); ?>/campaign-replace/">
          <img src="/images/top/img_mv_campaign.png" alt="おうち時間を快適に家具買取キャンペーン イメージ">
        </a>
      </div>
      <div class="p-top__mv__covid19">
        <a href="<?php echo home_url(); ?>/covid19/">
          <img src="/images/top/img_mv_covid19.png" alt="自宅の勤務環境を整えて在宅ワークをもっと快適に イメージ">
        </a>
      </div>
    </div>
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
      <div class="tab_container_l">
      <input id="concept_tab1" type="radio" name="concept_tab_item" checked>
      <label class="tab_item" for="concept_tab1">日本語</label>
      <input id="concept_tab2" type="radio" name="concept_tab_item">
      <label class="tab_item" for="concept_tab2">English</label>
        <div class="tab_content" id="concept_tab1_content">
          <div class="tab_content_description">
            <div class="p-top__concept__flex">
            <h3 class="p-top__concept__heading nopc">上質なインテリアで、<br>一つ上のライフスタイルへ</h3>
              <div class="p-top__concept__img">
              <img src="/images/top/img_concept.jpg" alt="Concept イメージ">
              </div>
              <div class="p-top__concept__meta">
              <h3 class="p-top__concept__heading nosp">上質なインテリアで、一つ上のライフスタイルへ</h3>
              <p class="p-top__concept__read">「お客様に一つ上のライフスタイルを提供したい」<br>
              これが私たちの変わらない想いです。<br>
              日々寛ぎの時間を過ごす、ご家族やご友人との楽しい一時を演出する、<br>
              インテリアは私たちの生活に欠かせないものとして、<br>
              今や理想のライフスタイルを実現する重要なアイテムとなっています。<br>
              昨今、量販店や専門店、オンラインショップなど家具を購入する選択肢が増える中、<br>
              May’sではお客様のライフスタイルやご要望を伺いながら、<br>
              お部屋の寸法、生活動線等を考慮し、<br>
              真に価値ある商品を選定しお届けする家具・インテリアの「購買代理人」として、<br>
              商品知識のご提供、コーディネートプランの作成、各種家具搬入までの<br>
              トータルサポートを通じて「顧客価値の創造」を行って参ります。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="tab_content" id="concept_tab2_content">
          <div class="tab_content_description">
            <div class="p-top__concept__flex">
            <h3 class="p-top__concept__heading nopc">High quality interior design for a superior lifestyle</h3>
              <div class="p-top__concept__img">
              <img src="/images/top/img_concept.jpg" alt="Concept image">
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
              </div>
            </div>
          </div>
        </div>
        <div class="p-top__button01 p-top__concept__button">
        <a href="<?php echo home_url(); ?>/concept/"><span>More</span></a>
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
            <a href="<?php echo home_url(); ?>/service/" class="p-top__service__link">
              <h3 class="p-top__service__heading">Premium Service</h3>
              <h3 class="p-top__service__subheading">テーラーメイドのインテリアプラン</h3>
            </a>
          </li>
          <li class="p-top__service__list">
            <a href="<?php echo home_url(); ?>/service/lease/" class="p-top__service__link">
              <h3 class="p-top__service__heading">Furniture Lease</h3>
              <h3 class="p-top__service__subheading">家具のリース・レンタルサービス</h3>
            </a>
          </li>
          <li class="p-top__service__list">
            <a href="<?php echo home_url(); ?>/service/plan/" class="p-top__service__link">
              <h3 class="p-top__service__heading">Sample Plan</h3>
              <h3 class="p-top__service__subheading">サンプルプラン</h3>
            </a>
          </li>
          <li class="p-top__service__list">
            <a href="<?php echo home_url(); ?>/service/package/" class="p-top__service__link">
              <h3 class="p-top__service__heading">Package Plan</h3>
              <h3 class="p-top__service__subheading">パッケージプラン</h3>
            </a>
          </li>
          <li class="p-top__service__list">
            <a href="<?php echo home_url(); ?>/service/product-brand/" class="p-top__service__link">
              <h3 class="p-top__service__heading">Product / Brand</h3>
              <h3 class="p-top__service__subheading">取扱商品 / 取扱メーカー</h3>
            </a>
          </li>
          <li class="p-top__service__list">
            <a href="<?php echo home_url(); ?>/service/business/" class="p-top__service__link">
              <h3 class="p-top__service__heading">For Business</h3>
              <h3 class="p-top__service__subheading">不動産会社・アライアンス先の方へ</h3>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
    
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

  <div class="p-top__column">
    <div class="p-top__column__flex">
      <div class="p-top__column__blog">
        <h2 class="p-top__title01 black"><span>Column</span></h2>
        <?php
        $args = array(
        'post_type' => 'column',
        'posts_per_page' => 4,
        'post_status' => 'publish'
        );
        ?>
        <?php $wp_query = new WP_Query( $args ); ?>
        <?php if( $wp_query->have_posts() ) : ?>
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="p-top__column__blog__link">
          <div class="p-top__column__blog__img">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?> イメージ">
          </div>
          <div class="p-top__column__blog__meta">
            <p class="p-top__column__blog__day"><?php the_time('Y.m.d'); ?></p>
            <h3 class="p-top__column__blog__heading"><span><?php the_title(); ?></span></h3>
          </div>
        </a>
        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
        <div class="p-top__button01 black p-top__column__button">
          <a href="<?php echo home_url(); ?>/column/"><span>More</span></a>
        </div>
      </div>
      <div class="p-top__column__news">
        <h2 class="p-top__title01 gold"><span>News</span></h2>
        <?php
        $args = array(
          'post_type' => 'news',
          'posts_per_page' => 4,
          'post_status' => 'publish'
        );
        ?>
        <?php $wp_query = new WP_Query( $args ); ?>
        <?php if( $wp_query->have_posts() ) : ?>
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <a href="<?php echo home_url(); ?>/news/#<?php echo get_the_ID(); ?>" class="p-top__column__news__link">
          <p class="p-top__column__news__day"><?php the_time('Y.m.d'); ?></p>
          <h3 class="p-top__column__news__heading"><span><?php the_title(); ?></span></h3>
        </a>
        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
        <div class="p-top__button01 p-top__column__button">
          <a href="<?php echo home_url(); ?>/news/"><span>More</span></a>
        </div>
      </div>
    </div>
  </div>
    
  <div class="p-top__company">
    <div class="p-top__company__wrap">
      <h2 class="p-top__title01"><span>Company</span></h2>
      <div class="p-top__company__flex">
        <div class="p-top__company__map">
          <div id="is-map"></div>
        </div>
        <div class="p-top__company__meta">
          <div class="tab_container_r">
          <input id="company_tab1" type="radio" name="company_tab_item" checked>
          <label class="tab_item" for="company_tab1">日本語</label>
          <input id="company_tab2" type="radio" name="company_tab_item">
          <label class="tab_item" for="company_tab2">English</label>
            <div class="tab_content" id="company_tab1_content">
              <div class="tab_content_description">
              <h3 class="p-top__company__heading">本社及びショールーム</h3>
              <p class="p-top__company__read">〒105-0001 東京都港区虎ノ門 3-2-2 虎ノ門 30 森ビル 1F</p>
              <p class="p-top__company__read">東京メトロ銀座線　　虎ノ門駅　2番出口より徒歩約7分<br>東京メトロ日比谷線　神谷町駅　4a出口より徒歩約7分</p>
                <div class="p-top__company__tel">
                <p class="p-top__company__read">TEL <a href="tel:0354024600">03-5402-4600</a>（代）</p>
                <p class="p-top__company__read">FAX 03-5402-4660</p>
                </div>
              <h4 class="p-top__company__subheading">本社</h4>
              <p class="p-top__company__read">営業日  平日 9:10−17:30<br>
              定休日  土曜日・日曜日・祝祭日</p>
              <h4 class="p-top__company__subheading">ショールーム</h4>
              <p class="p-top__company__read">弊社ショールームは<strong>事前予約制</strong>になります。<br>
              お電話またはメールにてご予約いただきますよう、<br>お願い致します。</p>
              </div>
            </div>
            <div class="tab_content" id="company_tab2_content">
              <div class="tab_content_description">
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
          </div>
          
        </div>
      </div>
      <div class="p-top__button01 p-top__company__button">
        <a href="<?php echo home_url(); ?>/company/"><span>More</span></a>
      </div>
    </div>
  </div>
   
  <div class="p-top__inquiry">
    <div class="p-top__inquiry__wrap">
      <h3 class="p-top__inquiry__heading">ご予約、お問い合わせ</h3>
      <div class="p-top__inquiry__flex">
        <a href="tel:0354024600" class="p-top__inquiry__link">
          <div class="p-top__inquiry__img">
            <img src="/images/top/icon_inquiry_tel.svg" alt="">
          </div>
          <div class="p-top__inquiry__meta">
            <p class="p-top__inquiry__tel">03-5402-4600</p>
            <p class="p-top__inquiry__time">9:10-17:30  (平日)</p>
          </div>
        </a>
        <a href="<?php echo home_url(); ?>/contact/" class="p-top__inquiry__link">
          <div class="p-top__inquiry__img">
            <img src="/images/top/icon_inquiry_email.svg" alt="">
          </div>
          <div class="p-top__inquiry__meta">
            <p class="p-top__inquiry__email">メールでのご予約</p>
          </div>
        </a>
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