$(document).ready(function(){
	if (issp) {
		am.mh = 440;
	} else {
		am.mh = 400;
	}
	$('.faq21c2').each(function(){
		$('p',this).each(function(i){
			if (i%2==0) {
				$(this).next().addBack().wrapAll('<div class="faq21c21" />');
			}
		});
	});
	$('.faq21c21 p:first-child').click(function(){
		$(this).parent().toggleClass('open');
	});
});

function SelectQA( num ) {
    var elementCat01 = document.getElementById( "qa_cat01" );
    var elementCat02 = document.getElementById( "qa_cat02" );
    var elementCat03 = document.getElementById( "qa_cat03" );
	var elementCat04 = document.getElementById( "qa_cat04" );
	var elementCat05 = document.getElementById( "qa_cat05" );
	var elementCat06 = document.getElementById( "qa_cat06" );
	var elementCat07 = document.getElementById( "qa_cat07" );
	var elementCat08 = document.getElementById( "qa_cat08" );
	var elementCat09 = document.getElementById( "qa_cat09" );
 
    switch( num ) {
    case 1:
        elementCat01.style.display = 'block';
        elementCat02.style.display = 'none';
        elementCat03.style.display = 'none';
		elementCat04.style.display = 'none';
		elementCat05.style.display = 'none';
		elementCat06.style.display = 'none';
		window.location.href="#qaanc01";
        break;
 
    case 2:
        elementCat01.style.display = 'none';
        elementCat02.style.display = 'block';
        elementCat03.style.display = 'none';
		elementCat04.style.display = 'none';
		elementCat05.style.display = 'none';
		elementCat06.style.display = 'none';
		window.location.href="#qaanc01";
        break;
 
    case 3:
        elementCat01.style.display = 'none';
        elementCat02.style.display = 'none';
        elementCat03.style.display = 'block';
		elementCat04.style.display = 'none';
		elementCat05.style.display = 'none';
		elementCat06.style.display = 'none';
		window.location.href="#qaanc01";
        break;
	
	case 4:
		elementCat01.style.display = 'none';
		elementCat02.style.display = 'none';
		elementCat03.style.display = 'none';
		elementCat04.style.display = 'block';
		elementCat05.style.display = 'none';
		elementCat06.style.display = 'none';
		window.location.href="#qaanc01";
		break;
	
	case 5:
		elementCat01.style.display = 'none';
		elementCat02.style.display = 'none';
		elementCat03.style.display = 'none';
		elementCat04.style.display = 'none';
		elementCat05.style.display = 'block';
		elementCat06.style.display = 'none';
		window.location.href="#qaanc01";
		break;
	
	case 6:
		elementCat01.style.display = 'none';
		elementCat02.style.display = 'none';
		elementCat03.style.display = 'none';
		elementCat04.style.display = 'none';
		elementCat05.style.display = 'none';
		elementCat06.style.display = 'block';
		window.location.href="#qaanc01";
		break;
	
	case 7:
		elementCat07.style.display = 'block';
		elementCat08.style.display = 'none';
		elementCat09.style.display = 'none';
		window.location.href="#qaanc02";
		break;
	
	case 8:
		elementCat07.style.display = 'none';
		elementCat08.style.display = 'block';
		elementCat09.style.display = 'none';
		window.location.href="#qaanc02";
		break;
	
	case 9:
		elementCat07.style.display = 'none';
		elementCat08.style.display = 'none';
		elementCat09.style.display = 'block';
		window.location.href="#qaanc02";
		break;
    }
};
