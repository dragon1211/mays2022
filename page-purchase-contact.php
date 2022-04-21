<?php
switchLanguage();
get_header();
?>
<link rel="stylesheet" href="/css/purchase-contact.css" />
	<div class="page-header" style="background-image: url(/images/privacy/header.jpg)">
		<h1><i>Contact</i><strong>お問い合わせフォーム</strong></h1>
	</div><!-- .page-header -->
	<div id="privacy2">
		<section id="privacy21">
      <?php echo do_shortcode('[contact-form-7 id="3837" title="アイデアブックお問い合わせフォーム"]') ?>
      <div class="purchase-contact-confirm">
      <p class="username"><span>氏名：</span><span class="value"></span></p>
      <p class="address"><span>配送先住所：</span><span class="value"></span></p>
      <p class="phone"><span>電話番号：</span><span class="value"></span></p>
      <p class="your-email"><span>メールアドレス：</span><span class="value"></span></p>
      <p class="plan-date"><span>配送希望日：</span><span class="value"></span></p>
      <p class="lease-purchase"><span>リース・購入：</span><span class="value"></span></p>
      <p class="quiz"><span>ご要望・ご質問等：</span><span class="value"></span></p>
      <p class="products"><span>選択中商品：</span><span class="value"></span></p>
      <p class="consult"></p>

      <p class="btn-group"><button class="back">戻る</button><button class="submit">転送</button></p>
      </div>
    </section>
	</div>
  <script>
    var is_invalid = false;

    var POST_DATA = JSON.parse(localStorage.getItem('POST_DATA'));
    var products = '';

    for (let i in POST_DATA) {
      $('.d-flex .products').append('<div><img src="' + POST_DATA[i]['image'] + '" /><p>' + POST_DATA[i]['name']+'</p></div>');
      $('.purchase-contact-confirm .products .value').append('<div><img src="' + POST_DATA[i]['image'] + '" /><p>' + POST_DATA[i]['name']+'</p></div>');
      products += POST_DATA[i]['name'] + '　　';
    }
    
    $('.d-flex .products').parent().find('input').val(products);

    $(function(){
      $('.purchase-contact-confirm').hide();

      $('.wpcf7-form input[type="submit"]').click(function( event ) {
          event.preventDefault();

          if ( $('.wpcf7-form .username input').val() != '' &&
              $('.wpcf7-form .address input').val() != '' &&
              $('.wpcf7-form .phone input').val() != '' &&
              $('.wpcf7-form .your-email input').val() != '' &&
              $('.wpcf7-form .date-start1 input').val() != '' &&
              $('.wpcf7-form .lease-purchase select').val() != ''
           ) {
            $('.purchase-contact-confirm .username span.value').text($('.wpcf7-form .username input').val()); 
            $('.purchase-contact-confirm .address span.value').text($('.wpcf7-form .address input').val());
            $('.purchase-contact-confirm .phone span.value').text($('.wpcf7-form .phone input').val());
            $('.purchase-contact-confirm .your-email span.value').text($('.wpcf7-form .your-email input').val());

            var plan_date = '';

            plan_date += $('.wpcf7-form .date-start1 input').val() + '　' + $('.wpcf7-form .date-start-time1 select').val() + '<br/>';
            if ($('.wpcf7-form .date-start2 input').val() != '' && $('.wpcf7-form .date-start-time2 select').val() != '')
              plan_date += $('.wpcf7-form .date-start2 input').val() + '　' + $('.wpcf7-form .date-start-time2 select').val() + '<br/>';
            if ($('.wpcf7-form .date-start3 input').val() != '' && $('.wpcf7-form .date-start-time3 select').val() != '')
              plan_date += $('.wpcf7-form .date-start3 input').val() + '　' + $('.wpcf7-form .date-start-time3 select').val() + '<br/>';

            $('.purchase-contact-confirm .plan-date span.value').html(plan_date);

            $('.purchase-contact-confirm .lease-purchase span.value').text($('.wpcf7-form .lease-purchase select').val());
            $('.purchase-contact-confirm .quiz span.value').text($('.wpcf7-form .quiz textarea').val());

            // var temp = '' + $('.wpcf7-form .products select').val();
            // var arr = temp.split(',');
            // var products = '';
            // $.each( arr, function(index, value) {
            //   products += value + '<br/>';
            // });
          
            // $('.purchase-contact-confirm .products span.value').html(products);

            if ($('.wpcf7-form .consult input').is(':checked')) $('.purchase-contact-confirm .consult').text('インテリアコーディネーターへの相談を希望する');

            $('.wpcf7').hide();
            $('.purchase-contact-confirm').show();
          }
      });

      $('.purchase-contact-confirm .back').click(function(){
        $('.purchase-contact-confirm').hide();
        $('.wpcf7').show();
      });
      
      $('.purchase-contact-confirm .submit').click(function(){
        $('.wpcf7-form').submit();
      });
    });
  </script>
<?php get_footer(); ?>