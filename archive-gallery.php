<?php get_header(); ?>
<div class="page-header" style="background-image: url(/images/gallery/header.jpg)">
  <h1><i>Gallery</i><strong>コーディネート事例</strong></h1>
</div><!-- .page-header -->
<div id="case2">
  <section id="case21">
    <div id="case211" class="imgswap"><img src="/images/case2.svg" width="812" height="30" alt="上質な暮らしへの一歩、お気に入りのコーディネート探し" /><img src="/images/sp_case2.svg" width="499" height="175" alt="上質な暮らしへの一歩、お気に入りのコーディネート探し" /></div>
    <p id="case212">May'sのインテリアコーディネーター達が日々お客様にご提供しているコーディネート事例の一部をご紹介します。家具・カーテン・ラグ・照明・インテリア雑貨等に至るまで、空間をトータルコーディネートする弊社のサービスをご覧いただけます。是非お気に入りのコーディネートを見つけ、お客様の上質な暮らしへのお手伝いをさせて頂ければ幸いです。</p>
  </section>
  <section id="case22">
    <a id="list" name="list" class="innertarget"></a>
    <h3 id="case221">
      <div id="case2211">WORKS LIST</div>
      <div id="case2212">事例一覧</div>
    </h3>
    <?php
    /*
    <div id="case222">
      <div id="case2221">
        <a href="/gallery/" class="case222c en">ALL</a>
        <a href="/casetype/1ldk/" class="case222c en">1LDK</a>
        <a href="/casetype/2ldk/" class="case222c en">2LDK</a>
        <a href="/casetype/3ldk/" class="case222c en">3LDK</a>
        <a href="/casetype/classic/" class="case222c">クラシック</a>
        <a href="/casetype/modern/" class="case222c">モダン</a>
        <a href="/casetype/stylish/" class="case222c">スタイリッシュ</a>
        <a href="/casetype/natural/" class="case222c">ナチュラル</a>
        <a href="/casetype/scandinavian/" class="case222c">北欧</a>
      </div>
    </div>
    */
    ?>
    <div id="case223">
      <div class="case223_list">
        <?php while ( have_posts() ) : the_post(); $loopcounter++; ?>
        <a href="<?php the_permalink(); ?>" class="case223_card">
          <div class="case223_card_img">
            <?php
            $arr = post_custom('Image');
            foreach ($arr as $img) {
              $imgs = wp_get_attachment_image_src($img,'full');
              break;
            }
            ?>
            <div class="case223_card_img_photo" style="background-image:url(<?php echo $imgs[0]; ?>);"></div>
          </div>
          <div class="case223_card_meta">
            <h4 class="case223_card_meta_heading">【<?php the_title(); ?>】</h4>
            <p>Case No：<?php echo post_custom('CaseNo'); ?></p>
            <p>スタイル：<?php echo get_casestyle(); ?></p>
            <p>間取り：<?php echo get_roomtype(); ?></p>
            <p class="case223_card_meta_point">ポイント：<?php echo strip_tags(post_custom('Point')); ?></p>
          </div>
          <p class="case223_card_button">詳しく見る</p>
        </a>
        <?php endwhile; ?>
      </div>
    </div>
    <div id="case224">
      <?php echo get_previous_posts_link('&lt;'); ?>
      <?php echo the_pagination(); ?>
      <?php echo get_next_posts_link('&gt;'); ?>
    </div>
  </section>
</div>
<?php get_footer(); ?>