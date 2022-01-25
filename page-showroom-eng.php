<?php get_header('eng');the_post(); ?>
	<section id="showroom0"></section>
	<section id="showroom1" class="imgswap"><img src="/images/eng/showroom1.svg" width="350" height="180" alt="SHOWROOM" /><img src="/images/eng/sp_showroom1.svg" width="381" height="193" alt="SHOWROOM" /></section>
	<div id="showroom2">
		<section id="showroom21">
			<h3 id="showroom211">Our showroom's interior decoration<br />changes according to the season</h3>
			<p id="showroom212">You can see our showroom that is uniquely decorated by our interior decorators. We encourage you to enjoy the "interior arrangement" including not only furniture but also miscellaneous goods, which showcases our work. Please contact us in advance if you plan to visit our showroom.</p>
			<div id="showroom213"></div>
			<div id="showroom214">
				<div id="showroom2141">
					<div id="showroom21411">
						<div id="showroom214111">Toranomon 30 Mori Bldg. 1F 3-2-2 Toranomon, <br />
							Minato-ku, Tokyo 105-0001 <br />
							Tel: +81 (0)3-5402-4600 <br />
							Fax: +81 (0)3-5402-4660</div>
						<div id="showroom214112">*Our showroom is located in the same place as our head office.</div>
					</div>
					<div id="showroom21412">Tokyo Metro TORANOMON Station - Ginza Line - Exit 2<br />
						Tokyo Metro KAMIYACHO Station - Hibiya Line - Exit 4a</div>
				</div>
				<div id="showroom2142">
					<div id="showroom21421">Office Business Hours<br />
						Monday - Friday 9:10am - 5:30pm <br />
						Saturday, Sunday and National Holidays Closed </div>
					<div id="showroom21422">Showroom<br />
					  Visiting our showroom, please make a reservation by phone (only on weekdays from 9:10 to 17:30) or email in advance.</div>
				</div>
			</div>
<?php if (!empty($post->post_content)) { ?>
			<div id="showroom215"><?php the_content(); ?></div>
<?php } ?>
		</section>
	</div>
<?php get_footer('eng'); ?>
