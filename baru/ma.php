
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
    background-color: gray;
    width: 100%;
    height: 400px;
}</style>
    </head>
    
    <body>
    <?php include 'header.php'?>
    <div id="map"></div>

            <script src="http://maps.googleapis.com/maps/api/js"></script>
    
            <div class="footer"> <center> Copyright &copy; 2018. All rights reserved. Designed and developed by AnitaDM_1657051008 MayaAkhriza_1617051017 ZakiatunNufus_1617051046</center></div>
        </div>
    
            <script src="https://www.gstatic.com/firebasejs/5.0.2/firebase.js"></script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzBRoK9MROy_hYCD1phgv9xDczjv2VRlI&callback=initMap"></script>
<script>

function initialize(){
	var mapOptions = {
		zoom:9,
		center: new google.maps.LatLng(-5.4284046, 105.2006967),
	};
	map = new google.maps.Map(document.getElementById('map'), mapOptions);
	
	infoWindow = new google.maps.InfoWindow();
	var infowindow = new google.maps.InfoWindow();
	
	var contentString;
	infowindow.setContent(contentString);
  
	var marker = new google.maps.Marker();
	marker.addListener('click',function(){
		infowindow.open(map,marker);
  ``});
	marker.setMap(map);
	
	var infoWin = new google.maps.InfoWindow();
    var labels = 'Bandar Lampung';
        
    var markers = locations.map(function(location, i) {
        var marker = new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
        });
		google.maps.event.addListener(marker, 'click', function(evt) {
			infoWin.setContent(location.info);
			infoWin.open(map, marker);
		})
		return marker;
    }); 
    
	console.log(locations);
    console.log(markers);

    var markerCluster = new MarkerClusterer(map, markers,
        {imagePath: 'images/m'});
        
    var d = markerCluster.distanceBetweenPoints_(markers[2].getPosition(),markers[4].getPosition());
    console.log(markerCluster.getCalculator());

    }
	
	function showArrays(event) {
		var vertices = this.getPath();
		var contentString = '<b>' + this.name + '</b>';
		infoWindow.setPosition(event.latLng);
		infoWindow.setContent(contentString);
		infoWindow.open(map);
	}
	google.maps.event.addDomListener(window, 'load', initialize);

     var locations =
     [  	{lat: -5.397140, lng: 105.266789,
	 info: "<h2>BANDAR LAMPUNG </h2> <hr>"+"<h3>Luas Bandar Lampung 169,21 km² dan Jumlah penduduk 1.166.761 jiwa</h3>"},
     {lat: -5.375385, lng: 105.302463,
    info: "<h2>MAN 1 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Letkol H. Endro Suratmin- Korpri Jaya, Kec. Sukarame Kota Bandar Lampung </h3><hr>"+" (0721) 706448 "},
	{lat: -5.434603, lng: 105.280001,
    info: "<h2>MAN 2 BANDAR LAMPUNG</h2><hr>"+"<h3> JL.GATOT SUBROTO NO.30 GARUNTANG BANDAR LAMPUNG, Teluk Betung, Kec. Teluk Betung Selatan Kota Bandar Lampung  </h3><hr>"},];
	
	</script>



<script>
        var map = null;
        var center = {lat: -5.4284046, lng:105.2006967};
        var infowindow;

        var config = {
            apiKey: "AIzaSyATKrdaGQPHxiptfNJkjf-Wtw5g9jhMWX8",
            authDomain: "sebaran-sma.firebaseapp.com",
            databaseURL: "https://sebaran-sma.firebaseio.com",
            projectId: "sebaran-sma",
            storageBucket: "sebaran-sma.appspot.com",
            messagingSenderId: "676661598886"
        };
        firebase.initializeApp(config);

        var db = firebase.database();
        var dataRef = db.ref('geojson/bdl')

        dataRef.on('value', showData, showError);
        function showData(data){
            //console.log(data.val());
            map.data.addGeoJson(data.val()); 
            map.data.setStyle({
                fillColor :'green',
                strokeWeight: 0.2
            });
            map.data.addListener('click', function(event){
                infoWindowContent = event.feature.getProperty('DESA')+"<br>"+event.feature.getProperty('KECAMATAN');
                infowindow.setContent(infoWindowContent);
                infowindow.setPosition(event.latLng);
                infowindow.open(map);
        
            });
        }
        function showError(err){
            console.log(err);
        }
        function initMap(){
            map = new google.maps.Map(document.getElementById('map'),{
                zoom: 11,
                center: center
            });
            infowindow = new google.maps.InfoWindow();
        }
    </script>
<script src="markerclusterer.js"></script>
</html>