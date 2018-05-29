
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
	{lat: -5.452682, lng: 105.255533,
    info: "<h2>SMK TRI KARYA UTAMA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Banten, Perwata, Teluk Betung Barat, Kota Bandar Lampung, Lampung 35221  </h3><hr>"+"0822-7813-372"},
    {lat: -5.413049, lng: 105.256860,
    info: "<h2>SMK TAMAN KARYA MADYA TEKNIK 3 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Wr.Supratman No.165, Talang, Teluk Betung Selatan, Kota Bandar Lampung, Lampung 35229 </h3><hr>"+"0721-488570"},
    {lat: -5.444210, lng: 105.277200,
    info: "<h2>SMK SETIA BUDI BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Yos Sudarso, Gg. Ikan Nila No.41, Pecah Raya, Teluk Betung Selatan, Kota Bandar Lampung, Lampung 35223 </h3><hr>"},
    {lat: -5.483522, lng: 105.324223,
    info: "<h2>SMK DHARMA PALA PANJANG BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Soekarno - Hatta No.59, Karang Maritim, Panjang, Kota Bandar Lampung, Lampung 35243  </h3><hr>"+"0721-31248"},
    {lat: -5.483407, lng: 105.323904,
    info: "<h2>SMK YPPL BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Sukarno-Hatta Baruna Ria, Karang Maritim, Panjang, Kota Bandar Lampung, Lampung 35243 </h3><hr>"+"0721-31772"},
    {lat: -5.405592, lng: 105.279462,
    info: "<h2>SMK PLUS BANII SALIM BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Simpang Way Laga, Way Laga, Panjang, Kota Bandar Lampung, Lampung 35122  </h3><hr>"+"0897-3799-704"},
    {lat: 5.417971, lng: 105.270447,
    info: "<h2>SMK KRISTEN BPK PENABUR BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Perintis Kemerdekaan No.7 Kota Baru, Tanjung Karang Timur, Kota Bandar Lampung, Lampung 35121 </h3><hr>"+"0721-269622"},
    {lat: -5.415680, lng: 105.266650,
    info: "<h2>SMK YAGSMI BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Hj. Said No. 93 Kota Baru, Tanjung Karang Timur, Kota Bandar Lampung, Lampung 35121 </h3><hr>"+"0721-264964"},
    {lat: -5.416307, lng: 105.267968,
    info: "<h2>SMK YAPENA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Gajah Mada No. 34 Kota Baru, Tanjung Karang Timur, Kota Bandar Lampung, Lampung 35121 </h3><hr>"+"0721-256864"},
    {lat: -5.422369, lng: 105.265000,
    info: "<h2>SMK SMK UTAMA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Jenderal Sudirman No. 39, Rawalaut, Tanjung Karang Timur, Kota Bandar Lampung, Lampung 35127 </h3><hr>"+"0721-261387"},
    {lat: -5.420751, lng: 105.323896,
    info: "<h2>SMK FAJAR MULYA ISLAM BANDAR LAMPUNG LAMPUNG</h2><hr>"+"<h3> Jl. Drs. H. Suharto No 17 C, Campang Raya, Tanjung Karang Timur, Kota Bandar Lampung, Lampung 35122  </h3><hr>"},
    {lat: -5.392920, lng: 105.299992,
    info: "<h2>SMK FARMASI CENDIKIA FARMA HUSADA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Jend. Sudirman No.86, Rawa Laut, Tanjung Karang Timur, Kota Bandar Lampung, Lampung 35148 </h3><hr>"+"0721-774471"+"<a href='http://smkfarmasi-cendikiafarmahusada.sch.id/' target='blank'>smkfarmasi-cendikiafarmahusada.sch.id/</a>"},
    {lat: -5.397966, lng: 105.263038,
    info: "<h2>SMK AZZA WA JALLA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Pulau Enggano-Tirtayasa No. 99, Kel. Sukabumi, Kota Bandar Lampung, Lampung 35122 </h3><hr>"+"0812-2419-1313"},
    {lat: -5.435017, lng: 105.261661,
    info: "<h2>SMK SATU NUSA 1 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Cut Mutia No. 19A, Gulak Galik, Teluk Betung Utara, Kota Bandar Lampung, Lampung 35214 </h3><hr>"+"0721-470661"},
    {lat: -5.444587, lng: 105.265998,
    info: "<h2>SMK TAMAN SISWA TELUK BETUNG BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Wr Supratman No.74 Kupang Kota, Teluk Betung Utara, Kota Bandar Lampung, Lampung 35211 </h3><hr>"+"0721-475449"},
    {lat: -5.435103, lng: 105.261584,
    info: "<h2>SMK SATU NUSA 2 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Cut Mutia No.19A, Gulak Galik, Teluk Betung Utara, Kota Bandar Lampung, Lampung 35214 </h3><hr>"+"0721-473555"},
    {lat: -5.435603, lng: 105.258946,
    info: "<h2>SMK GUNA DHARMA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Cut Mutiah Gg. Haniah No. 10, Gulak Galik, Teluk Betung Utara, Kota Bandar Lampung, Lampung 35214 </h3><hr>"+"0721-480826"},
    {lat: -5.425482, lng: 105.250573,
    info: "<h2>SMK MUHAMMADIYAH 1 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Wolter Monginsidi No. 66B, Pengajaran, Teluk Betung Utara, Kota Bandar Lampung, Lampung 35215 </h3><hr>"+"0721-255667"},
    {lat: -5.434490, lng: 105.261092,
    info: "<h2>SMK SATU NUSA 3 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Cut Mutia No.19 A, Gulak-Galik, Teluk Betung Utara, Kota Bandar Lampung, Lampung 35214 </h3><hr>"+"0721-470663"},
    {lat: -5.419421, lng: 105.245202 ,
    info: "<h2>SMK PGRI 2 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Khairil Anwar No.79 Durian Payung, Tanjung Karang Pusat, Kota Bandar Lampung, Lampung 35116 </h3><hr>"+"(0721) 263951"},
    {lat: -5.417573, lng: 105.261950,
    info: "<h2>SMK ARJUNA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Tulang Bawang No.35 Enggal, Tanjung Karang Pusat, Kota Bandar Lampung, Lampung 35118 </h3><hr>"+"0721-264162"},
    {lat: -5.414299, lng: 105.256037,
    info: "<h2>SMK TAMAN KARYA TANJUNGKARANG BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Jend. Suprapto No. 82, Pelita, Tanjung Karang Pusat, Kota Bandar Lampung, Lampung 35117 </h3><hr>"+"0721-251874"},
    {lat: -5.419432, lng: 105.243746,
    info: "<h2>SMK TRISAKTI BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Cut Nyak Dien Gg. Surya No. 87, Durian Payung, Tanjung Karang Pusat, Kota Bandar Lampung, Lampung 35116 </h3><hr>"+"0721-263915"},
    {lat: -5.386902, lng: 105.249148,
    info: "<h2>SMK BHAKTI UTAMA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Panglima Polim No.2A, Segalamider, Tanjung Karang Barat, Kota Bandar Lampung, Lampung 35152 </h3><hr>"+"0721-704503"},
    {lat: -5.400190, lng: 105.247301,
    info: "<h2>SMK FARMASI KESUMA BANGSA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl.Imam Bonjol, Gg.Nangka, No.3 – Gedung Air, Tanjung Karang Barat, Kota Bandar Lampung, Lampung 35151 </h3><hr>"+"(0721) 263014"},
    {lat: -5.374821, lng: 105.265886 ,
    info: "<h2>SMK BHINEKA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Sultan Haji No.28B, Labuhan Ratu, Kedaton, Kota Bandar Lampung, Lampung 35142 </h3><hr>"+"0721-702263"},
    {lat: -5.378474, lng: 105.252180,
    info: "<h2>SMK MUHAMMADIYAH 2 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Zainal Abidin Pa No.14 Labuhanratu, Kedaton, Kota Bandar Lampung, Lampung 35142  </h3><hr>"+"0721-788119"},
    {lat: -5.383359, lng: 105.267574,
    info: "<h2>SMK SURYA DHARMA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Ki Maja Gg Pertama No.1 Way Halim, Kedaton, Kota Bandar Lampung, Lampung 35141 </h3><hr>"+"0721-783787"},
    {lat: -5.394980, lng: 105.255049,
    info: "<h2>SMK BINA MULYA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Badak No. 335A, Sukamenanti, Kedaton, Kota Bandar Lampung, Lampung 35146 </h3><hr>"+"0721-786540"},
    {lat: -5.417709, lng: 105.261768,
    info: "<h2>SMK PENERBANGAN LAMPUNG</h2><hr>"+"<h3> Jl. Sultan Agung No.47 Kedaton, Kedaton, Kota Bandar Lampung, Lampung 35141 </h3><hr>"+"0721-701597"},
    {lat: -5.382538, lng: 105.293633,
    info: "<h2>SMK BINA LATIH KARYA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Sentot Ali Basya No. 14, Way Dadi, Sukarame, Kota Bandar Lampung, Lampung 35131 </h3><hr>"+"0721-7402062"},
    {lat: -5.392460, lng: 105.284428,
    info: "<h2>SMK KRIDAWISATA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Urip Sumoharjo Gg. Prajurit No. 1, Sukarame, Kota Bandar Lampung, Lampung 35131 </h3><hr>"+"0721-700541"},
    {lat: -5.382010, lng: 105.292866,
    info: "<h2>SMK PGRI 4 BANDAR LAMPUNG LAMPUNG</h2><hr>"+"<h3> Jl. Letkol H. Endro Suratmin No.33 Waydadi, Sukarame, Kota Bandar Lampung, Lampung 35131 </h3><hr>"+"0721-7402165"},
    {lat: -5.393407, lng: 105.274963,
    info: "<h2>SMK SATRIA BAHARI BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Raden Pemuka No.7 Gunung Sulah, Sukarame, Kota Bandar Lampung, Lampung 35136 </h3><hr>"+"0721-707848"},
    {lat: -5.389314, lng: 105.208733,
    info: "<h2>SMK PERSADA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Imam Bonjol Km 11 No.8, Kemiling Permai, Kemiling, Kota Bandar Lampung, Lampung 35153 </h3><hr>"+"0721-270223"},
    {lat: -5.399200, lng: 105.208646,
    info: "<h2>SMK SAMUDERA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Teuku Cik Ditiro F2 No. 14 Beringin Raya, Kemiling, Kota Bandar Lampung, Lampung 35158 </h3><hr>"+"0721-270327"},
    {lat: -5.372272, lng: 105.246559,
    info: "<h2>SMK 2 MEI BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Abdul Muis No.18 Gedung Meneng, Rajabasa, Kota Bandar Lampung, Lampung 35145 </h3><hr>"+"0721-703852"+"<a href='http://www.smk2mei-bdl.sch.id/' target='blank'>smk2mei-bdl.sch.id/</a>"},
    {lat: -5.353953, lng: 105.245743,
    info: "<h2>SMK DHARMA UTAMA RAJABASA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl.Perum Polri Padat Karya No.17, Raja Basa Jaya, Rajabasa, Kota Bandar Lampung, Lampung 35144 </h3><hr>"+"0721-707864"},
    {lat: -5.372162, lng: 105.276908,
    info: "<h2>SMK GAJAH MADA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Soekarno-Hatta No. 1, Tanjung Senang, Kota Bandar Lampung, Lampung 35141 </h3><hr>"+"0721-783770"},
    {lat: -5.362366, lng: 105.278414,
    info: "<h2>SMK YP 57 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl.Letjen Ryacudu, Way Dadi, Sukarame, Kota Bandar Lampung, Lampung 35131 </h3><hr>"+"0721-703591"},
    {lat: -5.406301, lng: 105.277054,
    info: "<h2>SMK PGRI 1 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. P. Antasari No. 105, Tanjung Baru, Sukabumi, Kota Bandar Lampung, Lampung 35122 </h3><hr>"+"0721-257306"},
    {lat: -5.394457, lng: 105.296757,
    info: "<h2>SMK TARUNA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl Pulau Legundi No 6 Sukabumi, Kota Bandar Lampung, Lampung 35134 </h3><hr>"+"0721-187053"},
    {lat: -5.394368, lng: 105.265883,
    info: "<h2>SMK DWI PANGGA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Pejajaran No. 4, Jagabaya II, Way Halim, Kota Bandar Lampung, Lampung 35132 </h3><hr>"+"0721-7309014"},
    {lat: -5.359003, lng: 105.255423,
    info: "<h2>SSMK YADIKA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Soekarno Hatta, Labuhan Dlam, Tanjung Senang, Kota Bandar Lampung, Lampung 35142 </h3><hr>"+"(0721) 784370"},
    {lat: -5.354827, lng: 105.258735,
    info: "<h2>SMK MIFTAHUL ULUM BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Banten, Perwata, Teluk Betung Barat, Kota Bandar Lampung, Lampung 35221  </h3><hr>"+"085664775888"},
    {lat: -5.385996, lng: 105.291266,
    info: "<h2>SMK P RADEN INTAN BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Banten, Perwata, Teluk Betung Barat, Kota Bandar Lampung, Lampung 35221  </h3><hr>"},
    {lat: -5.407405, lng: 105.280020,
    info: "<h2>SMK BINTARA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Banten, Perwata, Teluk Betung Barat, Kota Bandar Lampung, Lampung 35221  </h3><hr>"+"085768782907"},];
	
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