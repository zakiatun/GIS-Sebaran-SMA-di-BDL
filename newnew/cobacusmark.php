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

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w&sensor=false" type="text/javascript"></script>

<script type="text/javascript">
 var marker;
      function initialize() {
        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow;
        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
            zoom: 8,
             center: new google.maps.LatLng(-5.4284046, 105.2006967),
        //disableDefaultUI: true
          mapTypeId: google.maps.MapTypeId.ROADMAP
        } ;
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();

 // Pengambilan data dari database
 <?php
            $query = mysql_query("SELECT * FROM smagis WHERE nama_sekolah='SMA*'");
            while ($data = mysql_fetch_array($query))
            {
                $nama = $data['nama_sekolah'];
                $lat = $data['latitude'];
                $long = $data['longitude'];
                $stat = $data['status'];

                if($stat == 'Negeri'){
                  $image = 'img/sman.png';
                }else{
                  $image = 'img/smas.png';
                }
                
                echo ("addMarker($lat, $long, '$image','Lokasi : $nama<br/>Latitude : $lat<br/>Longitude : $long');\n");                      
            }

            /*$squery = mysql_query("SELECT * FROM smagis WHERE nama_sekolah='SMK*'");
            while ($sdata = mysql_fetch_array($squery))
            {
                $nama = $sdata['nama_sekolah'];
                $lat = $sdata['latitude'];
                $long = $sdata['longitude'];
                $stat = $sdata['status'];

                if($stat == 'Negeri'){
                  $image = 'img/smkn.png';
                }else{
                  $image = 'img/smks.png';
                }
                
                echo ("addMarker($lat, $long, '$image','Lokasi : $nama<br/>Latitude : $lat<br/>Longitude : $long');\n");                      
            }*/
          ?>

               // Proses membuat marker 
        function addMarker(lat, lng, img, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi,
                icon: img
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }
        
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }

}
google.maps.event.addDomListener(window, 'load', initialize);

/*var officeLocations = [
<?php
$data = file_get_contents('http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/ambildata.php');
                $no=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
?>//office0,1,2,4,3
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
       
        var office = locations[i];
        var myLatLng = new google.maps.LatLng(office[4], office[3]);
        var infowindow = new google.maps.InfoWindow({content: contentString});
         
        var contentString = 
            '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h5 id="firstHeading" class="firstHeading">'+ office[1] + '</h5>'+
            '<div id="bodyContent">'+ 
            '<a href=detail.php?id='+office[0]+'>Info Detail</a>'+
            '</div>'+
            '</div>';

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: office[1],
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

initialize();*/
</script>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
<?php include_once "footer.php"; ?>
