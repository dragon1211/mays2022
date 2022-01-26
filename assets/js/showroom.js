var map;
$(document).ready(function(){
	if (issp) {
		am.mh = 440;
		map.setOptions({draggable:false});
	} else {
		am.mh = 400;
	}
});
function initMap() {
	var ll = {
			lat: 35.666984380197555,
			lng: 139.7464317152585
		};
	map = new google.maps.Map(document.getElementById('showroom213'),{
		center:ll,
		zoom: 17,
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
