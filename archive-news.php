<?php get_header(); ?>
	<div class="page-header" style="background-image: url(/images/news/header.jpg)">
		<h1><i>News</i><strong>お知らせ</strong></h1>
	</div><!-- .page-header -->
	<section id="news1">
		<div id="news12">
<?php while ( have_posts() ) : the_post(); $loopcounter++; ?>
			<div class="news12c" id="<?php echo get_the_ID(); ?>">
				<div class="news12c1"><?php echo get_the_date('Y年n月j日'); ?></div>
				<div class="news12c2"><?php the_content(); ?></div>
			</div>
<?php endwhile; ?>
		</div>
		<div id="news13">
			<?php echo get_previous_posts_link('&lt;'); ?>
			<?php echo the_pagination(); ?>
			<?php echo get_next_posts_link('&gt;'); ?>
		</div>
	</section>
<?php get_footer(); ?>
