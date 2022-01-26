function AMY() {
	this.copyright = 'Ameya';
	this.mh = 843;// main visual height
	this.hh = 65;// header height
	this.topiccount = 0;
	this.currenttopic = 0;
}
AMY.prototype = {
	innerLink:function(opt){
		opt = $.extend({
			scrollspeed:500
		},opt);
		$('a[href^="#"]').click(function(){
			var hash = $(this).attr('href');
			$('html,body').animate({scrollTop:$(hash).offset().top},opt.scrollspeed);
			return false;
		});
		if (location.hash) $('html,body').animate({scrollTop:$(location.hash).offset().top},opt.scrollspeed);
	},
	scrollHeader:function(){
		$(window).scroll(function(){
			if ($(window).scrollTop()>am.mh) {
				$('header').addClass('scrolled');
				$('header').removeClass('scrolling');
			} else if ($(window).scrollTop()>am.hh) {
				$('header').addClass('scrolling');
				$('header').removeClass('scrolled');
			} else {
				$('header').removeClass('scrolling');
				$('header').removeClass('scrolled');
			}
		});
	},
	switchViewport:function(){
		var ua = navigator.userAgent,scrtop;
		if ((ua.indexOf('iPhone') > 0) || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)) {
			issp = true;
			$('head').prepend('<meta name="viewport" content="width=640" />');
		}else{
			$('head').prepend('<meta name="viewport" content="width=1024" />');
		}
	},
	topicList:function(){
		$('#topicslist').addClass('arrowout');
		this.topiccount = $('.topicslist1c').length;
		if (this.topiccount<(issp ? 2 : 5)) $('.topicslist1c').clone().appendTo('#topicslist1');
		var cs = $('.topicslist1c'),isanim=false,topicwidth = issp ? 640 : 320,topicmove = issp ? 2 : 5;
		$('#topicslist').append('<div id="topiclistl" /><div id="topiclistr" />');
		cs.hide().each(function(i){
			if (i<topicmove-1) $(this).css({left:(topicwidth*i)+'px'}).show();
		});
		var scroll = function(){
			var tl = $('#topicslist');
			if (tl.hasClass('arrownotime')) {
				$('#topiclistl').delay(300).animate({transform:'translateX(0px)'},300);
				$('#topiclistr').delay(300).animate({transform:'translateX(0px)'},300,function(){
					$('#topiclistl').removeAttr('style');
					$('#topiclistr').removeAttr('style');
					tl.removeClass('arrownotime');
				});
			}
			if (tl.position().top+353<$(window).scrollTop()+$(window).height()) {
				tl.removeClass('arrowout');
			} else {
				tl.addClass('arrowout');
			}
		};
		setTimeout(scroll,1000);
		$(window).scroll(scroll);
		if (!issp) {
			var resize = function(){
				var tl = $('#topicslist');
				if ($(window).width()<1260) {
					if (am.topiccount<4) {
						tl.addClass('noarrow');
					} else {
						tl.removeClass('noarrow');
					}
					if (!tl.hasClass('noarrow') && !tl.hasClass('col3')) {
						tl.addClass('arrownotime');
						$('#topiclistl').css({transform:'translateX(-100px)'});
						$('#topiclistr').css({transform:'translateX(100px)'});
						scroll();
					}
					tl.addClass('col3');
				} else {
					if (am.topiccount<5) {
						tl.addClass('noarrow');
					} else {
						tl.removeClass('noarrow');
					}
					if (!tl.hasClass('noarrow') && tl.hasClass('col3')) {
						$('#topiclistl').css({transform:'translateX(-100px)'});
						$('#topiclistr').css({transform:'translateX(100px)'});
						tl.addClass('arrownotime');
						scroll();
					}
					tl.removeClass('col3');
				}
			};
			resize();
			$(window).resize(resize);
		}
		$('#topiclistl').click(function(){
			if (isanim) return false;
			isanim = true;
			var cnt = cs.length;
			am.currenttopic = (am.currenttopic-1+cnt) % cnt;
			cs.eq(am.currenttopic).css({left:'-'+topicwidth+'px'}).show();
			for (var i=0;i<topicmove;i++) {
				cs.eq((am.currenttopic+i)%cnt).animate({left:(topicwidth*i)+'px'},300,function(){isanim=false;});
			}
			if (issp) $('#topiclistind span').removeClass('sel').eq(am.currenttopic).addClass('sel');
		});
		$('#topiclistr').click(function(){
			if (isanim) return false;
			isanim = true;
			var cnt = cs.length;
			cs.eq((am.currenttopic+topicmove-1)%cnt).css({left:(topicwidth*(topicmove-1))+'px'}).show();
			for (var i=0;i<topicmove;i++) {
				cs.eq((am.currenttopic+i)%cnt).animate({left:(topicwidth*(i-1))+'px'},300,function(){isanim=false;});
			}
			am.currenttopic = (am.currenttopic+1) % cnt;
			if (issp) $('#topiclistind span').removeClass('sel').eq(am.currenttopic).addClass('sel');
		});
		if (issp && this.topiccount>1) {
			$('#topicslist').append('<div id="topiclistind" />');
			var ind='';
			for (var i=0;i<this.topiccount;i++) ind += '<span />';
			$('#topiclistind').append(ind);
			$('#topiclistind span').eq(this.currenttopic).addClass('sel');
		}
	}
};

var issp = false,am = new AMY();
$(document).ready(function(){
	am.innerLink({});
	am.switchViewport();
	am.scrollHeader();
	if (issp) {
		$('header').append('<div id="header3"><span /><span /><span /></div>');
		$('#header3').click(function(){
			$('header').toggleClass('menu');
		});
		/*
		$('#header2 .parent>a').click(function(e){
			if (e.clientX<480) return true;
			$(this).parent().toggleClass('open');
			return false;
		});
		*/
		if ($('body').hasClass('eng')) {
			$('#header21>ul').prepend('<li><a href="/eng/">HOME</a></li>');
			$('#header21').append('<div id="header212"><a href="/eng/company/">About our company</a><a href="/eng/privacy/">Privacy policy</a><a href="https://www.facebook.com/Mays-Corporation-573261612825255/" target="_blank"><img src="/images/footer2.svg" width="109" height="14" alt="facebook" /></a></div>');
		} else {
			$('#header21>ul').prepend('<li><a href="/">HOME</a></li>');
			$('#header21').append('<div id="header212"><a href="/company/">会社概要</a><a href="/privacy/">プライバシーポリシー</a><a href="https://www.facebook.com/Mays-Corporation-573261612825255/" target="_blank"><img src="/images/footer2.svg" width="109" height="14" alt="facebook" /></a></div>');
		}
		this.hh = 86;
		$('#header21 ul li.parent ul li a').click(function(){
			var hash = $(this).attr('href').replace(/^.*(#.*)$/,'$1');
			$('html,body').animate({scrollTop:$(hash).offset().top-am.hh},500);
			$('header').toggleClass('menu');
			return false;
		});
		$(window).on('popstate',function(){
			$('header').removeClass('menu');
		});
	} else {
	}
	if (window.ontouchstart===null) {
		$('body').addClass('cantouch');
	} else {
		$('body').addClass('cannottouch');
	}
	$('.svg').each(function(){
		var cont = this;
		if ($(this).hasClass('imgswap') && issp) {
			$(this).load($('img',this).eq(1).attr('src')+' svg');
		} else {
			$(this).load($('img',this).attr('src')+' svg');
		}
	});
	$.extend($.easing,{
		easeOutQuad:function (x, t, b, c, d) {
			return -c *(t/=d)*(t-2) + b;
		}
	});
});
