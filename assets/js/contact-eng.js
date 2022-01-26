var form = {};
$(document).ready(function(){
	if (!issp) {
		am.mh = 400;
	} else {
		am.mh = 440;
	}
	$(document).on('click','.contactcheck svg',confirmForm);
	$('#contact2231').click(returnForm);
	$('#contact2232').click(send);
	$('#contactform').submit(checkForm);
	$('.contactopt').click(function(){
		if (form[$(this).data('name')] && $(this).data('val')!=form[$(this).data('name')]['option'] && hasInput($(this).data('name'),$(this).data('val')) && !confirm('Do you accept that this change will reset the information you have entered so far?')) return false;
		$(this).parent('').find('.contactopt').removeClass('sel');
		$(this).addClass('sel');
		if (!form[$(this).data('name')]) form[$(this).data('name')] = {};
		form[$(this).data('name')]['option'] = $(this).data('val');
		doCmd($(this).data('cmd'));
	});
	$(document).on('click','.contactnext svg',function(){
		if (!checkInput($(this).parent().data('cmd'))) return false;
		doCmd($(this).parent().data('cmd'));
	});
	//way
	$('#way1').change(changePeriod);
	//plan(coordinate)
	if (issp) {
		$('.contact213232c').each(function(i){
			$('.contact213231c').eq(i).after(this);
		});
		$('.contact213231c').click(function(){
			$(this).toggleClass('sel');
		});
	} else {
		$('.contact213231c').click(function(){
			$('.contact213231c').removeClass('sel');
			$(this).addClass('sel');
			var n = $(this).index('.contact213231c');
			$('.contact213232c').hide().eq(n).show();
		});
	}
	$('.contact213232c11c2').each(function(){
		$(this).append('<span class="contact213232c11c2minus">-</span><span class="contact213232c11c2plus">+</span>');
	});
	$('.contact213232c11c2minus').click(function(){
		var n = parseInt($(this).parent().find('span:first-child').text());
		n--;
		if (n<0) n=0;
		$(this).parent().find('span:first-child').text(n);
		var pn = $(this).parents('.contact213232c').index('.contact213232c');
		calcSum(pn);
		setCoordinate();
	});
	$('.contact213232c11c2plus').click(function(){
		var n = parseInt($(this).parent().find('span:first-child').text());
		n++;
		$(this).parent().find('span:first-child').text(n);
		var pn = $(this).parents('.contact213232c').index('.contact213232c');
		calcSum(pn);
		setCoordinate();
	});
	$('#contact213232 textarea').change(setCoordinate);
	//plan(package)
	$('.contact213331c').click(function(){
		$('.contact213331c').removeClass('sel');
		$(this).addClass('sel');
		form['plan']['package'] = $('.contact213331c11',this).text();
		form['plan']['package_el'] = this;
	});
	$('.contact2133322c').click(function(){
		$(this).toggleClass('sel');
		if (!form['plan']['packageoption']) form['plan']['packageoption'] = {};
		if (form['plan']['packageoption'][$('.contact2133322c11',this).text()]) {
			delete form['plan']['packageoption'][$('.contact2133322c11',this).text()];
		} else {
			form['plan']['packageoption'][$('.contact2133322c11',this).text()] = this;
		}
	});
	//time
	limit = (new Date().getTime())+604800000;
	$('#contact214222').amycSetCalendar({monthformat:'%Y/%mi',prev:'',next:'',dayname:'enShort',eventview:function(pos,event,datestr,date){
		$(pos).removeClass('past');
		if (date.getTime()<limit) $(pos).addClass('past');
	},noeventview:function(pos,datestr,date){
		$(pos).removeClass('past');
		if (date.getTime()<limit) $(pos).addClass('past');
	},eventclick:clickDay,noeventclick:clickDay});
	//you
	$('#contact2152 input,#contact2152 select,#contact2152 textarea,#contact2153 input,#contact2153 select,#contact2153 textarea').change(function(){
		form['you'][$(this).attr('id')] = $(this).val();
	});
	$('#contact215221 #tel,#contact215321 #tel').change(function(){
		$(this).next('.caution').remove();
		if ($(this).val() && $(this).val().match(/[^0-9\-\+\(\) ]/)) {
			$(this).after('<div class="caution">Please enter the phone number using half-width numbers and half-size symbols.</div>');
		}
	});
	$('#contact215221 #email,#contact215321 #email').change(function(){
		$(this).next('.caution').remove();
		if ($(this).val() && !$(this).val().match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)) {
			$(this).after('<div class="caution">The format of the email address is invalid.</div>');
		}
	});
	//trigger
	$('#contact2161 input[type="radio"]').click(function(){
		if (!form['trigger']) form['trigger'] = {};
		form['trigger']['option'] = $('#contact2161 input[type="radio"]:checked').val();
		if ($('#contact2161 input[type="radio"]:checked').data('desc')) {
			form['trigger']['desc'] = $('#'+$('#contact2161 input[type="radio"]:checked').data('desc')).val();
		} else {
			form['trigger']['desc'] = '';
		}
	});
	$('#contact2161 input[type="text"]').change(function(){
		if ($('#contact2161 input[type="radio"]:checked').data('desc')) {
			form['trigger']['desc'] = $('#'+$('#contact2161 input[type="radio"]:checked').data('desc')).val();
		} else {
			form['trigger']['desc'] = '';
		}
	});
});
function doCmd(cmd) {
	switch (cmd) {
		case 'vs21':
			$('#contact215 .contactttl img').show().eq(1).hide();
			$('#contact216 .contactttl img').show().eq(1).hide();
			$('#contact212').show();
			$('#contact215').hide();
			$('#contact216').hide();
			toAnchor('#contact212');
			break;
		case 'vs22':
		case 'vs23':
			initInput('way');
			initInput('plan');
			initInput('time');
			$('#contact215 .contactttl img').show().eq(0).hide();
			$('#contact216 .contactttl img').show().eq(0).hide();
			$('#contact212').hide();
			$('#contact213').hide();
			$('#contact214').hide();
			$('#contact215').show();
			toAnchor('#contact215');
			break;
		case 'vb21':
			$('#contact21221').show();
			$('#contact2122').show();
			$('.selectarea').html($('#arealease').html());
			break;
		case 'vs31':
			checkPackage();
			$('#contact213').show();
			toAnchor('#contact213');
			break;
		case 'vs32':
			$('#contact2131 .contactopt').show();
			$('#contact2131 .contactopt').eq(1).removeClass('sel').hide();
			$('#contact2132').addClass('sel312');
			if (form['plan']) {
				delete form['plan']['package'];
				delete form['plan']['package_el'];
				delete form['plan']['packageoption'];
			}
			$('#contact2133').hide();

			$('#way1')[0].selectedIndex=0;
			delete form['way']['way1'];
			$('#contact2122').hide();

			$('.selectarea').html($('#areanolease').html());

			$('#contact213').show();
			toAnchor('#contact213');
			break;
		case 'vs33':
			$('#contact2131 .contactopt').show();
			$('#contact2132').removeClass('sel312');

			$('#way1')[0].selectedIndex=0;
			delete form['way']['way1'];
			$('#contact2122').hide();
			$('#contact21333').removeClass('m1 m3 m6 m9').addClass('mn');

			$('.selectarea').html($('#areanolease').html());

			$('#contact213').show();
			toAnchor('#contact213');
			break;
		case 'vb31':
			$('#contact2132').show();
			$('#contact2133').hide();
			resetCoord();
			break;
		case 'vb32':
			$('#contact2132').hide();
			$('#contact2133').show();
			resetPackage();
			adjustSelectButton();
			break;
		case 'vs41':
			$('#contact2132').show();
			$('#contact2133').hide();
			$('#contact214').show();
			toAnchor('#contact214');
			break;
		case 'vs42':
			$('#contact2132').hide();
			$('#contact2133').show();
			$('#contact214').show();
			toAnchor('#contact214');
			break;
		case 'vs43':
			$('#contact2132').hide();
			$('#contact2133').hide();
			resetCoord();
			resetPackage();
			$('#contact214').show();
			toAnchor('#contact214');
			break;
		case 'vb41':
			$('#contact2142').show();
			break;
		case 'vs51':
			$('#contact215').show();
			toAnchor('#contact215');
			break;
		case 'vs52':
			$('#contact2142').hide();
			$('#contact215').show();
			toAnchor('#contact215');
			break;
		case 'vb51':
			resetYou();
			$('#contact2152').show();
			$('#contact2153').hide();
			break;
		case 'vb52':
			resetYou();
			$('#contact2152').hide();
			$('#contact2153').show();
			break;
		case 'vs61':
			$('#contact216').show();
			toAnchor('#contact216');
			break;
		case 'vs62':
			$('#contact216').show();
			toAnchor('#contact216');
			break;
	}
}
// return true, if it conflicts
function hasInput(n,v) {
	switch (n) {
		case 'type':
			if (form['way']) return true;
			if (form['plan']) return true;
			break;
		case 'way':
			if (form['plan'] && form['plan']['option']=='Package plan') {
				if (v=='Purchase') return true;
				if (v=='Lease' && (form['way']['way1']=='12 months' || form['way']['way1']=='18 months' || form['way']['way1']=='24 months' || form['way']['way1']=='30 months' || form['way']['way1']=='36 months')) return true;
			}
			break;
		case 'plan':
			if (form['plan']['option']=='Coordinate plan' && form['plan']['coord']) return true;
			if (form['plan']['option']=='Package plan' && (form['plan']['package'] || form['plan']['package_el'] || form['plan']['packageoption'])) return true;
			break;
		case 'you':
			if (form['you']['option']=='For Companies' && (form['you']['company'] || form['you']['name'] || form['you']['email'] || form['you']['tel'] || form['you']['area'] || form['you']['user'] || form['you']['coord'] || form['you']['desc'])) return true;
			if (form['you']['option']=='For Individuals' && (form['you']['name'] || form['you']['email'] || form['you']['tel'] || form['you']['area'] || form['you']['coord'] || form['you']['desc'])) return true;
			break;
	}
	return false;
}
// check a part of form
function checkInput(cmd) {
	var cautions = [];
	switch (cmd) {
		case 'vs31':
			if (!form['way']['way1']) {
				alert('Please choose the period for which you wish to use.');
				return false;
			}
			break;
		case 'vs41':
			var sum = 0;
			$('.contact213232c11c2 span:first-child').each(function(){
				sum += parseInt($(this).text());
			});
			if (sum<1) {
				alert('No item has been selected. Please select at least one item.');
				return false;
			}
			break;
		case 'vs42':
			if (!form['plan']['package']) {
				alert('No package has been selected. Please select the package you require.');
				return false;
			}
			break;
		case 'vs51':
			if (!form['time']['calendar'] || !Object.keys(form['time']['calendar']).length) {
				alert('Please select when you require this.');
				return false;
			}
			break;
		case 'vs61':
			if (!form['you']['company']) {
				cautions.push('Please enter company name.');
			}
			if (!form['you']['name']) {
				cautions.push('Please enter contact person.');
			}
			if (!form['you']['email']) {
				cautions.push('Please enter email address.');
			} else if (!form['you']['email'].match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)) {
				cautions.push('The format of the email address is invalid.');
			}
			if (form['you']['tel'] && form['you']['tel'].match(/[^0-9\-\+\(\) ]/)) {
				cautions.push('Please enter the phone number using half-width numbers and half-size symbols.');
			}
			if (!form['you']['area']) {
				cautions.push('Please enter area of the furniture delivery.');
			}
			if (cautions.length) {
				alert(cautions.join('\n'));
				return false;
			}
			break;
		case 'vs62':
			if (!form['you']['name']) {
				cautions.push('Please enter name.');
			}
			if (!form['you']['email']) {
				cautions.push('Please enter email address.');
			} else if (!form['you']['email'].match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)) {
				cautions.push('The format of the email address is invalid.');
			}
			if (form['you']['tel'] && form['you']['tel'].match(/[^0-9\-\+\(\) ]/)) {
				cautions.push('Please enter the phone number using half-width numbers and half-size symbols.');
			}
			if (!form['you']['area']) {
				cautions.push('Please enter area of the furniture delivery.');
			}
			if (cautions.length) {
				alert(cautions.join('\n'));
				return false;
			}
			break;
	}
	return true;
}
//reset a part of form and data
function initInput(n) {
	switch (n) {
		case 'way':
			delete form['way'];
			$('#contact2121 .contactopt').remove('sel');
			$('#contact2122').hide();
			$('#way1')[0].selectedIndex=0;
			break;
		case 'plan':
			delete form['plan'];
			$('#contact2131 .contactopt').remove('sel');
			$('#contact2132,#contact2133').hide();
			$('.contact213231c').removeClass('sel');
			$('.contact213231c21').text('0');
			$('.contact213232c').hide();
			$('#contact213232c11c2 span:first-child').text('0');
			$('.contact213331c,.contact2133322c').removeClass('sel');
			break;
		case 'time':
			delete form['time'];
			$('#contact2141 .contactopt').remove('sel');
			$('#contact2142').hide();
			$('#contact214222').amycSetEvent({});
			$('#contact214222 td').removeClass('amycevent');
			break;
	}
}
function checkForm() {
	if ($('#contact215 .caution').length) return false;
	return true;
}
function confirmForm() {
	if (!checkForm()) {
		alert('There is an error with the information you have entered.');
		return false;
	}
	form['mail'] = {};
	if (form['you']['option']=='For Companies') {
		$('#contact2221 .hojin').show();
		$('#contact2221 .kojin').hide();
		$('#c_company').text(form['you']['company']);
		$('#c_user').text((form['you']['user'] ? form['you']['user'] : '---'));
		form['mail']['you'] = '[Company name] '+form['you']['company']+'\n';
		form['mail']['you'] += '[Contact person] '+form['you']['name']+'\n';
		form['mail']['you'] += '[Email address] '+form['you']['email']+'\n';
		form['mail']['you'] += '[Telephone number] '+(form['you']['tel'] ? form['you']['tel'] : '---')+'\n';
		form['mail']['you'] += '[Area of the furniture delivery] '+form['you']['area']+'\n';
		form['mail']['you'] += '[The person who will use the furniture] '+(form['you']['user'] ? form['you']['user'] : '---')+'\n';
		form['mail']['you'] += '[Your coordinator] '+(form['you']['coord'] ? form['you']['coord'] : '---')+'\n';
		form['mail']['you'] += '[Other requests]\n'+(form['you']['desc'] ? form['you']['desc'] : '---');
	} else {
		$('#contact2221 .hojin').hide();
		$('#contact2221 .kojin').show();
		form['mail']['you'] = '[Name] '+form['you']['name']+'\n';
		form['mail']['you'] += '[Email address] '+form['you']['email']+'\n';
		form['mail']['you'] += '[Telephone number] '+(form['you']['tel'] ? form['you']['tel'] : '---')+'\n';
		form['mail']['you'] += '[Area of the furniture delivery] '+form['you']['area']+'\n';
		form['mail']['you'] += '[Your coordinator] '+(form['you']['coord'] ? form['you']['coord'] : '---')+'\n';
		form['mail']['you'] += '[Other requests]\n'+(form['you']['desc'] ? form['you']['desc'] : '---');
	}
	$('#c_type').text(form['type']['option']);
	if (form['way']) {
		if (form['way']['way1']) {
			$('#c_way').text(form['way']['option']+' '+form['way']['way1']);
			form['mail']['way'] = form['way']['option']+'('+form['way']['way1']+')';
		} else {
			$('#c_way').text(form['way']['option']);
			form['mail']['way'] = form['way']['option'];
		}
	} else {
		$('#c_way').text('');
		form['mail']['way'] = '';
	}
	if (form['plan']) {
		$('#c_plan').text(form['plan']['option']);
		form['mail']['plan'] = '';
		if (form['plan']['coord']) {
/*
			var str1 = '';
			for (var k in form['plan']['coord']) {
				if (k.match(/plan1\detc/)) continue;
				if (!form['plan']['coord'][k] || !parseInt(form['plan']['coord'][k])) continue;
				str1 += '<div class="contact22211c"><div class="contact22211c1">'+k+'</div><div class="contact22211c2">'+form['plan']['coord'][k]+'</div></div>';
			}
			$('#contact22211').empty().append(str1);
*/
			$('#contact22211').empty();
			$('#contact22212').empty();
			$('.contact213231c').each(function(i){
				if (!parseInt($('.contact213231c21',this).text()) && form['plan']['coord']['plan1'+(i+1)+'etc']=='') return true;
				var cdstr = '<div class="contact22211set">';
				cdstr += '<div class="contact22211set1">'+$('.contact213231c12',this).text()+'</div><div class="contact22211set2">';
				form['mail']['plan'] += '<'+$('.contact213231c12',this).text()+'>\n';
				var items = [];
				$('.contact213232c').eq(i).find('.contact213232c11c').each(function(){
					if (parseInt($('.contact213232c11c2 span:first-child',this).text())>0) {
						items.push($('.contact213232c11c1',this).text()+' '+$('.contact213232c11c2 span:first-child',this).text());
						cdstr += '<div class="contact22211c"><div class="contact22211c1">'+$('.contact213232c11c1',this).text()+'</div><div class="contact22211c2">'+$('.contact213232c11c2 span:first-child',this).text()+'</div></div>';
					}
				});
				form['mail']['plan'] += items.join(' / ')+'\n';
				if (form['plan']['coord']['plan1'+(i+1)+'etc']) {
					form['mail']['plan'] += '\n'+form['plan']['coord']['plan1'+(i+1)+'etc']+'\n';
					cdstr += '<div class="contact22211etc">'+form['plan']['coord']['plan1'+(i+1)+'etc']+'</div>';
				}
				cdstr += '</div></div>';
				$('#contact22211').append(cdstr);
			});
		}
		if (form['plan']['package']) {
			var vt=$('.contact213331c12>span:visible',form['plan']['package_el']).text(),str2 = '<div class="contact22212c"><div class="contact22212c1">'+form['plan']['package']+'</div><div class="contact22212c2">'+vt+'</div></div>';
			form['mail']['plan'] += form['plan']['package']+' '+vt+'\n';
			for (var k in form['plan']['packageoption']) {
				var v = $('.contact2133322c12>span:visible',form['plan']['packageoption'][k]).text();
				str2 += '<div class="contact22212c"><div class="contact22212c1">'+k+'</div><div class="contact22212c2">'+v+'</div></div>';
				form['mail']['plan'] += k+' '+v+'\n';
			}
			$('#contact22212').empty().append(str2);
			$('#contact22211').empty();
		}
	} else {
		form['mail']['plan'] = '';
		$('#c_plan').text('');
		$('#contact22211').empty();
		$('#contact22212').empty();
	}
	if (form['time'] && form['time']['calendar'] && Object.keys(form['time']['calendar'])) {
		$('#c_time').text(Object.keys(form['time']['calendar']).join(', '));
		form['mail']['time'] = Object.keys(form['time']['calendar']).join('、');
	} else {
		$('#c_time').text('');
		form['mail']['time'] = '';
	}
	if (form['type']['option']=='Interior plan and quote') {
		$('#contact2221 tr').slice(1,4).show();
	} else {
		$('#contact2221 tr').slice(1,4).hide();
	}
	$('#c_name').text(form['you']['name']);
	$('#c_email').text(form['you']['email']);
	$('#c_tel').text((form['you']['tel'] ? form['you']['tel'] : '---'));
	$('#c_area').text(form['you']['area']);
	$('#c_coord').text((form['you']['coord'] ? form['you']['coord'] : '---'));
	$('#c_desc').html((form['you']['desc'] ? form['you']['desc'].replace(/</g,'&lt;').replace(/\n/g,'<br />') : '---'));
	$('#contact21').hide();
	$('#contact22').show();
	toAnchor('#contact22');
	if (form['trigger']) {
		form['mail']['trigger'] = form['trigger']['option']+(form['trigger']['desc'] ? '('+form['trigger']['desc']+')' : '');
	}
	$('#forms').val(JSON.stringify(form));
}
function toAnchor(anc) {
	$('html,body').animate({scrollTop:$(anc).offset().top-am.hh-(issp ? 290 : 170)},500);
}
function returnForm() {
	$('#contact22').hide();
	$('#contact21').show();
	toAnchor('#contact21');
}
function send() {
	$('#contactform').submit();
}
//way
function changePeriod() {
	form['way']['way1'] = $(this).val();
	switch (form['way']['way1']) {
		case '1 month':
			$('#contact21333').removeClass('m3 m6 m9 mn').addClass('m1');
			break;
		case '3 months':
			$('#contact21333').removeClass('m1 m6 m9 mn').addClass('m3');
			break;
		case '6 months':
			$('#contact21333').removeClass('m1 m3 m9 mn').addClass('m6');
			break;
		case '9 months':
			$('#contact21333').removeClass('m1 m3 m6 mn').addClass('m9');
			break;
		case 'その他':
			$('#contact21333').removeClass('m1 m3 m6 m9').addClass('mn');
			break;
		default:
			$('#contact21333').removeClass('m1 m3 m6 m9 mn');
			break;
	}
	checkPackage();
	adjustSelectButton();
}
function adjustSelectButton() {
	$('.contact2133322c').each(function(){
		$('.contact2133322c2',this).removeAttr('style');
		$('.contact2133322c2 span',this).removeAttr('style');
		var h = $(this).height()-28;
		if (h>42) {
			$('.contact2133322c2',this).height(h);
			$('.contact2133322c2 span',this).width(h).css({'transform-origin':'12px 12px'});
		}
	});
}
function checkPackage() {
	$('#contact2131 .contactopt').show();
	$('#contact2132').removeClass('sel312');
	switch ($('#way1').val()) {
		case '12 months':
		case '18 months':
		case '24 months':
		case '30 months':
		case '36 months':
			$('#contact2131 .contactopt').eq(1).removeClass('sel').hide();
			$('#contact2132').addClass('sel312');
			if (form['plan']) {
				delete form['plan']['package'];
				delete form['plan']['package_el'];
				delete form['plan']['packageoption'];
			}
			$('#contact2133').hide();
			break;
	}
}
//plan
function calcSum(n) {
	var sum = 0;
	$('.contact213232c').eq(n).find('.contact213232c11c2 span:first-child').each(function(){
		sum += parseInt($(this).text());
	});
	$('.contact213231c').eq(n).find('.contact213231c21').text(sum);
}
function setCoordinate() {
	form['plan']['coord'] = {};
	form['plan']['coord']['plan11etc'] = $('#plan11etc').val();
	form['plan']['coord']['plan12etc'] = $('#plan12etc').val();
	form['plan']['coord']['plan13etc'] = $('#plan13etc').val();
	form['plan']['coord']['plan14etc'] = $('#plan14etc').val();
	form['plan']['coord']['plan15etc'] = $('#plan15etc').val();
	form['plan']['coord']['plan16etc'] = $('#plan16etc').val();
	$('.contact213232c11c').each(function(){
		form['plan']['coord'][$('.contact213232c11c1',this).text()] = $('.contact213232c11c2 span:first-child',this).text();
	});
}
function resetCoord() {
	if (form['plan'] && form['plan']['coord']) {
		delete form['plan']['coord'];
		$('.contact213231c').removeClass('sel');
		$('.contact213231c21').text('0');
		$('.contact213232c').hide();
		$('.contact213232c11c2 span:first-child').text('0');
	}
	$('.contact213231c').eq(0).click();
}
function resetPackage() {
	if (form['plan'] && form['plan']['package']) {
		delete form['plan']['package'];
		delete form['plan']['package_el'];
		delete form['plan']['packageoption'];
		$('.contact213331c,.contact2133322c').removeClass('sel');
	}
}

//time
function clickDay(e) {
	if ($(this).hasClass('past')) return;
	if ($(this).hasClass('amycevent')) {
		$(this).removeClass('amycevent');
		$('#contact214222').amycRemoveEvent($(this).data('date'));
	} else {
		$(this).addClass('amycevent');
		$('#contact214222').amycAddEvent($(this).data('date'),1);
	}
	form['time']['calendar'] = $('#contact214222').amycGetEvent();
}
//you
function resetYou() {
	delete form['you']['company'];
	delete form['you']['name'];
	delete form['you']['email'];
	delete form['you']['tel'];
	delete form['you']['area'];
	delete form['you']['user'];
	delete form['you']['coord'];
	delete form['you']['desc'];
	$('#contact215 input[type="text"]').val('');
	$('#contact215 textarea').val('');
	$('#contact215 select').each(function(){
		$(this)[0].selectedIndex = 0;
	});
}
