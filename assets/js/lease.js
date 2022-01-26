$(document).ready(function(){
	if (issp) {
		am.mh = 440;
		map.setOptions({draggable:false});
	} else {
		am.mh = 400;
	}
});

$(function(){
  $('.lease-voice-slider').slick({
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2500,
	  slidesToShow: 2,
    slidesToScroll: 2,
    responsive: [
      {
        breakpoint: 641,
        settings: {
          dots: false,
		      slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });
});