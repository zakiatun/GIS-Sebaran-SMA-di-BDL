
<!DOCTYPE html> 
<html> 
<head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SI SEBARAN SMA/SEDERAJAT DI BANDAR LAMPUNG</title>
        <link rel="stylesheet" type="text/css" href="desain.css"/>
        <style>
    #map {
    width: 100%;
    height: 400px;
}</style>
    </head>
    
    <body>
    <?php include 'header.php'?>


            <script src="http://maps.googleapis.com/maps/api/js"></script>
    
            <div class="footer"> <center> Copyright &copy; 2018. All rights reserved. Designed and developed by AnitaDM_1657051008 MayaAkhriza_1617051017 ZakiatunNufus_1617051046</center></div>
        </div>
    
            <script src="https://www.gstatic.com/firebasejs/5.0.2/firebase.js"></script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzBRoK9MROy_hYCD1phgv9xDczjv2VRlI&callback=initMap"></script>

          <script>
      
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAICvEJEVcEqp6JxtFoP8YsvaCZ5lRjl-s"></script>
          <script>
            // This example creates a custom overlay called USGSOverlay, containing
            // a U.S. Geological Survey (USGS) image of the relevant area on the map.
      
            // Set the custom overlay object's prototype to a new instance
            // of OverlayView. In effect, this will subclass the overlay class therefore
            // it's simpler to load the API synchronously, using
            // google.maps.event.addDomListener().
            // Note that we set the prototype to an instance, rather than the
            // parent class itself, because we do not wish to modify the parent class.
      
            var overlay;
            USGSOverlay.prototype = new google.maps.OverlayView();
      
            // Initialize the map and the custom overlay.
      
            function initMap() {
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: {lat: -5.3971396, lng: 105.2667887},
                mapTypeId: 'roadmap'
              });
      
              var bounds = new google.maps.LatLngBounds(
                  new google.maps.LatLng(-5.4349129,105.1825665),
                  new google.maps.LatLng(-5.371302,105.243629));
      
              var srcImage = 'sma.png';
              overlay = new USGSOverlay(bounds, srcImage, map);
            }
      
            function USGSOverlay(bounds, image, map) {
      
              this.bounds_ = bounds;
              this.image_ = image;
              this.map_ = map;
              this.div_ = null;
              this.setMap(map);
            }
            USGSOverlay.prototype.onAdd = function() {
      
              var div = document.createElement('div');
              div.style.borderStyle = 'none';
              div.style.borderWidth = '0px';
              div.style.position = 'absolute';
      
              var img = document.createElement('img');
              img.src = this.image_;
              img.style.width = '100%';
              img.style.height = '100%';
              img.style.position = 'absolute';
              div.appendChild(img);
      
              this.div_ = div;
      
              // Add the element to the "overlayLayer" pane.
              var panes = this.getPanes();
              panes.overlayLayer.appendChild(div);
            };
      
            USGSOverlay.prototype.draw = function() {
              var overlayProjection = this.getProjection();
              var sw = overlayProjection.fromLatLngToDivPixel(this.bounds_.getSouthWest());
              var ne = overlayProjection.fromLatLngToDivPixel(this.bounds_.getNorthEast());
      
              var div = this.div_;
              div.style.left = sw.x + 'px';
              div.style.top = ne.y + 'px';
              div.style.width = (ne.x - sw.x) + 'px';
              div.style.height = (sw.y - ne.y) + 'px';
            };
      
            USGSOverlay.prototype.onRemove = function() {
              this.div_.parentNode.removeChild(this.div_);
              this.div_ = null;
            };
      
            google.maps.event.addDomListener(window, 'load', initMap);
          </script>
      <div id="map"></div>

            