<?php get_header('eng'); ?>

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
<div class="md_logo_copy">
  <?php /*<img src="/images/logo_copy.svg" alt="Sophisticated Selection" />*/ ?>
</div>

<div class="md_top_slide_space">
	<div class="md_top_main_element02"></div>
</div>

<!-- end slide -->


<div class="md_top_contents">

	<div class="md_center">        
		<div class="md_concept">
			<h2 class="md_concept_title">A New Life. A New Home.<br> A New Interior Vision.</h2>
			<p class="md_concept_copy md_concept_copy_en">
			<span>A combination of </span>colors and functions in harmony.<br>
			<span>MAYS enables you to </span>spend quality time<br>
			<span>in a comfortable and </span> sophisticated space.
			</p>
		</div>
	</div>


	<div class="md_center">

	<div class="md_caselink_box">
		<div class="md_caselink clearfix">

		<?php
			query_posts(array('post_type'=>'eng-gallery', 'posts_per_page'=>12, 'order'=>'DESC'));
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
		<div class="md_topics clearfix">
		<?php
			query_posts(array('post_type'=>'eng-topics', 'posts_per_page'=>100, 'order'=>'ASC'));
			$loopcounter=0;
			while ( have_posts() ) : the_post(); $loopcounter++;
				$title = get_the_title();
				if (mb_strlen($title)>60) $title = mb_substr($title,0,60).'...';
				#$title = mb_substr($title,0,10).'<br />'.mb_substr($title,10,10);
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

<?php get_footer('eng'); ?>