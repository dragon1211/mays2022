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
<div class="md_top_main_element01"></div>
<div class="md_top_slide_space">
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
</div>
<!-- end slide -->

<div id="introduction" class="md_top_contents">

  <div class="md_center">
    <div class="md_concept">
      <h2 class="md_concept_title">上質なインテリアで、<br>一つ上のライフスタイルへ</h2>
      <p class="md_concept_copy">「お客様に一つ上のライフスタイルを提供したい」<br>これが私たちの変わらない想いです。日々寛ぎの時間を過ごす、ご家族やご友人との楽しい一時を演出する、<br>インテリアは私たちの生活に欠かせないものとして、今や理想のライフスタイルを実現する重要なアイテムとなっています。<br><br>昨今、量販店や専門店、オンラインショップなど家具を購入する選択肢が増える中、<br>May’sではお客様のライフスタイルやご要望を伺いながら、お部屋の寸法、生活動線等を考慮し、<br>真に価値ある商品を選定しお届けする家具・インテリアの「購買代理人」として、<br>商品知識のご提供、コーディネートプランの作成、各種家具搬入までのトータルサポートを通じて<br>「顧客価値の創造」を行って参ります。
      </p>
      <div class="btn"><a href="/concept/"><i>MORE</i></a></div>
    </div>
  </div>

  <div class="md_center">

    <div class="md_caselink_box">
      <div class="md_caselink clearfix">

        <?php
        query_posts(array('post_type'=>'gallery', 'posts_per_page'=>12, 'order'=>'DESC'));
        while ( have_posts() ) : the_post(); $loopcounter++;
        ?>
        <a href="<?php the_permalink(); ?>"><?php echo pickUpFirstImage('Image'); ?></a>
        <?php
        endwhile;
        wp_reset_query();
        ?>
      </div>
    </div>


    <h2 class="md_title">TOPICS</h2>

    <div class="md_topics_box">
      <div class="md_topics clearfix"> <a href="https://www.mays.co.jp/covid19/"><img src="/images/infoCOVID01.png" alt="新型コロナウイルス感染症拡大防止に関する当社の対応" /></a>
        <br><br><br>
        <a href="<?php echo home_url(); ?>/entry/"><img src="/images/banner_onlineMTG.jpg" alt="オンラインインテリア相談" /></a>
        <div class="p-top-topics__telework">
          <a href="<?php echo home_url(); ?>/telework/">
            <img src="/images/service/index/pickup-at-home.jpg" alt="在宅ワークをもっと快適に">
          </a>
        </div>
        <?php
        /*
        <br><br>
        <?php
        query_posts(array('post_type'=>'topics', 'posts_per_page'=>5, 'order'=>'ASC'));
        $loopcounter=0;
        while ( have_posts() ) : the_post(); $loopcounter++;
        $title = get_the_title();
        if (mb_strlen($title)>30) $title = mb_substr($title,0,30).'…';
        $title = preg_replace('/\//','<br />',$title);
        ?>
        <section>
          <a href="<?php the_permalink(); ?>">
            <span class="md_topics_image"><?php echo pickUpImages('ListImage'); ?></span>
            <h3 class="md_topics_title"><span class="md_topics_number"><?php echo sprintf('%02d', post_custom('Number')); ?></span><span><?php echo $title; ?></span></h3>
          </a>
        </section>
        <?php
        endwhile;
        wp_reset_query();
        ?>
        */
        ?>
      </div>
    </div>

    <h2 class="md_title">PARTNERS</h2>
    <ul class="md_partners">
      <li><a href="http://www.kencorp.co.jp/" target="_blank"><img src="/images/index7_1.png" alt="ケンコーポレーション" /></a></li>
      <li><a href="http://www.housingjapan.com/" target="_blank"><img src="/images/index7_2.png" alt="Housing Japan" /></a></li>
      <li><a href="http://www.mitsui-chintai.co.jp/" target="_blank"><img src="/images/index7_3.png" alt="三井の賃貸" /></a></li>
      <li><a href="https://hokuo-p.com/" target="_blank"><img src="/images/index7_11.png" alt="北王プランニング" /></a></li>
      <li><a href="http://tokyoapartmentinc.com/" target="_blank"><img src="/images/index7_5.png" alt="TOKYO APARTMENT" /></a></li>
      <li><a href="http://www.m-standard.co.jp/" target="_blank"><img src="/images/index7_6.png" alt="モダンスタンダード" /></a></li>
      <li><a href="http://www.ma-minatoku-chintai.com/" target="_blank"><img src="/images/index7_7.png" alt="Rent act-港区" /></a></li>
      <li><a href="http://www.start-line.co.jp/" target="_blank"><img src="/images/index7_9.png" alt="スタートライングループ" /></a></li>
      <li><a href="https://www.mirabell.co.jp/" target="_blank"><img src="/images/index7_10.png" alt="ミラベル" /></a></li>
      <li><a href="https://prime-corporation.co.jp/" target="_blank"><img src="/images/index7_12.png" alt="プライムコーポレーション" /></a></li>
    </ul>
  </div>
</div><!--end md_top_contents-->
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
<?php get_footer(); ?>