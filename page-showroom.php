<?php
switchLanguage();
get_header();
the_post();
?>
	<div class="page-header" style="background-image: url(/images/showroom/header.jpg)">
		<h1><i>Showroom</i><strong>ショールーム</strong></h1>
	</div><!-- .page-header -->
	<div id="showroom2">
		<section id="showroom21">
			<h3 id="showroom211" class="imgswap"><img src="/images/showroom2.svg" width="873" height="30" alt="季節の変化に合わせた、個性豊かなインテリアコーディネート" /><img src="/images/sp_showroom2.svg" width="507" height="175" alt="季節の変化に合わせた、個性豊かなインテリアコーディネート" /></h3>
			<p id="showroom212">弊社のショールームでは、インテリアコーディネータが季節の変化に合わせ趣向を凝らした、個性溢れる コーディネートをご覧いただけます。May's のインテリアコーディネートの縮図であるショールームにお越しいただき、家具のみではなく、雑貨やインテリア小物を含めた“インテリアアレンジメント”をお楽 しみいただければ幸いです。 なお、お越しの際はお電話またはメールにて事前にご予約いただきますようお願い致します。</p>
			<div id="showroom213"></div>
			<div id="showroom214">
				<div id="showroom2141">
					<div id="showroom21411">
						<div id="showroom214111">〒105-0001 <br class="sp" />東京都港区虎ノ門3-2-2 <br class="sp" />虎ノ門30森ビル1F<br />
							TEL 03-5402-4600（代）　　FAX 03-5402-4660</div>
						<div id="showroom214112"><span>※</span> 弊社ショールームは本社事務所に併設されています。</div>
					</div>
					<div id="showroom21412">東京メトロ銀座線　　<br class="sp" />虎ノ門駅　2番出口より徒歩約7分<br />
						東京メトロ日比谷線　<br class="sp" />神谷町駅　4a出口より徒歩約7分</div>
				</div>
				<div id="showroom2142">
					<div id="showroom21421">本社営業日<br />
						月～金曜日 9:10～17:30<br />
						定休日 土曜日・日曜日・祝祭日</div>
					<div id="showroom21422">ショールーム<br />
					<b>弊社ショールームは事前予約制です。お電話（予約受付時間: 平日9:10~17:30）またはメールにてご予約いただきますようお願い致します。</b><br />
					</div>
				</div>
			</div>
<?php if (!empty($post->post_content)) { ?>
			<div id="showroom215"><?php the_content(); ?></div>
<?php } ?>
		</section>
	</div>
<?php get_footer(); ?>
