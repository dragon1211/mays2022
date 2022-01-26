var map;
$(document).ready(function(){
	if (issp) {
		am.mh = 440;
		map.setOptions({draggable:false});
	} else {
		am.mh = 400;
	}
});

$(function(){
  $('.p-top__mv__slider').slick({
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2500,
    responsive: [
      {
        breakpoint: 640,
        settings: {
          dots: false,
        }
      }
    ]
  });
});

$(function(){
  $('.p-top__service__img img').hide();
  $('.p-top__service__img img').eq(0).show();
  $('.p-top__service__list').eq(0).addClass('is-active');
  /*クリックイベント*/
  $('.p-top__service__list').each(function(){
    $(this).mouseenter(function(){
      if(!$(this).hasClass('is-active')){
        var index = $('.p-top__service__list').index(this);
        $('.p-top__service__list').removeClass('is-active');
        $(this).addClass('is-active');
        $('.p-top__service__img img').fadeOut(300);
        $('.p-top__service__img img').eq(index).fadeIn(300);
      }
    });
  });
});

let slicktype = "";
const breakPoint = 640;
function slickPc(){
  $('.p-top__gallery__slider.is-pc').slick({
    rows: 2,
    slidesPerRow: 3,
    dots: true
  });
}
function slickSmt(){
  $('.p-top__gallery__slider.is-sp').slick({
    rows: 1,
    slidesPerRow: 1,
    dots: false,
    centerMode: true,
    centerPadding: '10%'
  });
}
$(function(){
  slickPc();
  slickSmt();
  const ua = navigator.userAgent;
  if( window.innerWidth <= breakPoint || ua.indexOf('iPhone') > -1 || ua.indexOf('Android') > -1 || ua.indexOf('Mobile') > -1 || ua.indexOf('iPad') > -1){
    $('.p-top__gallery__slider.is-pc').hide();
  } else {
    $('.p-top__gallery__slider.is-sp').hide();
  }
  $(window).on('resize',function(){
    if( window.innerWidth <= breakPoint){
      $('.p-top__gallery__slider.is-pc').hide();
      $('.p-top__gallery__slider.is-sp').show();
    } else {
      $('.p-top__gallery__slider.is-sp').hide();
      $('.p-top__gallery__slider.is-pc').show();
    }
  });
});



function initMap() {
	var ll = {
			lat: 35.666984380197555,
			lng: 139.7464317152585
		};
	map = new google.maps.Map(document.getElementById('is-map'),{
		center:ll,
		zoom: 16,
		scrollwheel: false
	});
	new google.maps.Marker({
		position:ll,
		map: map,
		icon: {
			url:'/images/showroom3.png',
			size: new google.maps.Size(84,64),
			origin: new google.maps.Point(0,0),
			anchor: new google.maps.Point(40,60)
		}
	});
	if (issp) {
		map.setOptions({draggable:false});
	}
}
