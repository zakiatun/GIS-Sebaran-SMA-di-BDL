<html>
<link rel="stylesheet" type="text/css" href="direct.css"/>
<?php include 'header.php'?>
<head>

    <style>

        #map{
            height: 500px;
            margin: 0px;
            padding: 0px;
            width: 100%;
        }

        #map-canvas{
            height: 500px;
            margin: 0px;
            padding: 0px;
            width: 100%;
        }
        .controls {
            margin-top: 10px;
            border: 1px solid transparent;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 32px;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
          }
        #searchInput {
              background-color: #fff;
              font-family: Roboto;
              font-size: 15px;
              font-weight: 300;
              margin-left: 12px;
              padding: 0 11px 0 13px;
              text-overflow: ellipsis;
              width: 50%;
          }
        #searchInput:focus {
              border-color: #4d90fe;
          }
          
        .footer {
            width:auto;
            height: 10px;
            background-color:powderblue;
            color:white;
            padding:20px;
        }
        
#pano,
#rute {
    background-color:white;
	width: 50%;
	height: 800px;
	display: inline-block;
	vertical-align: top;
}

          
      </style>

</head>


<body>
    <br><br><br><br><br>
        <div><b style="color:white">Asal: </b>
            <select id="start">
                <option value="Kota Bandar Lampung, Lampung 35213">BANDAR LAMPUNG</option>
    </select>
        <b style="color:white">Tujuan: </b>
            <select id="end">
            <option value="Jalan Jenderal Sudirman No.41, Rawa Laut, Tanjung Karang Timur, Engal, Rw. Laut, Engal, Kota Bandar Lampung, Lampung 35213">SMAN 1 BANDAR LAMPUNG</option>
                <option value="Jalan Amir Hamzah No. 1, Gotong Royong, Tanjung Karang Pusat, Gotong Royong, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119">SMAN 2 BANDAR LAMPUNG</option>
                <option value="Jalan Khairil Anwar No.30, Durian Payung, Tanjung Karang Pusat, Durian Payung, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35214">SMAN 3 BANDAR LAMPUNG</option>
                <option value="Jl. Dr. Cipto Mangunkusumo, No 88, Teluk Betung, Kupang Teba, Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35228">SMAN 4 BANDAR LAMPUNG</option>
                <option value="Jalan Soekarno Hatta, Way Dadi, Sukarame, Way Dadi, Sukarame, Kota Bandar Lampung, Lampung 35132">SMAN 5 BANDAR LAMPUNG</option>
                <option value="Jl. KH. Agus Anang No.35, Ketapang, Tlk. Betung Sel., Kota Bandar Lampung, Lampung 35245">SMAN 6 BANDAR LAMPUNG</option>
                <option value="Jalan Teuku Cik Ditro No.2, Beringin Raya, Kemiling, Beringin Raya, Kemiling, Kota Bandar Lampung, Lampung 35158">SMAN 7 BANDAR LAMPUNG</option>
                <option value="Jalan LAKSAMANA MALAHAYATI No.10, Talang, Teluk Betung Selatan, Talang, Tlk. Betung Sel., Bandar Lampung, Lampung 35229">SMAN 8 BANDAR LAMPUNG</option>
                <option value="Jalan Panglima Polim No.18, Segala Mider, Tanjung Karang Barat, Segala Mider, Tj. Karang Bar., Kota Bandar Lampung, Lampung 35152">SMAN 9 BANDAR LAMPUNG</option>
                <option value="Jalan sman 10: Jalan GATOT SUBROTO No.81, Tanjung Gading, North Teluk Betung, Kedamaian, Tj. Gading, Kedamaian, Kota Bandar Lampung, Lampung 35226 ">SMAN 10 BANDAR LAMPUNG</option>
                <option value="JL. RE. Martadinata, Perwata, Tlk. Betung Tim., Kota Bandar Lampung, Lampung 35231 ">SMAN 11 BANDAR LAMPUNG</option>
                <option value="Jalan Haji Endro Suratmin, Sukarame, Kota Bandar Lampung, Lampung 35131">SMAN 12 BANDAR LAMPUNG</option>
                <option value="Jl. Padat Karya, Sinar Harapan, Rajabasa Jaya, Rajabasa, Kota  Bandar Lampung, Lampung 35141 ">SMAN 13 BANDAR LAMPUNG</option>
                <option value="Jl. Perum Bukit Kemiling Permai, Kemiling Permai, Kemiling,  Kota Bandar Lampung, Lampung 35152">SMAN 14 BANDAR LAMPUNG</option>
                <option value="Jl. Turi Raya, Labuhan Dalam, Tj. Senang, Kota Bandar Lampung, Lampung 35141 ">SMAN 15 BANDAR LAMPUNG</option>
                <option value="Jalan DARUSSALAM, Susunan Baru, Tanjung Karang, Langkapura,  Kota Bandar Lampung, Lampung 35111">SMAN 16 BANDAR LAMPUNG</option>
                <option value="Jl. Soekarno - Hatta, Pidada, Panjang, Kota Bandar Lampung,  Lampung 35241">SMAN 17 BANDAR LAMPUNG</option>
                 </select>
        <b style="color:white">Mode: </b>
            <select id="mode">
                <option value="DRIVING">Kendaraan</option>
                <option value="TRANSIT">Transit</option>
                <option value="WALKING">Jalan Kaki</option>

            </select>
        </div>
<input id="searchInput" class="controls" type="text" placeholder="Find Location">

<div id="map"></div>
          <div class="footer"> <center> Copyright &copy; 2018. All rights reserved. Designed and developed by AnitaDM_1657051008 MayaAkhriza_1617051017 ZakiatunNufus_1617051046</center></div>


  <script src="https://www.gstatic.com/firebasejs/5.0.2/firebase.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzBRoK9MROy_hYCD1phgv9xDczjv2VRlI&callback=initMap"></script>
   
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzBRoK9MROy_hYCD1phgv9xDczjv2VRlI&amp;libraries=places&amp;callback=initMap" async defer></script>
    <script>
        var map = null;
        var center = { lat:-5.420572, lng:105.258255};
        var infowindow;

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


        dataRef.on('value', showData, showError);
        function showData(data){
            //console.log(data.val());
            map.data.addGeoJson(data.val());
            map.data.setStyle({
                fillColor:'green',
                strokeWeight:0.2
                
            });
            map.data.addListener('click', function(event){
                infowindowcontent = event.feature.getProperty('KECAMATAN');
                infowindow.setContent(infowindowcontent);
                infowindow.setPosition(event.latLng);
                infowindow.open(map);
            });
        }

        function showError(err){
            console.log(err);
        }

        function initMap(){
            map = new google.maps.Map(document.getElementById('map'),{
                zoom: 12,
                center: center
            });

            infowindow = new google.maps.InfoWindow();


            var infowindowpusat = new google.maps.InfoWindow();
            var contentStringpusat = '<h3>PROVINSI LAMPUNG</h3><hr>'+
                                 '<h5> Luas 34.623,80 km2 dan jumlah penduduk 9.543.231 Jiwa</hr5>';
            infowindowpusat.setContent(contentStringpusat);
            var marker = new google.maps.Marker({
                position:new google.maps.LatLng(-5.402599,105.264040)
                });
            marker.addListener('click',function(){
            infowindowpusat.open(map,marker);
            });

            marker.setMap(map);

            var input = document.getElementById('searchInput');
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.bindTo('bounds', map);

            var infowindowlokasi = new google.maps.InfoWindow();
            var markerlokasi = new google.maps.Marker({
                map: map,
                anchorPoint: new google.maps.Point(0, -29)
            });

            autocomplete.addListener('place_changed', function() {
                infowindowlokasi.close();
                markerlokasi.setVisible(false);
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    window.alert("Autocomplete's returned place contains no geometry");
                    return;
                }

                // If the place has a geometry, then present it on a map.
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }
                markerlokasi.setIcon(({
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(35, 35)
                }));
                markerlokasi.setPosition(place.geometry.location);
                markerlokasi.setVisible(true);

                var address = '';
                if (place.address_components) {
                    address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''),
                    (place.address_components[1] && place.address_components[1].short_name || ''),
                    (place.address_components[2] && place.address_components[2].short_name || '')
                    ].join(' ');
                }

                infowindowlokasi.setContent('<div><strong>' + place.name + '</strong><br>' + address);
                infowindowlokasi.open(map, markerlokasi);

                //Location details
                for (var i = 0; i < place.address_components.length; i++) {
                    if(place.address_components[i].types[0] == 'postal_code'){
                        document.getElementById('postal_code').innerHTML = place.address_components[i].long_name;
                    }
                    if(place.address_components[i].types[0] == 'country'){
                        document.getElementById('country').innerHTML = place.address_components[i].long_name;
                    }
                }
                document.getElementById('location').innerHTML = place.formatted_address;
                document.getElementById('lat').innerHTML = place.geometry.location.lat();
                document.getElementById('lon').innerHTML = place.geometry.location.lng();
            });

            markerlokasi.addListener('click',function(){
                    infowindowlokasi.open(map,markerlokasi);
                    });

            markerlokasi.addListener('rightclick',function(){
                    markerlokasi.setVisible(false);
                    infowindowlokasi.close();
                    });


            var directionsService = new google.maps.DirectionsService;
            var directionsDisplay = new google.maps.DirectionsRenderer;
            directionsDisplay.setMap(map);

            var onChangeHandler = function() {
                calculateAndDisplayRoute(directionsService, directionsDisplay)
                document.getElementById('mode').addEventListener('change', function() {
                calculateAndDisplayRoute(directionsService, directionsDisplay);
                });;
            };
            document.getElementById('start').addEventListener('change', onChangeHandler);
            document.getElementById('end').addEventListener('change', onChangeHandler);
        }

        function calculateAndDisplayRoute(directionsService, directionsDisplay) {
            var selectedMode = document.getElementById('mode').value;
            directionsService.route({
            origin: document.getElementById('start').value,
            destination: document.getElementById('end').value,
            travelMode: google.maps.TravelMode[selectedMode]
            },
            function(response, status) {
                if (status === 'OK') {
                    directionsDisplay.setDirections(response);
                } else {
                window.alert('There is no routing' + status);
                }
            });
        }
        

        </script>
            <script src="../../code.jquery.com/jquery-3.3.1.js"></script>
            <script src="index.js"></script>


</html>
