<?php get_header(); ?>
<?php the_post(); ?>
<div class="page-header" style="background-image: url(/images/gallery/header.jpg)">
  <h1><i>Ideabook</i><strong>アイデアブック</strong></h1>
</div><!-- .page-header -->
<section id="idea2">
  <div id="idead1">
    <?php echo the_content(); ?>
  </div>
  <div id="idead2">
    <a href="../" class="btn_tolist">一覧に戻る</a>
    <a href="../" class="btn_toctt">料金シミュレーションへ</a>
    <a href="<?php echo home_url(); ?>/contact/#tab-01" class="btn_toctt">コーディネートを依頼する</a>
  </div>
</section>
<?php get_footer(); ?>
