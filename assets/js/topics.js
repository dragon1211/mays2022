$(document).ready(function(){
	am.topicList();
	if (issp) {
		$('#topics1').height(107+$('#topics112').height()+$('#topics113').height());
		$('#topics11').height(320+$('#topics112').height()+$('#topics113').height());
		$('.topics2layout').not('.fill').find('.topics2img2').each(function(){
			if ($(this).parent().hasClass('topics2layout')) return true;
			var h = $(this).prev('.topics2img1').height();
			$(this).css({'padding-top':(h-$(this).height())+'px'});
		});
	}
});
