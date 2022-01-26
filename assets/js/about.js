var c1=0,c2=0,sx,sl=false,px1,px2,px3;
$(document).ready(function(){
	//init
	$('#about235').height($('.about235w').eq(c1).height());
	if (issp) setTimeout(function(){
		$('#about235').height($('.about235w').eq(c1).height());
	},1000);
	$('.about235w').css({'z-index':-1}).eq(c1).css({'z-index':2});
	$('.about235w .about235c').css({opacity:0,transform:'scale(0)'});
	$('.about235w:eq('+c1+') .about235c').css({opacity:1,transform:'scale(1)'});
	$('.about234c').eq(c1).addClass('sel');
	$('#about245').height($('.about245w').eq(c1).height())
	$('.about245w').css({'z-index':-1}).eq(c2).css({'z-index':2});
	$('.about245w .about245c').css({opacity:0,transform:'scale(0)'});
	$('.about245w:eq('+c2+') .about245c').removeAttr('style');//.css({opacity:1,transform:'scale(1)'});
	$('.about244c').eq(c2).addClass('sel');
	//op
	$('.about234c').click(function(){
		var n = $(this).index('.about234c');
		if (c1==n) return;
		$('.about234c').removeClass('sel').eq(n).addClass('sel');
		$('#about235').height(Math.max($('.about235w').eq(c1).height(),$('.about235w').eq(n).height()));
		$('.about235w:eq('+c1+') p').hide();
		$('.about235w:eq('+c1+') .about235c').animate({opacity:0},{duration:500,step:function(s){
			$(this).css({transform:'scale('+s+')'});
		}});
		$('.about235w:eq('+n+') .about235c').animate({opacity:1},{duration:500,step:function(s){
			$(this).css({transform:'scale('+s+')'});
		},complete:function(){
			c1 = n;
			$('.about235w').css({'z-index':-1}).eq(c1).css({'z-index':2}).find('p').show();
			$('#about235').height($('.about235w').eq(c1).height());
		}});
	});
	$('.about244c').click(function(){
		var n = $(this).index('.about244c');
		if (c2==n) return;
		$('.about244c').removeClass('sel').eq(n).addClass('sel');
		$('#about245').height(Math.max($('.about245w').eq(c2).height(),$('.about245w').eq(n).height()));
		$('.about245w:eq('+c2+') .about245c').animate({opacity:0},{duration:500,step:function(s){
			$(this).css({transform:'scale('+s+')'});
		}});
		$('.about245w:eq('+n+') .about245c').animate({opacity:1},{duration:500,step:function(s){
			$(this).css({transform:'scale('+s+')'});
		},complete:function(){
			c2 = n;
			$('.about245w').css({'z-index':-1}).eq(c2).css({'z-index':2});
			$('#about245').height($('.about245w').eq(c2).height());
		}});
	});
	$('.about245c').hover(function(){
		$(this).css({opacity:.7});
	},function(){
		$(this).css({opacity:1});
	});
	$('.catslider').on('mousedown',function(e){
		//_start(e.pageX,this);
	}).on('mousemove',function(e){
		//_move(e.pageX,this);
		if ($('body').hasClass('cantouch')) return;
		var pw=$(this).parent().width(),cw=$(this).width();
		if (pw>=cw) return;
		$(this).css({left:(e.clientX/pw)*(pw-cw)+'px'});
	}).on('mouseend',function(e){
		//_end(this);
	}).on('mouseleave',function(e){
		//_end(this);
	}).on('touchstart',function(e){
		_start(e.changedTouches[0].pageX,this);
	}).on('touchmove',function(e){
		_move(e.changedTouches[0].pageX,this);
	}).on('touchend',function(e){
		_end(this);
	}).on('touchcancel',function(e){
		_end(this);
	});
	if (issp) {
		am.mh = 440;
	} else {
		am.mh = 400;
	}
	if ($('body').hasClass('cannottouch')) $(window).resize(function(){
		$('.catslider').each(function(){
			var pw=$(this).parent().width(),cw=$(this).width();
			if (pw>=cw) $(this).css({left:'0px'});
		});
	});
});
function _start(x,t) {
	sl = true;
	sx = $(t).offset().left-x;
	px1 = x;
	px2 = x;
	px3 = x;
}
function _move(x,t) {
	if (!sl) return;
	var p = sx+x;
	if (p>0) p=0;
	else if (p<$(t).parent().width()-$(t).outerWidth()) p = $(t).parent().width()-$(t).outerWidth();
	$(t).stop().css({left:p+'px'})
	px3 = px2;
	px2 = px1;
	px1 = x;
}
function _end(t) {
	sl = false;
	var p = $(t).offset().left + (px1-px3)*5;
	if (p>0) p=0;
	else if (p<$(t).parent().width()-$(t).outerWidth()) p = $(t).parent().width()-$(t).outerWidth();
	$(t).animate({left:p+'px'},300,'easeOutQuad');
}
