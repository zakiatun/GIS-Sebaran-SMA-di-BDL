<<!DOCTYPE html>
<html>
<head>
<style type="text/css">
/*html, body, #map-canvas {
height: 600px;
margin: 0;
padding: 0;
width: 580px;
}*/
#googft-legend{
  position: absolute;
   top: 40px; 
   left: 20px;
  width: 260px;
  background-color:#fff;
  border:1px solid #000;font-family:Arial, sans-serif;
font-size:12px;margin:5px;padding:10px 10px 8px;}
#googft-legend p{
  font-weight:bold;margin-top:0;}
  #googft-legend div{margin-bottom:5px;}
  .googft-legend-swatch{
    border:1px solid;float:left;
    height:12px;margin-right:8px;width:20px;}
  .googft-legend-range{margin-left:0;}
  .googft-dot-icon{margin-right:8px;}
  .googft-paddle-icon{height:24px;left:-8px;margin-right:-8px;
    position:relative;vertical-align:middle;width:24px;}
    .googft-legend-source{margin-bottom:0;margin-top:8px;}
    .googft-legend-source a{color:#666;font-size:11px;}
</style>
  <script type="text/javascript"
    src="http://maps.google.com/maps/api/js?sensor=false">
  </script>

<?php
$title = "Peta Sebaran SMA";
include_once "header.php";
?>

      <div class="row">

        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard centered">
            <div class="panel-heading">
              <h2 class="panel-title"><strong> - TAMPILAN PETA - </strong></h2>
            </div>
            <div class="panel-body">
              <div id="map" style="width:100%;height:380px;"></div>


            <div id="googft-legend">
            <p id="googft-legend-title">Keterangan</p>
            <div>
            <span class="googft-legend-swatch" ><img src=".../img/sman.png"></span>
            <span class="googft-legend-range">Under landsgennemsnittet</span>
            </div>
            <div>
            <span class="googft-legend-swatch" style="background-color: #ffff00"></span>
            <span class="googft-legend-range">Svarer til landsgennemsnittet</span>
            </div>
            <div>
            <span class="googft-legend-swatch" style="background-color: #ff0000"></span>
            <span class="googft-legend-range">Over landsgennemsnittet</span>
            </div>
            <span class="googft-legend-swatch" style="background-color: #999999"></span>
            <span class="googft-legend-range">Ingen data</span>
            </div>
            </div>
            </body>
            </html>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w"></script>

<script type="text/javascript">

  function initialize() {
    
    var mapOptions = {   
        zoom: 8,
        center: new google.maps.LatLng(-5.4284046, 105.2006967),
        //disableDefaultUI: true
    };

    var mapElement = document.getElementById('map');

    var map = new google.maps.Map(mapElement, mapOptions);

       layerl0 = new google.maps.FusionTablesLayer({
        query: {
          select: "'col2>>1'",

          from: '1jHxWS09vq6odC0G3PweHLPVMOCcIHc5ZWsZXL28'
        },
        map: map,
        styleId: 2,
        templateId: 2
      });
      layerl1 = new google.maps.FusionTablesLayer({
        query: {
          select: "'col2>>1'",

          from: '1aq4Oykb7cxsyd7tz3Cwl7GQL--xxHJo6NJMM09A'
        },
        map: map,
        styleId: 2,
        templateId: 2
      });
    setMarkers(map, schoolLocations);



}
google.maps.event.addDomListener(window, 'load', initialize);
var schoolLocations = [
<?php
$data = file_get_contents('http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/ambildata.php');
                $no=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
?>//school0,1,2,4,3
[<?php echo $item->id_sekolah ?>,'<?php echo $item->nama_sekolah ?>','<?php echo $item->alamat ?>', <?php echo $item->longitude ?>, <?php echo $item->latitude ?>],
<?php 
}
} 
?>    
];

function setMarkers(map, locations)
{
    var globalPin = 'img/sman.png';

    for (var i = 0; i < locations.length; i++) {
       
        var school = locations[i];
        var myLatLng = new google.maps.LatLng(school[4], school[3]);
        var infowindow = new google.maps.InfoWindow({content: contentString});
         
        var contentString = 
            '<div id="content">'+GIS-Sebaran-SMA-di-BDL.git/newnew/
            '<div id="siteNotice">'+
            '</div>'+
            '<h5 id="firstHeading" class="firstHeading">'+ school[1] + '</h5>'+
            '<div id="bodyContent">'+ 
            '<a href=detail.php?id='+school[0]+'>Info Detail</a>'+
            '</div>'+
            '</div>';

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: school[1],
            icon:'img/school.png'
        });

        google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
    }
}

function getInfoCallback(map, content) {
    var infowindow = new google.maps.InfoWindow({content: content});
    return function() {
            infowindow.setContent(content); 
            infowindow.open(map, this);
        };
}

initialize();
</script>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
<?php include_once "footer.php"; ?>