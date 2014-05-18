//========================
// Full page system
//========================
jQuery(document).ready(function($) {
	$('#fullpage').fullpage({
		'verticalCentered': false,
		'resize' : false,
		'scrollOverflow': true
	});
});

jQuery(function($) {
	$(".button-news-fancy").fancybox(
	{
		padding : 0
	});
});

//========================
// fancybox
//========================

jQuery(function($) {
	$(".fancybox").fancybox(
	{
		padding : 0
	});
});

//========================
// BigVideo.js
//========================

jQuery(function($) {
	var BV = new $.BigVideo();
	BV.init();
	if (Modernizr.touch) {
		BV.show('img/background-dock.jpg');
	} else {
		BV.show('http://www.asiances-media.com/wp-content/themes/asiances_media/video/asiances-media_intro.mp4',{doLoop:true, altSource:'http://www.asiances-media.com/wp-content/themes/asiances_media/video/asiances-media_intro.ogg'});
	}

	//button show/hide
	$('.button-jays').on('click', function (){
		$('.jays-block').toggleClass('hide');
	});
});

//========================
// We call Google Maps function	
//========================
	function initialize() {
		
	// Create an array of styles.
	var styles =  
	[
		{
		"stylers": [
			{
				"saturation": -100
			},
			{
				"gamma": 1
			},
			{
				"hue": "#50a5d1"
			}
		]
		},
		{
			"elementType": "labels.text.stroke",
			"stylers": [
				{
					"visibility": "off"
				}
			]
		},
		{
			"featureType": "road",
			"elementType": "geometry",
			"stylers": [
				{
					"visibility": "simplified"
				}
			]
		},
		{
			"featureType": "water",
			"stylers": [
				{
					"visibility": "on"
				},
				{
					"saturation": 50
				},
				{
					"gamma": 0
				},
				{
					"hue": "#50a5d1"
				}
			]
		},
		{
			"featureType": "road.local",
			"elementType": "labels.text",
			"stylers": [
				{
					"weight": 0.5
				},
				{
					"color": "#333333"
				}
			]
		}
	];
	
	// Create a new StyledMapType object, passing it the array of styles,
	// as well as the name to be displayed on the map type control.
	var styledMap = new google.maps.StyledMapType(styles,
		{name: "Styled Map"});

	var loulou =  new google.maps.LatLng(48.8512281,2.3447371);

	// Create a map object, and include the MapTypeId to add
	// to the map type control.
	var mapOptions = {
		maxZoom: 18,
		zoom: 17,
		center : loulou,
		mapTypeControlOptions: {
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
		}
	};

	var map = new google.maps.Map(document.getElementById('map_canvas'),
		mapOptions);

	//var image = 'http://www.begik.co/wp-content/themes/libre/img/icon-map.png';

	var marker = new google.maps.Marker({
		map:map,
		//icon: 'http://l-a-p.co/l-a-p/wp-content/themes/lap/img/icon.png',
		//icon: image,
		title: 'loulou du 12eme',
		position: loulou,
	});

	//Associate the styled map with the MapTypeId and set it to display.
	map.mapTypes.set('map_style', styledMap);
	map.setMapTypeId('map_style');
}
//end function google maps