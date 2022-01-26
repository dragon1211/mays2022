var form = {};
$(document).ready(function(){
  if (!issp) {
    am.mh = 400;
  } else {
    am.mh = 440;
  }
  
  /*初期表示*/
  $('.contact212').addClass('is-hide');
  
  /*クリックイベント*/
  $('#contact2111 .contactopt').each(function () {
    $(this).on('click', function () {
      var index = $('#contact2111 .contactopt').index(this);
      $('#contact2111 .contactopt').removeClass('sel');
      $(this).addClass('sel');
      $('.contact212').addClass('is-hide');
      $('.contact212').eq(index).removeClass('is-hide');
      
      $('body,html').animate({scrollTop:$('.contact212').offset().top - 100}, 400, 'swing');
      return false;
    });
  });
  
  /*gallery詳細の「相談する」から飛んだ場合*/
  var hash = location.hash; 
  if(hash == '#tab-01'){
    $('#tab-01').click();
  }
});