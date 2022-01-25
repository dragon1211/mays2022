<?php
switchLanguage();
get_header();
?>
<link rel="stylesheet" href="/css/common/2020.css">
<link rel="stylesheet" href="/css/common/sp_2020.css" media="(max-width: 640px)">
<link rel="stylesheet" href="/css/service/all.css">
<link rel="stylesheet" href="/css/service/sp.css" media="(max-width: 640px)">
<div class="page-header" style="background-image: url(/images/service/index/header.jpg)">
	<h1><i>Premium Service</i></h1>
</div><!-- .page-header -->
<section id="introduction" class="introduction service-intro bg-white">
	<div class="container">
      <h2>Furniture &amp; Interior Premium Service</h2>
      <p class="txt-body">May’s primary service is a premium service that saves time and energy for busy customers. When moving into another house, many customers actually visit interior shops for themselves in their quest for the items they desire. While this is fun, it also takes a lot of time, energy, and effort. To support these busy customers in choosing furniture, we offer a variety of services that differ from those provided by other companies. For example, we perform the time-consuming task of measuring rooms. Also, your items are first dispatched by each manufacturer to our warehouse and then delivered to you all at once in the presence of our staff.</p>
      <?php
      /*
		<div class="iframe-wrapper">
			<iframe src="https://www.youtube.com/embed/6JVV_8oG-gQ" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div><!-- .iframe-wrapper -->
        */
      ?>
	</div><!-- .container -->
</section>
<section id="point" class="service-point bg-white">
	<div class="container">
		<h2 class="sect-title">
			<strong>Service features</strong>
		</h2>
		<div class="service-points">
			<!-- 01 -->
			<div class="service-point-item">
				<div class="point-head">
					<div class="rh">Point<br><span>01</span></div>
                  <h3 class="antialiased">Proposals for a tailor-made<br>interior plan</h3>
				</div><!-- .point-head -->
				<div class="point-body">
					<div class="pic-txt">
						<picture>
							<img src="/images/service/index/point-1.jpg" srcset="/images/service/index/point-1@2x.jpg 656w" sizes="328px" width="328" alt="家具のご提案・手配">
						</picture>
                      <p class="txt-body">Our coordinators oversee around 1,000 projects per year at high-grade properties, mainly in Minato-ku, Tokyo. They propose tailor-made interior plans according to your budget, taste, and lifestyle. By combining products from different manufacturers, it is possible to deliver unique and original coordination that cannot be achieved by using products from a single brand alone. At the same time, we help you to realize a “comfortable new life” within your budget if, for example, you “wish to spend money on sofas and dining room furniture but do not need to go for high-end shelves, etc.” </p>
					</div><!-- .pic-txt -->
                  <?php
                  /*
					<div class="point-body-extra service-point-1-extra">
						<a href="/service/product-brand/#about23" class="button"><span>Products</span><span></span></a>
						<a href="/service/product-brand/#about24" class="button"><span>Brands</span><span></span></a>
					</div><!-- .point-body-extra -->
                    */
                  ?>
				</div><!-- .point-body -->
			</div><!-- .service-point-item -->
			<!-- 02 -->
			<div class="service-point-item">
				<div class="point-head">
					<div class="rh">Point<br><span>02</span></div>
                  <h3 class="antialiased">A dreamy living space realized <br>by “good bargain” branded furniture</h3>
				</div><!-- .point-head -->
				<div class="point-body">
					<div class="pic-txt">
						<picture>
							<img src="/images/service/index/point-2.jpg" srcset="/images/service/index/point-2@2x.jpg 656w" sizes="328px" width="328" alt="お買い得品多数">
						</picture>
                      <p class="txt-body">To provide our customers, who will use furniture, with a high-quality living space, we offer a range of value-for-money, end-of-lease branded furniture on the “next level” that may not otherwise be affordable as new items. This way, we make it possible to realize a high-quality lifestyle at a lower budget than if you purchased all of the items from new. End-of-lease products have been leased by other customers for a few years as brand-new items and then returned to us before being repaired/maintained by our professional specialist staff. Most of these items are “good bargains” in a good condition. We also offer many pieces of furniture that have previously been used in a showroom, etc., which can be offered at a more affordable price than if you purchased new ones. While a large volume of inexpensive furniture and interior goods is sold via mass merchandisers and the Internet etc., we provide a wider variety of better-quality end-of-lease products, based on customers’ desire to use furniture over the long term that both offers excellent durability and a design that matches the size of their room and existing furniture. At the same time, we propose a balance between a “dreamy living space” and “value for money” by coordinating mainly with value items.</p>
					</div><!-- .pic-txt -->
				</div><!-- .point-body -->
			</div><!-- .service-point-item -->
			<!-- 03 -->
			<div class="service-point-item">
				<div class="point-head">
					<div class="rh">Point<br><span>03</span></div>
                  <h3 class="antialiased">Premium delivery that saves<br>your time and effort</h3>
				</div><!-- .point-head -->
				<div class="point-body">
					<div class="pic-txt">
						<picture>
							<img src="/images/service/index/point-3.jpg" srcset="/images/service/index/point-3@2x.jpg 656w" sizes="328px" width="328" alt="まとめて配送">
						</picture>
                      <p class="txt-body">When purchasing products from multiple manufacturers, have you ever had to wait for delivery from each manufacturer only to waste an entire day? Our premium delivery service means that your items are first dispatched from multiple manufacturers to our warehouse and then delivered all at once to your house at the specified date and time. We will support you in beginning your new life stress-free by reducing your waiting time as much as possible.</p>
					</div><!-- .pic-txt -->
				</div><!-- .point-body -->
			</div><!-- .service-point-item -->
		</div><!-- .service-points -->
	</div><!-- .container -->
</section>
<?php
/*
<section id="detail" class="service-detail bg-white">
	<div class="container">
		<h2 class="sect-title-sub"><i>Service Detail</i></h2>
		<div class="service-detail-banners">
			<a href="/service/business/" class="service-detail-banner" style="background-image: url(/images/service/index/banner-business.jpg)">
				<i>For Business</i>
			</a>
			<a href="/service/lease/" class="service-detail-banner" style="background-image: url(/images/service/index/banner-lease.jpg)">
				<i>Lease</i>
			</a>
			<a href="/service/plan/" class="service-detail-banner" style="background-image: url(/images/service/index/banner-plan.jpg)">
				<i>Sample/Package Plan</i>
			</a>
			<a href="/service/product-brand/" class="service-detail-banner" style="background-image: url(/images/service/index/banner-plan.jpg)">
				<i>Products/Brands</i>
			</a>
		</div><!-- .service-detail-banners -->
	</div><!-- .container -->
</section>
<section id="pickup" class="service-pickup bg-white">
	<div class="container">
		<h2 class="sect-title-sub2"><i>Pick-up Content</i></h2>
		<ul class="service-pickup-list">
			<li><a href="/images/service/index/zaiaku.pdf"><img src="/images/service/index/pickup-at-home.jpg" alt="在宅ワークをもっと快適に"></a></li>
			<li><a href="/concept/#luxury"><img src="/images/service/index/pickup-luxury.jpg" alt="ラグジュアリーコーディネート"></a></li>
		</ul>
	</div><!-- .container -->
</section>
<section id="topics" class="service-topics has-paddingb bg-white">
	<div class="container">
		<h2 class="sect-title">
			<strong>Topics - Service</strong>
		</h2>
		<?php echo do_shortcode('[topics_carousel terms="service"]'); ?>
	</div><!--.container  -->
</section>
*/
?>
<?php get_footer(); ?>