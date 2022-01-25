<?php get_header(); ?>
<div class="page-header" style="background-image: url(/images/ideabook/header.jpg)">
  <h1><i>Ideabook</i><strong>アイデアブック</strong></h1>
</div><!-- .page-header -->
<div id="idea1">
  <section id="idea11">
    <div id="idea111" class="imgswap"><img src="/images/arc_idea21.svg" width="812" height="30" alt="ここにコピーが入ります。" /><img src="/images/sp_arc_idea21.svg" width="499" height="175" alt="ここにコピーが入ります。" /></div>
    <p id="idea112">ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。ここに説明文が入ります。</p>
  </section>
  <section id="idea12">
    <a id="list" name="list" class="innertarget"></a>
    <h3 id="idea121">
      <div id="idea1211">IDEA LIST</div>
      <div id="idea1212">コーディネートアイデア一覧</div>
    </h3>
    <div id="idea122">
      <div class="idea122_list">
        <?php while ( have_posts() ) : the_post(); $loopcounter++; ?>
        <a href="<?php the_permalink(); ?>" class="idea122_card">
          <div class="idea122_card_img">
            <?php
            $arr = post_custom('ListImage');
            foreach ((array)$arr as $img) {
              $imgs = wp_get_attachment_image_src($img,'full');
              break;
            }
            ?>
            <div class="idea122_card_img_photo" style="background-image:url(<?php echo $imgs[0]; ?>);"></div>
          </div>
         <div class="idea122_card_meta">
            <h4 class="idea122_card_meta_heading">【<?php the_title(); ?>】</h4>
            <p class="idea122_card_meta_point"><?php echo strip_tags(post_custom('Point')); ?></p>
          </div>

        </a>
        <?php endwhile; ?>
      </div>
    </div>
    <div id="idea123">
      <?php echo get_previous_posts_link('&lt;'); ?>
      <?php echo the_pagination(); ?>
      <?php echo get_next_posts_link('&gt;'); ?>
    </div>
  </section>
</div>
<?php get_footer(); ?>