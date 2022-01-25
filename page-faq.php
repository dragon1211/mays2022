<?php
switchLanguage();
get_header();
the_post();
?>
	<div class="page-header" style="background-image: url(/images/faq/header.jpg)">
		<h1><i>Q &amp; A</i><strong>よくあるご質問</strong></h1>
	</div><!-- .page-header -->
	<div id="faq2">
		<section id="faq21">
			<?php the_content(); ?>
		</section>
	</div>
<?php get_footer(); ?>
