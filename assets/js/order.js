	$('#cal').amycSetCalendar({tpldate:'<div>%di</div><dl />',eventview:function(pos,event,datestr,date){
		$(pos).find('dl').append('<dt>'+event[0]+'</dt><dd>'+event[1]+'</dd>')
	}}).amycSetEvent({'2013-03-01':['10:00','‚²”Ñ'],'2013-03-05':['12:00','‚²”Ñ']});
