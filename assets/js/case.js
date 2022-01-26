var ind=0,all,unit,sx,sy,stime,tx,sl=false,px1,px2,px3;
$(document).ready(function(){
	if (issp) {
		am.mh = 440;
		unit = '640px';
	} else {
		am.mh = 400;
		unit = '750px';
	}
  /*
	if ($('#case22').length) {
		if (issp) {
			$('#case223').height(parseInt($('.case22w .case223c').length/2+0.5)*222);
		} else {
			$('#case223').height(parseInt($('.case22w .case223c').length/4+0.75)*185);
		}
		$('.case22w').removeClass('van');
		$('#case2221 a:first-child').addClass('sel');
		$(document).on('click','#case2221 a,#case224 a',function(){
			if ($(this).index('#case2221 a')!=-1) {
				$('#case2221 a').removeClass('sel');
				$(this).addClass('sel');
			}
			$.get($(this).attr('href'),function(data){
				$('#case224').html($(data).find('#case224').html());
				var h = $(data).find('.case22w').addClass('van').appendTo('#case223').height();
				$('#case223').height(h);
				$('.case22w').addClass('van').last().removeClass('van');
				setTimeout(function(){
					$('.case22w.van').remove();
					if (issp) {
						$('#case223').height(parseInt($('.case22w .case223c').length/2+0.5)*222);
					} else {
						$('#case223').height(parseInt($('.case22w .case223c').length/4+0.75)*185);
					}
				},400);
			});
			return false;
		});
	}
    */
  /*
	if ($('#cased1').length) {
		all = $('#cased11 img').length;
		if (all) {
			if (all==1) {
				$('#cased12,#cased1l,#cased1r').remove();
			} else {
				$('#cased11 img').each(function(){
					$(this).wrap('<div class="img" />');
					$('#cased12').append('<span class="indic" />');
				});
				$('#cased12 .indic').eq(ind).addClass('sel');
				$('#cased11 .img').css({left:unit}).eq(ind).css({left:'0px'});
				$('#cased1l').click(slideRight);
				$('#cased1r').click(slideLeft);
				$('#cased12 .indic').click(function(){
					var n = $(this).index('#cased12 .indic');
					slideAny(n);
				});
				$('#cased11').on('touchstart',function(e){
					sx = e.originalEvent.touches[0].pageX;
					sy = e.originalEvent.touches[0].pageY;
					stime = (new Date()).getTime();
					sl = true;
				}).on('touchmove',function(e){
					if (sl) {
						tx = e.originalEvent.touches[0].pageX;
						if (Math.abs((e.originalEvent.touches[0].pageY-sy)/(tx-sx))>2) {
							sl=false;
						} else {
							e.preventDefault();
						}
					}
				}).on('touchend touchcancel',function(e){
					if (tx && sl && (new Date()).getTime()-stime<1000) {
						if (tx-sx>60) {
							slideRight();
						} else if (tx-sx<-60) {
							slideLeft();
						}
					}
				});
			}
		} else {
			$('#cased1').remove();
		}
	}
	if (issp) {
		$('#case2221').on('touchstart',function(e){
			_slstart(e.originalEvent.touches[0].pageX,this);
		}).on('touchmove',function(e){
			_slmove(e.originalEvent.touches[0].pageX,this);
		}).on('touchend',function(e){
			_slend(this);
		}).on('touchcancel',function(e){
			_slend(this);
		});
	}
        */
  $(function() {
    $('#cased11').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '#cased11_thumbnail' //サムネイルのクラス名
    });
    $('#cased11_thumbnail').slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '#cased11', //スライダー本体のクラス名
      focusOnSelect: true,
      prevArrow: '<div id="cased1l"></div>',
      nextArrow: '<div id="cased1r"></div>'
    });
  });
});
/*
function slideRight() {
	_start();
	$('#cased11 .img').eq(ind).animate({left:unit},300);
	ind = (ind-1+all) % all;
	$('#cased11 .img').eq(ind).css({left:'-'+unit}).animate({left:'0'},300,_end);
}
function slideLeft() {
	_start();
	$('#cased11 .img').eq(ind).animate({left:'-'+unit},300);
	ind = (ind+1) % all;
	$('#cased11 .img').eq(ind).css({left:unit}).animate({left:'0'},300,_end);
}
function slideAny(n) {
	if (n==ind) return;
	_start();
	$('#cased11 .img').eq(ind).animate({left:'-'+unit},300);
	ind = n;
	$('#cased11 .img').eq(ind).css({left:unit}).animate({left:'0'},300,_end);
}
function _start() {
	$('#cased1l,#cased1r').hide();
}
function _end() {
	if (!issp) $('#cased1l,#cased1r').show();
	$('#cased12 .indic').removeClass('sel').eq(ind).addClass('sel');
}
function _slstart(x,t) {
	sl = true;
	sx = $(t).offset().left-x;
	px1 = x;
	px2 = x;
	px3 = x;
}
function _slmove(x,t) {
	if (!sl) return;
	var p = sx+x;
	if (p>0) p=0;
	else if (p<$(t).parent().width()-$(t).outerWidth()) p = $(t).parent().width()-$(t).outerWidth();
	$(t).stop().css({left:p+'px'})
	px3 = px2;
	px2 = px1;
	px1 = x;
}
function _slend(t) {
	if (!sl) return;
	sl = false;
	var p = $(t).offset().left + (px1-px3)*5;
	if (p>0) p=0;
	else if (p<$(t).parent().width()-$(t).outerWidth()) p = $(t).parent().width()-$(t).outerWidth();
	$(t).animate({left:p+'px'},300,'easeOutQuad');
}
*/