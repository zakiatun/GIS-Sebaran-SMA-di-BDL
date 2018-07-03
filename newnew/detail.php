<?php 
$id = $_GET['id'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$titles="";
$ids="";
$stat="";
$akr="";
$web="";
$hp="";
$alamat="";
$prov="";
$luas="";
$jml_guru="";
$jml_siswa="";
$fasilitas="";
$lat="";
$long="";
foreach($obj->results as $item){
  $titles.=$item->nama_sekolah;
  $ids.=$item->id_sekolah;
  $stat.=$item->status;
  $akr.=$item->akreditas;
  $web.=$item->website;
  $hp.=$item->no_hp;
  $alamat.=$item->alamat;
  $prov.=$item->provinsi;
  $luas.=$item->luas;
  $jml_guru.=$item->jumlah_guru;
  $jml_siswa.=$item->jumlah_siswa;
  $fasilitas.=$item->fasilitas;
  $lat.=$item->latitude;
  $long.=$item->longitude;
}

$title = "Detail dan Lokasi : ".$titles;
include_once "header.php"; ?>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w"></script>


<html>
<link rel="stylesheet" type="text/css" href="direct.css"/>
<body>
<div id="floating-panel">
      <strong>Pusat Kota</strong>
      <select id="start">
        <option value="Bandar Lampung">Bandar Lampung</option>
      </select>
      <br>
      <strong>Tujuan</strong>
      <select id="end">
            <option value="<?php echo $lat ?>,<?php echo $long ?>"><?php echo $titles ?></option>  </select>
    </div>
    <br><br><br><br>
    <div id="floating-panell">
            <b><font  color= "white">Mode Perjalanan</b></font>
            <select id="mode">
              <option value="DRIVING">Naik Mobil</option>
              <option value="WALKING">Jalan Kaki</option>
            </select>
            </div>

            <div id="map" style="width:100%;height:380px;"></div>
                    
            <div id="left-panel"></div>



<script>
   function initMap() {
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
        var myLatlng = new google.maps.LatLng(<?php echo $lat ?>,<?php echo $long ?>);
  
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: myLatlng
        });
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('left-panel'));

        

        var control = document.getElementById('floating-panel');
        control.style.display = 'block';
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        calculateAndDisplayRoute(directionsService, directionsDisplay);
        document.getElementById('mode').addEventListener('change', function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        });
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var start = document.getElementById('start').value;
        var end = document.getElementById('end').value;
        var selectedMode = document.getElementById('mode').value;
        directionsService.route({
          origin: start,
          destination: end,
          travelMode: google.maps.TravelMode[selectedMode]
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }



         
/*
function initialize() {
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var directionsService = new google.maps.DirectionsService;
  var myLatlng = new google.maps.LatLng(<?php echo $lat ?>,<?php echo $long ?>);
  var mapOptions = {
    zoom: 10,
    center: myLatlng
  };
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById('left-panel'));

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h4 id="firstHeading" class="firstHeading"><?php echo $titles ?></h4>'+
      '<div id="bodyContent">'+
      '<p><?php echo $alamat ?></p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon:'img/marker.png'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
*/
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAICvEJEVcEqp6JxtFoP8YsvaCZ5lRjl-s&amp;callback=initMap&amp;language=in&amp;region=ID"></script>


      <div class="row">
      <!--<div class="col-md-5">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Lokasi - </strong></h4>
            </div>
            <div class="panel-body">
              <div id="map-canvas" style="width:100%;height:380px;"></div>
            </div>
          </div>
        </div>-->
        &nbsp;. &nbsp;. &nbsp;.   <br><br><br><br>                                  
        <div class="col-md-7">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Detail - </strong></h4>
            </div>
            <div class="panel-body">
             <table class="table">
               <tr>
                 <th>Item</th>
                 <th>Detail</th>
               </tr>
               <tr>
                 <td>Nama Sekolah</td>
                 <td><h4><?php echo $titles ?></h4></td>
               </tr>
               <tr>
                 <td>Status</td>
                 <td><h4><?php echo $stat ?></h4></td>
               </tr>
               <tr>
                 <td>Akreditas</td>
                 <td><h4><?php echo $akr ?></h4></td>
               </tr>
               <tr>
                 <td>Alamat</td>
                 <td><h4><?php echo $alamat ?></h4></td>
               </tr>
               <tr>
                 <td>No HP</td>
                 <td><h4><?php echo $hp ?></h4></td>
               </tr>
               <tr>
                 <td>Website</td>
                 <td><h4><a href="http://<?php echo $web ?>"><?php echo $web ?></a></h4></td>
               </tr>
               <tr>
                 <td>Luas</td>
                 <td><h4><?php echo $luas ?></h4></td>
               </tr>
               <tr>
                 <td>Jumlah Guru</td>
                 <td><h4><?php echo $jml_guru ?></h4></td>
               </tr>
               <tr>
                 <td>Jumlah Siswa</td>
                 <td><h4><?php echo $jml_siswa ?></h4></td>
               </tr>
               <tr>
                 <td>Fasilitas</td>
                 <td><h4><?php echo $fasilitas?></h4></td>
               </tr>
             </table>
</script>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <?php include_once "footer.php"; ?>

