<?php 
get_header('eng');
the_post();
$title = get_the_title();
#$title = mb_substr($title,0,10).'<br />'.mb_substr($title,10,10);
$title = preg_replace('/\//','<br />',$title);
?>
	<section id="topics1">
		<div id="topics11">
			<div id="topics111"><?php echo pickUpImages('EyeCatch'); ?></div>
			<div id="topics112"><?php echo $title; ?></div>
			<div id="topics113"><?php echo nl2br(post_custom('Desc')); ?></div>
			<div id="topics114"><img src="/images/topics1_<?php echo post_custom('Number'); ?>.svg" alt="<?php echo post_custom('Number'); ?>" /></div>
		</div>
	</section>
	<section id="topics2"><?php echo the_content(); ?></section>
	<section id="topicslistwrap">
		<div id="topicslist">
			<div id="topicslist1">
<?php
	query_posts(array('post_type'=>'eng-topics', 'posts_per_page'=>100, 'order'=>'ASC'));
	$loopcounter=0;
	while ( have_posts() ) : the_post(); $loopcounter++;
		$title = get_the_title();
		if (mb_strlen($title)>30) $title = mb_substr($title,0,30).'...';
		#$title = mb_substr($title,0,10).'<br />'.mb_substr($title,10,10);
		$title = preg_replace('/\//','<br />',$title);
?>
		<a href="<?php the_permalink(); ?>" class="topicslist1c">
			<div class="topicslist1c1"><?php echo pickUpImages('ListImage'); ?></div>
			<div class="topicslist1c2"><img src="/images/topics1_<?php echo post_custom('Number'); ?>.svg" alt="<?php echo post_custom('Number'); ?>" /></div>
			<div class="topicslist1c3"><?php echo $title; ?></div>
		</a>
<?php
	endwhile;
	wp_reset_query();
?>
			</div>
		</div>
	</section>
<?php get_footer('eng'); ?>