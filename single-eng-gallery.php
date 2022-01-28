<?php get_header('eng'); ?>
<?php the_post(); ?>
	<section id="case0"></section>
	<section id="case1" class="imgswap"><img src="/images/eng/case1.svg" width="350" height="180" alt="Gallery" /><img src="/images/eng/sp_case1.svg" width="381" height="193" alt="Gallery" /></section>
	<div id="case2">
		<div id="cased1">
			<div id="cased11"><?php echo pickUpImages('Image'); ?></div>
			<div id="cased12"></div>
			<div id="cased1l"></div>
			<div id="cased1r"></div>
		</div>
		<div id="cased2" class="detail">
			<h3 id="cased21"><?php the_title(); ?></h3>
			<dl id="cased22">
			<dt>CASE NO.</dt>
			<dd><?php echo post_custom('CaseNo'); ?></dd>
			<dt>ROOM TYPE</dt>
			<dd><?php echo get_eng_roomtype(); ?></dd>
			<dt>STYLE</dt>
			<dd><?php echo get_eng_casestyle(); ?></dd>
			<dt>POINT</dt>
			<dd><?php echo nl2br(post_custom('Point')); ?></dd>
			</dl>
		</div>
		<div id="cased3">
			<div id="cased31"><?php previous_post_link('%link','&lt; BACK'); ?></div>
			<div id="cased32"><?php next_post_link('%link','NEXT &gt;'); ?></div>
			<div id="cased33"><a href="/eng/gallery/" class="svg"><img src="/images/eng/case3.svg" width="170" height="55" alt="LIST" /></a></div>
		</div>
	</div>
<?php get_footer('eng'); ?>