<?php get_header('eng'); ?>
	<section id="news1">
		<h2 id="news11">NEWS</h2>
		<div id="news12">
<?php while ( have_posts() ) : the_post(); $loopcounter++; ?>
			<div class="news12c">
				<div class="news12c1"><?php echo get_post_time('M. jS, Y'); ?></div>
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
<?php get_footer('eng'); ?>
