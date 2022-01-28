<?php get_header('eng'); ?>
	<section id="case0"></section>
	<section id="case1" class="imgswap"><img src="/images/eng/case1.svg" width="350" height="180" alt="Gallery" /><img src="/images/eng/sp_case1.svg" width="381" height="193" alt="Gallery" /></section>
	<div id="case2">
		<section id="case21">
			<div id="case211">Looking for your favorite coordination case<br />brings you a better life style.</div>
			<p id="case212">We introduce a part of our works that our interior decorators daily present to the customers. Totally decorated with furniture, curtains, lightings, miscellaneous goods, etc., you will see our remarkable services in each case. We'd appreciate it if you could find and let us know your favorite coordination case.</p>
		</section>
		<section id="case22">
			<a id="list" name="list" class="innertarget"></a>
			<h3 id="case221">
				<div id="case2211">WORKS LIST</div>
			</h3>
			<div id="case222">
				<div id="case2221">
					<a href="/eng/gallery/" class="case222c en">ALL</a>
					<a href="/eng-casetype/1ldk/" class="case222c en">1LDK</a>
					<a href="/eng-casetype/2ldk/" class="case222c en">2LDK</a>
					<a href="/eng-casetype/3ldk/" class="case222c en">3LDK</a>
					<a href="/eng-casetype/classic/" class="case222c en">classic</a>
					<a href="/eng-casetype/modern/" class="case222c en">modern</a>
					<a href="/eng-casetype/stylish/" class="case222c en">stylish</a>
					<a href="/eng-casetype/natural/" class="case222c en">natural</a>
					<a href="/eng-casetype/scandinavian/" class="case222c en">scandinavian</a>
				</div>
			</div>
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
						<p>Style：<?php echo get_eng_casestyle(); ?></p>
						<p>Room：<?php echo get_eng_roomtype(); ?></p>
						<p class="case223_card_meta_point">Point：<?php echo strip_tags(post_custom('Point')); ?></p>
					</div>
					<p class="case223_card_button">READ MORE</p>
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
<?php get_footer('eng'); ?>
