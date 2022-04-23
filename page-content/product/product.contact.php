<section id="product-contact">
    <?php echo do_shortcode('[contact-form-7 id="4231"]') ?>
    <div class="purchase-contact-confirm">
      <p class="username"><span>氏名：</span><span class="value"></span></p>
      <p class="address"><span>配送先住所：</span><span class="value"></span></p>
      <p class="phone"><span>電話番号：</span><span class="value"></span></p>
      <p class="your-email"><span>メールアドレス：</span><span class="value"></span></p>
      <p class="plan-date"><span>配送希望日：</span><span class="value"></span></p>
      <p class="products"><span>選択中商品：</span><span class="value"></span></p>
  
      <p class="btn-group">
        <button class="back">戻る</button>
        <button class="submit">送信</button>
      </p>
    </div>
  </section>


  <script>
    const breakPoint = 768;
    function slickPc(){
      $('.product__list.p-slider.is-pc').slick({
        rows: 3,
        slidesPerRow: 3,
        dots: true
      });
    }
    function slickSmt(){
      $('.product__list.p-slider.is-sp').slick({
        rows: 3,
        slidesPerRow: 2,
        dots: true,
      });
    }

    $(function(){
      
      // -----------------  initail  slider  ------------------ //
      slickPc();
      slickSmt();
      const ua = navigator.userAgent;
      if( window.innerWidth <= breakPoint || ua.indexOf('iPhone') > -1 || ua.indexOf('Android') > -1 || ua.indexOf('Mobile') > -1 || ua.indexOf('iPad') > -1){
        $('.product__list.p-slider.is-pc').hide();
      } else {
        $('.product__list.p-slider.is-sp').hide();
      }
      $(window).on('resize',function(){
        if( window.innerWidth <= breakPoint){
          $('.product__list.p-slider.is-pc').hide();
          $('.product__list.p-slider.is-sp').show();
        } else {
          $('.product__list.p-slider.is-sp').hide();
          $('.product__list.p-slider.is-pc').show();
        }
      });
      //-----------------------------------------------------------//


      $('.purchase-contact-confirm').hide();
      
      $('.wpcf7-form input[type="submit"]').click(function(e) {
        e.preventDefault();
        
        var products = '';
        let count = 0;
        $('.purchase-contact-confirm .products .value').empty();
        var chboxes = $('.slick-slide:not(.slick-cloned) .product__item input[type="checkbox"]');

        for(let i in chboxes){
          if(chboxes[i].checked){
            count ++;
            let url = $('.product__item#item'+ i + ' .product__image .img').css('background-image');
            let name = $('.product__item#item'+ i + ' .product__desp .name').html();
            url = url.replace('url(','').replace(')','').replace(/\"/gi, "");

            $('.purchase-contact-confirm .products .value').append('<div><img src="' + url + '" /><p>' + name +'</p></div>');
            products += `${name} \n`;
          }
        }

        if(count == 0){
          alert("選択した商品はありません。");
          return;
        } else {
          $('.d-flex .products').parent().find('input').val(products);
        }


        // Form validation

          if ( 
            $('.wpcf7-form .username input').val() != '' &&
            $('.wpcf7-form .address input').val() != '' &&
            $('.wpcf7-form .phone input').val() != '' &&
            $('.wpcf7-form .your-email input').val() != '' &&
            $('.wpcf7-form .date-start1 input').val() != ''
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


            $('.wpcf7').hide();
            $('#product').hide();
            $('.purchase-contact-confirm').show();
          } 
          else {
            alert("必須項目を入力してください。");
            return;
          }
      });

      $('.purchase-contact-confirm .back').click(function(){
        $('.purchase-contact-confirm').hide();
        $('.wpcf7').show();
        $('#product').show();
      });
      
      $('.purchase-contact-confirm .submit').click(function(){
        $('.wpcf7-form').submit();
      });
    });
  </script>