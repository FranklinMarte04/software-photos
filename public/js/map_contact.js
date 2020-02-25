	(function(A) {

	if (!Array.prototype.forEach)
		A.forEach = A.forEach || function(action, that) {
			for (var i = 0, l = this.length; i < l; i++)
				if (i in this)
					action.call(that, this[i], i, this);
			};

		})(Array.prototype);

		var
		mapObject,
		markers = [],
		markersData = {
			'Contact': [
			{
				name: 'Address',
				location_latitude: 18.6076461, 
				location_longitude: -68.3887367,
				map_image_url: 'http://bavaroadventurepark.com/public/img/logo.png',
				name_point: 'Bavaro Aventure Park',
				description_point: 'Bulevar Turístico del Este,Cap Cana, (809) 933-3040<br>Abierto ahora:  08:00 – 18:00<br><br>bavaroadventurepark.com',
				url_point: ''
			}
			]

		};

			var mapOptions = {
				zoom: 14,
				center: new google.maps.LatLng(18.6076461,-68.3887367,17),
				mapTypeId: google.maps.MapTypeId.ROADMAP,

				mapTypeControl: false,
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				panControl: false,
				panControlOptions: {
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				zoomControl: true,
				zoomControlOptions: {
					style: google.maps.ZoomControlStyle.LARGE,
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				scrollwheel: false,
				scaleControl: false,
				scaleControlOptions: {
					position: google.maps.ControlPosition.TOP_LEFT
				},
				streetViewControl: true,
				streetViewControlOptions: {
					position: google.maps.ControlPosition.LEFT_TOP
				},
				styles: [/*insert your map styles*/]
			};
			var
			marker;
			mapObject = new google.maps.Map(document.getElementById('map_contact'), mapOptions);
			for (var key in markersData)
				markersData[key].forEach(function (item) {
					marker = new google.maps.Marker({
						position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
						map: mapObject,
						icon: 'http://bavaroadventurepark.com/public/img/pins/' + key + '.png',
					});

					if ('undefined' === typeof markers[key])
						markers[key] = [];
					markers[key].push(marker);
					google.maps.event.addListener(marker, 'click', (function () {
      closeInfoBox();
      getInfoBox(item).open(mapObject, this);
      mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
     }));

					
				});
	

		function hideAllMarkers () {
			for (var key in markers)
				markers[key].forEach(function (marker) {
					marker.setMap(null);
				});
		};

		function closeInfoBox() {
			$('div.infoBox').remove();
		};

		function getInfoBox(item) {
			return new InfoBox({
				content:
				'<div class="marker_info" id="marker_info">' +
				'<img src="' + item.map_image_url + '" alt=""/>' +
				'<h3>'+ item.name_point +'</h3>' +
				'<span>'+ item.description_point +'</span>' +
				'</div>',
				disableAutoPan: true,
				maxWidth: 0,
				pixelOffset: new google.maps.Size(40, -190),
				closeBoxMargin: '5px -20px 2px 2px',
				closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
				isHidden: false,
				pane: 'floatPane',
				enableEventPropagation: true
			});


		};


