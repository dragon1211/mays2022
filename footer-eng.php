	</main>
	<link rel="stylesheet" href="/css/footer.css">
	<footer class="md_footer">
		<div class="md_footer_container">
			<div class="md_footer_contents">
				<div class="me_footer_cmain">
					<a class="md_footer_logo" href="/" title="May’s">
						<img src="/images/logo_new_white.svg" width="110" height="28" alt="May’s">
					</a>
					<?php wp_nav_menu(array(
						'menu' => 'footer-menu-english',
						'container' => 'nav',
						'container_class' => 'md_footer_nav',
						'depth' => 3,
						'theme_location' => 'footer_menu',
					)); ?>
				</div><!-- .me_footer_cmain -->
				<div class="md_footer_csub">
					<div class="fb-page" data-href="https://www.facebook.com/MAYS-573261612825255/" data-tabs="timeline" data-width="280" data-height="220" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/MAYS-573261612825255/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MAYS-573261612825255/">メイズ May&#039;s Corporation</a></blockquote></div>
				</div><!-- .md_footer_csub -->
			</div><!-- .md_footer_contents -->
			<div class="md_copyright">© 2020 May’s Corporation. <span>All rights reserved.</span></div>
		</div><!-- .md_footer_container -->
	</footer>
		<?php wp_footer(); ?>
		<?php if (is_page('showroom')): ?>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDM3IZ_-NHgFvOnOwp7y7IF-VPQBt07lBU&callback=initMap"></script>
		<?php endif; ?>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-65570864-1', 'auto');
			ga('send', 'pageview');
		</script>
	</body>
</html>
