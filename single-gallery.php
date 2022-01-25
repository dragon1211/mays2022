<?php get_header(); ?>
<?php the_post(); ?>
<div class="page-header" style="background-image: url(/images/gallery/header.jpg)">
  <h1><i>Gallery</i><strong>コーディネート事例</strong></h1>
</div><!-- .page-header -->
<div id="case2">
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
      <dt>CASE NO.</dt>
      <dd><?php echo post_custom('CaseNo'); ?></dd>
      <dt>ROOM TYPE</dt>
      <dd><?php echo get_roomtype(); ?></dd>
      <dt>STYLE</dt>
      <dd><?php echo get_casestyle(); ?></dd>
      <dt>POINT</dt>
      <dd><?php echo nl2br(post_custom('Point')); ?></dd>
    </dl>
  </div>
  <?php
  /*
  <div id="cased3">
    <div id="cased31"><?php previous_post_link('%link','&lt; BACK'); ?></div>
    <div id="cased32"><?php next_post_link('%link','NEXT &gt;'); ?></div>
    <div id="cased33"><a href="/gallery/" class="svg"><img src="/images/case3.svg" width="170" height="55" alt="LIST 一覧へ" /></a></div>
  </div>
  */
  ?>
  <div id="cased4">
  <a href="<?php echo home_url(); ?>/contact/#tab-01">相談する</a>
  </div>
</div>
<?php get_footer(); ?>