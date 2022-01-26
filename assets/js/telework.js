$(document).ready(function(){
  if (issp) {
    am.mh = 440;
  } else {
    am.mh = 400;
  }

  /*初期表示*/
  $('.p-telework__tabbox').hide();
  $('.p-telework__tabbox').eq(0).show();
  $('.p-telework__tablist li').eq(0).addClass('is-active');
  /*クリックイベント*/
  $('.p-telework__tablist li').each(function () {
    $(this).on('click', function () {
      var index = $('.p-telework__tablist li').index(this);
      $('.p-telework__tablist li').removeClass('is-active');
      $(this).addClass('is-active');
      $('.p-telework__tabbox').hide();
      $('.p-telework__tabbox').eq(index).show();
    });
  });
});