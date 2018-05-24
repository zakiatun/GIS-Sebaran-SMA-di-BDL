<!DOCTYPE html>
<html lang="en">
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

        <script src="https://www.gstatic.com/firebasejs/5.0.2/firebase.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzBRoK9MROy_hYCD1phgv9xDczjv2VRlI&callback=initMap"></script>
    <script>
        // Initialize Firebase
        var center = {lat:-5.42544, lng:105.25803};
        var map = null;
        var infowindow;

        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyBekvsp1D6yATTefShHZm1QQ8tkt33hbcQ",
            authDomain: "projekgis-12267.firebaseapp.com",
            databaseURL: "https://projekgis-12267.firebaseio.com",
            projectId: "projekgis-12267",
            storageBucket: "projekgis-12267.appspot.com",
            messagingSenderId: "113242337726"
        };
        firebase.initializeApp(config);

        var db = firebase.database();
        var dataRef = db.ref('bdl');

        dataRef.on('value', showData, showError)


        function showData(data){
            //console.log(data.val());
            map.data.addGeoJson(data.val());
            map.data.setStyle({
                fillColor: 'green',
                strokeWeight :0.3,
            });
            map.data.addListener('click', function(event){
                infoWindowContent = event.feature.getProperty('DESA')+"<br>"+ event.feature.getProperty('KECAMATAN');
                infowindow.setContent(infoWindowContent);
                infowindow.setPosition(event.latLng);
                infowindow.open(map);
                console.log(infoWindowContent)
            });
        }
        function showError(err){
            console.log(err);
        }
        function initMap(){
            map = new google.maps.Map(document.getElementById('map'),{
                zoom : 12,
                center : center,
            });
            infowindow = new google.maps.InfoWindow();
        }
    </script>
</body>
</html>