var thread,slnum,slall,sltime=300,kyall,kynum=0,kyarr,sx,sy,tx,stime,sflag;
$(document).ready(function(){
	//key visual
	kyarr = $('#index0 div').hide().sort(function(){return Math.random()-.5});
	kyall = $('#index0 div').length;
	$(kyarr[kynum]).show();
	setInterval(function(){
		$(kyarr[kynum]).fadeOut(2000);
		kynum = (kynum+1) % kyall;
		$(kyarr[kynum]).fadeIn(2000);
	},7000);
	//slider
	var shuffle = $('.index43c').toArray();
	shuffle.sort(function() {return Math.random() - Math.random();});
	$('#index43').empty();
	for (var i=0;i<shuffle.length;i++) $('#index43').append(shuffle[i]);
	$('#index4').append('<div id="car"><div id="car1"></div><div id="car2"></div><div id="carl"></div><div id="carr"></div></div>');
	$('.index43c').each(function(i){
		$('.index43c1 img',this).wrap('<a'+($(this).attr('href') ? ' href="'+$(this).attr('href')+'"' : '')+' />');
		$('.index43c1',this).appendTo('#car1');
		$(this).appendTo('#car2');
	});
	slnum = 0;
	slall = $('.index43c').length;
	$('.index43c1').eq(0).css({left:0,'z-index':2});
	$('.index43c').eq(0).css({left:0});
	if (!issp) {
		am.mh = 600;
		$('#carl').click(slideRight);
		$('#carr').click(slideLeft);
		thread = setTimeout(slideLeft,5000);
		$('#car').hover(function(){
			clearTimeout(thread);
		},function(){
			thread = setTimeout(slideLeft,5000);
		});
		if (document.documentMode) {
			$('#index52 img').each(function(){
				var src = $(this).attr('src');
				$(this).data('hov',src);
				$(this).data('out',src.replace('.png','_g.png'));
				$(this).attr('src',$(this).data('out'));
				$(this).hover(function(){
					$(this).attr('src',$(this).data('hov'));
				},function(){
					$(this).attr('src',$(this).data('out'));
				});
			});
		}
	} else {
		am.mh = 530;
		//$('#carl').click(slideRightSP);
		//$('#carr').click(slideLeftSP);
		$('#car').on('touchstart',function(e){
			sx = e.originalEvent.touches[0].pageX;
			sy = e.originalEvent.touches[0].pageY;
			stime = (new Date()).getTime();
			sflag = true;
		}).on('touchmove',function(e){
			if (sflag) {
				tx = e.originalEvent.touches[0].pageX;
				if (Math.abs((e.originalEvent.touches[0].pageY-sy)/(tx-sx))>2) {
					sflag=false;
				} else {
					e.preventDefault();
				}
			}
		}).on('touchend touchcancel',function(e){
			if (tx && sflag && (new Date()).getTime()-stime<1000) {
				if (tx-sx>60) {
					slideRightSP();
				} else if (tx-sx<-60) {
					slideLeftSP();
				}
			}
			sflag = false;
			tx=null;
		});
		thread = setTimeout(slideLeftSP,5000);
	}
	am.topicList();
});
function slideLeft() {
	startSlide();
	var pn = slnum,t = $('.index43c1').eq(pn);
	slnum = (slnum+1) % slall;
	var n = $('.index43c1').eq(slnum);
	n.css({left:'870px','z-index':2});
	t.css({'z-index':1}).animate({left:'-870px'},{duration:sltime,step:function(s){
		n.css({left:(870+s)+'px'});//.animate({left:'0px'},sltime);
	},complete:finishSlide});
	$('.index43c').eq(pn).animate({left:'-700px'},sltime);
	$('.index43c').eq(slnum).css({left:'700px'}).animate({left:'0px'},sltime);
}
function slideRight() {
	startSlide();
	var pn = slnum,t = $('.index43c1').eq(pn);
	slnum = (slnum-1+slall) % slall;
	var n = $('.index43c1').eq(slnum);
	n.css({left:'-870px','z-index':2});
	t.css({'z-index':1}).animate({left:'870px'},{duration:sltime,step:function(s){
		n.css({left:(-870+s)+'px'});
	},complete:finishSlide});//.animate({left:'0px'},sltime);
	$('.index43c').eq(pn).animate({left:'700px'},sltime);
	$('.index43c').eq(slnum).css({left:'-700px'}).animate({left:'0px'},sltime);
}
function startSlide() {
	$('#car').addClass('sliding');
	clearTimeout(thread);
}
function finishSlide() {
	$('#car').removeClass('sliding');
	thread = setTimeout(slideLeft,5000);
}
function slideLeftSP() {
	startSlide();
	$('.index43c1').eq(slnum).css({'z-index':1}).animate({left:'-640px'},sltime);
	$('.index43c').eq(slnum).animate({left:'-640px'},sltime);
	slnum = (slnum+1) % slall;
	$('.index43c1').eq(slnum).css({left:'640px','z-index':2}).animate({left:'0px'},sltime,finishSlide);
	$('.index43c').eq(slnum).css({left:'640px'}).animate({left:'0px'},sltime);
}
function slideRightSP() {
	startSlide();
	$('.index43c1').eq(slnum).css({'z-index':1}).animate({left:'640px'},sltime);
	$('.index43c').eq(slnum).animate({left:'640px'},sltime);
	slnum = (slnum-1+slall) % slall;
	$('.index43c1').eq(slnum).css({left:'-640px','z-index':2}).animate({left:'0px'},sltime,finishSlide);
	$('.index43c').eq(slnum).css({left:'-640px'}).animate({left:'0px'},sltime);
}
