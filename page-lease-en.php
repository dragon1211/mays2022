<?php
switchLanguage();
get_header();
?>
<link rel="stylesheet" href="/css/common/2020.css">
<link rel="stylesheet" href="/css/common/sp_2020.css" media="(max-width: 640px)">
<link rel="stylesheet" href="/css/service/all.css">
<link rel="stylesheet" href="/css/service/sp.css" media="(max-width: 640px)">
<div class="page-header" style="background-image: url(/images/service/lease/header.jpg)">
	<h1><i>Furniture Lease</i></h1>
</div><!-- .page-header -->
<section id="introduction" class="introduction lease-intro bg-white">
	<div class="container">
      <h2>Coordination at the “next level” through leasing</h2>
      <p class="txt-body">Furniture leasing and rental services are widespread in Europe, the US, and other countries. We provide one-stop services for the items you need to live a comfortable life, including furniture, curtains, lighting fixtures, and home appliances. Our services include the Coordination Plan, where a professional interior coordinator fully coordinates your furniture and interior goods, and the Package Plan, in which essential furniture is available for short-term use at a reasonable price.</p>
	</div><!-- .container -->
</section>
<section id="point" class="lease-point bg-pattern">
	<div class="container">
		<h2 class="sect-title">
			<strong>Why Leasing</strong>
          <small>Three advantages of leasing</small>
		</h2>
		<div class="service-points">
			<!-- 01 -->
			<div class="service-point-item">
				<div class="point-head">
					<div class="rh">Point<br><span>01</span></div>
                  <h3 class="antialiased">Lease terms that meet<br>diverse needs</h3>
				</div><!-- .point-head -->
				<div class="point-body">
					<div class="pic-txt">
						<picture>
							<img src="/images/service/lease/point-1.jpg" srcset="/images/service/lease/point-1@2x.jpg 656w" sizes="328px" width="328" alt="経費で落とせる">
						</picture>
                      <p class="txt-body">We have a wide range of lease plans from 1 month to 36 months to meet the diverse needs of our customers, including those who are transporting furniture from their home country and only wish to use our leasing service for a few months, as well as those looking to use our service during a longer stay in Japan.</p>
					</div><!-- .pic-txt -->
				</div><!-- .point-body -->
			</div><!-- .service-point-item -->
			<!-- 02 -->
			<div class="service-point-item">
				<div class="point-head">
					<div class="rh">Point<br><span>02</span></div>
                  <h3 class="antialiased">Lower initial costs</h3>
				</div><!-- .point-head -->
				<div class="point-body">
					<div class="pic-txt">
						<picture>
							<img src="/images/service/lease/point-2.jpg" srcset="/images/service/lease/point-2@2x.jpg 656w" sizes="328px" width="328" alt="お買い得品多数">
						</picture>
                      <p class="txt-body">You can use products from high-end manufacturers at a lower initial cost compared to purchasing them. Also, by using a combination of reasonably priced second-hand products, you benefit from a furniture plan that better suits your budget.</p>
					</div><!-- .pic-txt -->
				</div><!-- .point-body -->
			</div><!-- .service-point-item -->
			<!-- 03 -->
			<div class="service-point-item">
				<div class="point-head">
					<div class="rh">Point<br><span>03</span></div>
                  <h3 class="antialiased">Support during the lease term</h3>
				</div><!-- .point-head -->
				<div class="point-body">
					<div class="pic-txt">
						<picture>
							<img src="/images/service/lease/point-3.jpg" srcset="/images/service/lease/point-3@2x.jpg 656w" sizes="328px" width="328" alt="まとめて配送">
						</picture>
                      <p class="txt-body">During your lease term, we provide a full range of support unique to “renting furniture.” As part of our leasing service, we will exchange or replace items that suffer any defect or failure within the first four years of your leasing contract, except for when you are liable for such failures. </p>
					</div><!-- .pic-txt -->
				</div><!-- .point-body -->
			</div><!-- .service-point-item -->
		</div><!-- .service-points -->
      <?php
      /*
		<div class="lease-point-link">
			<a href="#contract" class="button popupbutton bg-white"><span>Contract Guide</span><span></span></a>
		</div>
        */
      ?>
	</div><!-- .container -->
</section>
<?php
/*
<section id="topics" class="service-topics has-paddingt bg-white">
	<div class="container">
		<h2 class="sect-title">
			<strong>Topics - Lease</strong>
		</h2>
		<?php echo do_shortcode('[topics_carousel terms="lease"]'); ?>
	</div><!--.container  -->
</section>
<section id="plan" class="lease-plan bg-white">
	<div class="container">
		<a href="/service/plan/" class="lease-plan-link">
			<img src="/images/service/lease/plan.jpg" alt="サンプル/パッケージプラン">
		</a>
	</div><!-- .container -->
</section>
<!-- Contact -->
<link rel="stylesheet" href="/css/lease.css">
<link rel="stylesheet" href="/css/sp_lease.css" media="(max-width: 640px)">
<section id="contract" class="popupwrap lease-contract">
	<div class="popup">
		<h3 class="popuptitle">
			<div><img src="/images/leasep2.svg" width="214" height="13" alt="CONTRACT GUIDE"></div>
			<div>ご契約に際して</div>
		</h3>
		<div id="leasep212">
			<div class="leasep212c">
				<h3 class="leasep212cttl"><img src="/images/leasep3_1.svg" width="150" height="12" alt="PREPARATION">ご用意いただくもの</h3>
				<div class="leasep212ccol2cont">
					<div class="leasep212ccol2">
						<h4 class="leasep212csttl">法人契約の場合</h4>
						<div class="leasep212csdesc">
							<p>当社所定の会社概況に必要事項をご記入いただきます。<br>
								契約締結時に連帯保証人が必要となる場合がございます。</p>
						</div>
					</div>
					<div class="leasep212ccol2">
						<h4 class="leasep212csttl">個人契約の場合</h4>
						<div class="leasep212csdesc">
							<p>当社所定の個人リース申込書に必要事項をご記入いただきます。<br>
								契約締結時に契約者ご本人の実印と印鑑証明書、および連帯保証人の実印と印鑑証明書が必要となります。<br>
								連帯保証人は、有職者で当社の指定する範囲内にお住まいの方に限られます。</p>
						</div>
					</div>
				</div>
			</div>
			<div class="leasep212c">
				<h3 class="leasep212cttl"><img src="/images/leasep3_2.svg" width="188" height="12" alt="LEASE PRODUCTS">リース商品</h3>
				<div class="leasep212ccol2cont">
					<div class="leasep212ccol2">
						<h4 class="leasep212csttl">リース対象</h4>
						<div class="leasep212csdesc">
							<p>リースの対象となる商品は原則として、下記の通りです。</p>
							<ol>
							<li>一般家庭用家具</li>
							<li>ガーデンファニチャー</li>
							<li>カーテン</li>
							<li>一般家庭用照明</li>
							<li>家電</li>
							<li>寝装寝具類</li>
							<li>台所用品</li>
							<li>額絵</li>
							<li>生グリーン</li>
							<li>インテリア小物</li>
							</ol>
							<p class="leasep212csdescnote">「6・7」については当社オリジナル商品となります。</p>
							<p class="leasep212csdescnote">「9・10」については後述のモデルリースのみとなります。</p>
						</div>
					</div>
					<div class="leasep212ccol2">
						<h4 class="leasep212csttl">リース対象外</h4>
						<div class="leasep212csdesc">
							<p>リース対象外の商品は下記の通りです。</p>
							<ol>
							<li>左記に属さない商品</li>
							<li>当社にてリース不適当と判断する商品</li>
							</ol>
							<p>連帯保証人は、有職者で当社の指定する範囲内にお住まいの方に限られます。</p>
						</div>
					</div>
				</div>
			</div>
			<div class="leasep212c">
				<h3 class="leasep212cttl"><img src="/images/leasep3_3.svg" width="101" height="12" alt="ADVANCE">契約時申受金</h3>
				<p>一般リース、モデルリースともに、お客様に契約時申受金をお支払いいただいた上でリース商品手配になります。契約時申受金は下記の項目で構成されます。</p>
				<div class="leasep212ccont">
					<h4>1. 搬出入手数料</h4>
					<div class="leasep212ctblwrap">
						<table id="leasep2121" class="leasep212ctbl">
						<tbody>
						<tr>
						<th>設置場所地域</th>
						<th>一般リース</th>
						<th>モデルリース</th>
						</tr>
						<tr>
						<td>東京23区内</td>
						<td>￥40,000</td>
						<td>￥70,000</td>
						</tr>
						<tr>
						<td>上記区域外関東地区</td>
						<td colspan="2">別途お見積</td>
						</tr>
						<tr>
						<td>移設業務（モデルリースのみ）</td>
						<td colspan="2">￥50,000～</td>
						</tr>
						</tbody>
						</table>
					</div>
					<p class="leasep212csdescnote">搬出入手教科とは初回搬入、契約終了時搬出各1回分の手数料となります。また、以下の場合には別途追加料金が必要となります。また、メーカー直送、設置場所立地条件によっても追加料金が発生することもありますので、ご了承ください。</p>
					<ul>
					<li>搬出入回数が複数回に及ぶ場合</li>
					<li>物量が多い場合</li>
					<li>メーカー配送料が発生する場合</li>
					<li>設置場所の立地条件及び諸条件（階段作業、吊り上げ・下げ作業など）による場合</li>
					</ul>
					<p class="leasep212csdescnote">搬出入日を変更する場合は、搬出入日の3営業日前（土日・祝日除く）までにご連絡ください。それ以降のご変更や、お客様のご都合により指定された搬出入日に実際の作業が出来なかった場合は、トラック再手配料として別途費用を申し受けます。</p>
					<p class="leasep212csdescnote">契約の途中での一部商品の引上げ・入れ替え・移設等の場合には別途配送費用を申し受けます。</p>
					<p class="leasep212csdescnote">契約終了後の販売をご希望された場合、搬出費のご返金はいたしません。</p>
					<p class="leasep212csdescnote">神奈川一部地域及び関東地区とは当社が規定する範囲です。</p>
				</div>
				<div class="leasep212ccont">
					<h4>2. 取付取外工事費</h4>
					<p>シーリングライト、エアコン等の取付、取外や、家具組立等にかかる費用は、お客様にご負担いただきます。見積内容によって変わりますので、詳しくはお尋ねください。</p>
				</div>
				<div class="leasep212ccont">
					<div class="leasep212ccol2">
						<h4>3. その他費用</h4>
						<p>上記 <strong>1. 2.</strong> に該当しないもので、本契約履行のために発生する費用は、お客様にご負担いただきます。モデルリース等で、当社コーディネーターがフルコーディネート（家具・照明・カーテン・グリーン・インテリア小物等）を行った場合は、右記コーディネートフィーを別途いただきます。なお、インテリア小物のみのコーディネートは行っておりません。</p>
					</div>
					<div class="leasep212ccol2">
						<table id="leasep2122" class="leasep212ctbl">
						<tbody>
						<tr>
						<th>コーディネート種別</th>
						<th>コーディネートフィー<br class="pc">（税抜き）</th>
						</tr>
						<tr>
						<td>1ルーム・1LDK</td>
						<td>￥50,000</td>
						</tr>
						<tr>
						<td>2LDK</td>
						<td>￥100,000</td>
						</tr>
						<tr>
						<td>3LDK</td>
						<td>￥150,000</td>
						</tr>
						<tr>
						<td>4LDK</td>
						<td>￥200,000</td>
						</tr>
						<tr>
						<td>戸建・その他間取り</td>
						<td>別途お見積</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>
				<div class="leasep212ccont">
					<h4>4. 保証金</h4>
					<p>リース契約期間に応じて、下記のとおりの保証金を申し受けます。なお、契約内容等によっては保証金の金額が変わる場合もあります。保証金は契約満了後、当社へのリース商品の返却完了と債務の完済を確認した後にお返しいたします。</p>
					<div class="leasep212ccol2">
						<table id="leasep2123" class="leasep212ctbl">
						<caption>一般リース</caption>
						<tbody>
						<tr>
						<th>契約期間<br class="sp">（月数）</th>
						<th>保証金</th>
						</tr>
						<tr>
						<td>1～12</td>
						<td>月額リース料の2ヶ月分</td>
						</tr>
						<tr>
						<td>18～24</td>
						<td>月額リース料の3ヶ月分</td>
						</tr>
						<tr>
						<td>30～36</td>
						<td>月額リース料の5ヶ月分</td>
						</tr>
						</tbody>
						</table>
					</div>
					<div class="leasep212ccol2">
						<table id="leasep2124" class="leasep212ctbl">
						<caption>モデルリース</caption>
						<tbody>
						<tr>
						<th>契約期間<br class="sp">（月数）</th>
						<th>保証金</th>
						</tr>
						<tr>
						<td>1</td>
						<td>不要</td>
						</tr>
						<tr>
						<td>3～6</td>
						<td>月額リース料の1ヶ月分</td>
						</tr>
						<tr>
						<td>12</td>
						<td>月額リース料の2ヶ月分</td>
						</tr>
						<tr>
						<td>18～36</td>
						<td>月額リース料の3ヶ月分</td>
						</tr>
						</tbody>
						</table>
					</div>
				</div>
				<div class="leasep212ccont">
					<h4>5. 初回リース料</h4>
					<p>初回リ一ス料として、月額リ－ス料のおよそ3ヶ月分を申し受けます。詳しくはお尋ね下さい。</p>
				</div>
			</div>
			<div class="leasep212c" id="leasep2125">
				<h3 class="leasep212cttl"><img src="/images/leasep3_4.svg" width="255" height="12" alt="CONTRACT EXPIRATION">契約満了時</h3>
				<p>契約満了時には、更新／契約終了／お買取をお客様のご希望によってお選びいただけます。</p>
				<div class="leasep212ccont">
					<h4>1. 更新</h4>
					<ul>
					<li>更新後のリース料率は、電話権利及び生グリーンを除き、上記「リース料率表」どおりに割引させていただきます。</li>
					<li>更新は1ヶ月単位で行うことができます。なお、更新後の解約は、長期リースの場合は希望日の1ヶ月前、短期リースの場合は2週間前までにお申出ください。</li>
					<li>当社より送付される期間満了通知確認書にて、期限までにご通知がない場合、自動的に契約が更新されます。</li>
					</ul>
				</div>
				<div class="leasep212ccont">
					<h4>2. 契約終了</h4>
					<ul>
					<li>満了日または解約日に当社が商品をお引取します。上記「契約時申受金」の1.の注意書きをお読みください。</li>
					</ul>
				</div>
				<div class="leasep212ccont">
					<h4>3. お買取</h4>
					<ul>
					<li>リース契約終了後、リース商品を特別価格でお買上げいただくことができます。販売料率は、上記「リース料率表」をご参照ください。</li>
					<li>販売価格の該当契約期間（月数）は、解約精算時の契約期間（月数）となります。</li>
					</ul>
				</div>
			</div>
			<div class="leasep212c">
				<h3 class="leasep212cttl"><span class="imgswap"><img src="/images/leasep3_5.svg" width="378" height="12" alt="CANCELLATION BEFORE MATURITY"><img src="/images/sp_leasep3_5.svg" width="403" height="66" alt="CANCELLATION BEFORE MATURITY"></span>中途解約</h3>
				<p>更新契約を除き、原則的に中途解約はできませんが、残存期間のリース料全額を違約金として支払うことにより、解約が認められます。なお、更新契約の解約につきましては、違約金はかかりません。</p>
			</div>
			<div class="leasep212c" id="leasep2126">
				<h3 class="leasep212cttl"><span class="imgswap"><img src="/images/leasep3_6.svg" width="260" height="15" alt="CORRUPTION / DAMEGE"><img src="/images/sp_leasep3_6.svg" width="280" height="70" alt="CORRUPTION / DAMEGE"></span>破損・ダメージなどに関して</h3>
				<div class="leasep212ccont">
					<h4>1. 故障してしまった</h4>
					<p>故障があったら、すぐにご連絡ください。<br>
						契約開始よリ4年が経過するまでは、当社にて修理の手配、または代替品をご用意致します。ただしお客様の過失による故障の場合は、別途費用をご請求いたします。</p>
				</div>
				<div class="leasep212ccont">
					<h4>2. リース物件を傷つけてしまった</h4>
					<p>リース中の多少の傷や自然の磨耗は日常使用によるものとして免責されます。<br>
						ただし、次の場合はダメージの対象となり、故意・過失を問わず、お客様の責任となります。</p>
					<ul>
					<li>椅子を壊したり、ソファの生地を破いてしまった</li>
					<li>タバコで商品に焦げ痕をつくってしまった</li>
					<li>らくがき、薬品、飲食物などでシミや汚れを作ってしまった</li>
					</ul>
					<p>これに相当するダメージは、お客様の責任となリダメージ料の請求対象となりますので、ご注意ください。</p>
				</div>
				<div class="leasep212ccont">
					<h4>3. 天災の場合</h4>
					<p>天災によリリース物件がその機能を果たさなくなった場合、お客様に損害の請求はありませんが、当社も代替等の商品供給は行いません。<br>
						当該商品のリースは終了となります。</p>
				</div>
			</div>
		</div>
	</div>
	<div class="popupcloser"></div>
</section>
*/
?>
<script src="/wp-content/themes/mays2020/assets/bodyScrollLock.min.js"></script>
<script>
(function($) {
	/**
	 * Popup
	 */
	function showPopup(e) {
		e.preventDefault();
		e.stopPropagation();

		var id = e.currentTarget.getAttribute('href'),
				popupSection = document.querySelector(id);
		
		document.documentElement.style.overflow = 'hidden';
		bodyScrollLock.disableBodyScroll(popupSection);
		$(popupSection).show();
		
	}
	function hidePopup(e) {
		e.preventDefault();
		e.stopPropagation();

		var popupSection = e.currentTarget.parentElement;
		
		document.documentElement.style.overflow = '';
		bodyScrollLock.enableBodyScroll(popupSection);
		$(popupSection).hide();
	}
	$('.popupbutton').click(showPopup);
	$('.popupcloser').click(hidePopup);
})(jQuery);
</script>
<?php get_footer(); ?>