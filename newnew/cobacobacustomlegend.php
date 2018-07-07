
<!DOCTYPE html>
<html>
  <head>
    <title>Custom Legend</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
      }
      #map {
        /* height: 400px; */
		height: 100%;
        width: 100%;
      }
      #legend {
        font-family: Arial, sans-serif;
        background: #fff;
        padding: 10px;
        margin: 10px;
        border: 3px solid #000;
      }
      #legend h3 {
        margin-top: 0;
      }
      #legend img {
        vertical-align: middle;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <div id="legend"><h3>Legend</h3></div>
    <script>
      var map;
      function initMap() {
        var markers=[];
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          //center: new google.maps.LatLng(-33.91722, 151.23064),
		  // the old one is in UNSW, Australia
		  // change it into UIN Suska: 101.35475,0.46559
          center: new google.maps.LatLng(0.46559, 101.35475),
          mapTypeId: 'roadmap',
        
        });
        var iconBase = 'img/';
        var icons = {
          sman: {
            name: 'sman',
            icon: iconBase + 'sman.png'
          },
          smas: {
            name: 'smas',
            icon: iconBase + 'smas.png'
          },
          smkn: {
            name: 'smkn',
            icon: iconBase + 'smkns.png'
          },
          smks: {
            name: 'smks',
            icon: iconBase + 'smks.png'
          },
          man: {
            name: 'man',
            icon: iconBase + 'man.png'
          },
          mas: {
            name: 'mas',
            icon: iconBase + 'mas.png'
          }
        };


        function addMarker(feature) {
          var marker = markers.push(new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          }));
		  // since not every feature has content, only add infoWindow when content exist
		  if(feature.content){
			  var marker_infoWindow = new google.maps.InfoWindow({
				content: feature.content
			  });
			  marker.addListener('click', function() {
				marker_infoWindow.open(map, marker);
			  })
            
          }
          var markerCluster = new MarkerClusterer(map, feature.marker,
        {imagePath: 'img/m'});


        }

        var features = [
          {
            position: new google.maps.LatLng(0.46721, 101.35630),
			content: 'INFO..',
            type: 'sman'
          }, {
            position: new google.maps.LatLng(0.46539, 101.35820),
			content: 'INFO.',
            type: 'smks'
          }, {
            position: new google.maps.LatLng(0.46747, 101.35912),
            type: 'sman'
          }, {
            position: new google.maps.LatLng(0.46910, 101.35907),
            type: 'sman'
          }, {
            position: new google.maps.LatLng(0.46725, 101.35011),
            type: 'mas'
          }, {
            position: new google.maps.LatLng(0.46872, 101.35089),
			content: '',
            type: 'smkn'
          }, {
            position: new google.maps.LatLng(0.46784, 101.35094),
            type: 'sman'
          }, {
            position: new google.maps.LatLng(0.46682, 101.35149),
            type: 'sman'
          }, {
            position: new google.maps.LatLng(0.46790, 101.35463),
            type: 'sman'
          }, {
            position: new google.maps.LatLng(0.46666, 101.35468),
			content: 'INFO ',
            type: 'sman'
          }, {
            position: new google.maps.LatLng(0.466988, 101.353640),
			content: '',
            type: 'sman'
          }, {
            position: new google.maps.LatLng(0.46662347903106, 101.35879464019775),
            type: 'sman'
          }, {
            position: new google.maps.LatLng(0.466365282092855, 101.35937399734496),
            type: 'sman'
          }, {
            position: new google.maps.LatLng(0.46665018901448, 101.3582474695587),
            type: 'sman'
          }, {
            position: new google.maps.LatLng(0.469543720969806, 101.35112279762267),
            type: 'sman'
          }, {
            position: new google.maps.LatLng(0.46608037421864, 101.35288232673644),
            type: 'sman'
          }, {
            position: new google.maps.LatLng(0.46851096391805, 101.3544058214569),
            type: 'sman'
          }, {
            position: new google.maps.LatLng(0.46818154739766, 101.3546203981781),
            type: 'sman'
          }, {
            position: new google.maps.LatLng(0.46495, 101.35621),
            type: 'sman',
			content: ''
          }
        ];
        for (var i = 0, feature; feature = features[i]; i++) {
          addMarker(feature);
         

        } 
       
        
        var legend = document.getElementById('legend');
        for (var key in icons) {
          var type = icons[key];
          var name = type.name;
          var icon = type.icon;
          var div = document.createElement('div');
          div.innerHTML = '<img src="' + icon + '"> ' + name;
          legend.appendChild(div);
        }
        map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);
      }
    </script>
    <script src="markerclusterer.js"></script>
   
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w&callback=initMap">
    </script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    
    </div>

 <script src="https://www.gstatic.com/firebasejs/5.0.2/firebase.js"></script>

  </body>
</html>