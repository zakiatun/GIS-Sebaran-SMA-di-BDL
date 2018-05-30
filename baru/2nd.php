
<!DOCTYPE html> 
<html> 
<head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SI SEBARAN SMA/SEDERAJAT DI BANDAR LAMPUNG</title>
        <link rel="stylesheet" type="text/css" href="desain.css"/>
        <link rel="stylesheet" type="text/css" href="foto.css"/>
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
    {lat:-5.422571, lng: 105.265161,
    info: "<h2>SMAN 1 BANDAR LAMPUNG</h2><hr>"+"<h3> Jalan Jenderal Sudirman No.41, Rawa Laut, Tanjung Karang Timur, Engal, Rw. Laut, Engal, Kota Bandar Lampung, Lampung 35213 </h3><hr>"+"<a href='http://smansa-bdl.sch.id' target='blank'>smansa-bdl.sch.id</a>"+"<div id=button><a href=#popup >Lihat</a></div><div id=popup> <div class=window><a href=# class=close-button title=Close>X</a><img src= putra1.jpg height= 100% width= 100%> </div> </div>" },
    {lat: -5.427049, lng: 105.254837,
    info: "<h2>SMAN 2 BANDAR LAMPUNG</h2><hr>"+"<h3> Jalan Amir Hamzah No. 1, Gotong Royong, Tanjung Karang Pusat, Gotong Royong, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119 </h3><hr>"+"<a href='http://smanda-bdl.sch.id<' target='blank'>smanda-bdl.sch.id</a>"}, 
    {lat: -5.419214, lng: 105.244381,
    info: "<h2>SMAN 3 BANDAR LAMPUNG</h2><hr>"+"<h3> Jalan Khairil Anwar No.30, Durian Payung, Tanjung Karang Pusat, Durian Payung, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35214 </h3><hr>"+"(0721) 255600"},
    {lat: -5.435694, lng: 105.270253,
    info: "<h2>SMAN 4 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Dr. Cipto Mangunkusumo, No 88, Teluk Betung, Kupang Teba, Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35228 </h3><hr>"+"(0721) 481121"},
    {lat: -5.378912, lng: 105.284764,
    info: "<h2>SMAN 5 BANDAR LAMPUNG</h2><hr>"+"<h3> Jalan Soekarno Hatta, Way Dadi, Sukarame, Way Dadi, Sukarame, Kota Bandar Lampung, Lampung 35132 </h3><hr>"+"<a href='http://sman5-bdl.sch.id<' target='blank'>sman5-bdl.sch.id</a>"},
	{lat: -5.438214, lng: 105.296496,
    info: "<h2>SMAN 6 BANDAR LAMPUNG</h2><hr>"+"<h3>  Jl. KH. Agus Anang No.35, Ketapang, Tlk. Betung Sel., Kota Bandar Lampung, Lampung 35245 </h3><hr>"+"(0721) 3338"},
    {lat: -5.404216, lng: 105.201355,
    info: "<h2>SMAN 7 BANDAR LAMPUNG</h2><hr>"+"<h3> Jalan Teuku Cik Ditro No.2, Beringin Raya, Kemiling, Beringin Raya, Kemiling, Kota Bandar Lampung, Lampung 35158 </h3><hr>"+"(0721) 540270"},
    {lat: -5.449391, lng: 105.257924,
    info: "<h2>SMAN 8 BANDAR LAMPUNG</h2><hr>"+"<h3> Jalan LAKSAMANA MALAHAYATI No.10, Talang, Teluk Betung Selatan, Talang, Tlk. Betung Sel., Bandar Lampung, Lampung 35229 </h3><hr>"+"(0721) 484453"},
    {lat: -5.389186, lng: 105.249201,
    info: "<h2>SMAN 9 BANDAR LAMPUNG</h2><hr>"+"<h3>  Jalan Panglima Polim No.18, Segala Mider, Tanjung Karang Barat, Segala Mider, Tj. Karang Bar., Kota Bandar Lampung, Lampung 35152 </h3><hr>"+"<a href='http://smalan.sch.id<' target='blank'>smalan.sch.id</a>"},
    {lat: -5.428743, lng: 105.275725,
    info: "<h2>SMAN 10 BANDAR LAMPUNG</h2><hr>"+"<h3> Jalan sman 10: Jalan GATOT SUBROTO No.81, Tanjung Gading, North Teluk Betung, Kedamaian, Tj. Gading, Kedamaian, Kota Bandar Lampung, Lampung 35226 </h3><hr>"+"<a href='http://sman10bdl.sch.id<' target='blank'>sman10bdl.sch.id</a>"},
	{lat: -5.472951, lng: 105.243144,
    info: "<h2>SMAN 11 BANDAR LAMPUNG</h2><hr>"+"<h3> JL. RE. Martadinata, Perwata, Tlk. Betung Tim., Kota Bandar Lampung, Lampung 35231 </h3><hr>"+"<a href='http://sman11bandarlampung.sch.id' target='blank'>sman11bandarlampung.sch.id</a>"},
	{lat: -5.375898, lng: 105.311003,
    info: "<h2>SMAN 12 BANDAR LAMPUNG</h2><hr>"+"<h3> Jalan Haji Endro Suratmin, Sukarame, Kota Bandar Lampung, Lampung 35131 </h3><hr>"+"<a href='http://sman12bdl.sch.id' target='blank'>sman12bdl.sch.id</a>"},
	{lat: -5.346666, lng: 105.256170,
    info: "<h2>SMAN 13 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Padat Karya, Sinar Harapan, Rajabasa Jaya, Rajabasa, Kota  Bandar Lampung, Lampung 35141 </h3><hr>"+"0813-8379-0139"},
	{lat: -5.379955, lng: 105.212618,
    info: "<h2>SMAN 14 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Perum Bukit Kemiling Permai, Kemiling Permai, Kemiling,  Kota Bandar Lampung, Lampung 35152 </h3><hr>"+"<a href='http://sman14bl.sch.id' target='blank'>sman14bl.sch.id</a>"},
	{lat: -5.360553, lng: 105.267474,
    info: "<h2>SMAN 15 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Turi Raya, Labuhan Dalam, Tj. Senang, Kota Bandar Lampung, Lampung 35141 </h3><hr>"+"<a href='http://sman15-bdl.sch.id' target='blank'>sman15-bdl.sch.id</a>"},
	{lat: -5.402855, lng: 105.229122,
    info: "<h2>SMAN 16 BANDAR LAMPUNG</h2><hr>"+"<h3> Jalan DARUSSALAM, Susunan Baru, Tanjung Karang, Langkapura,  Kota Bandar Lampung, Lampung 35111 </h3><hr>"+"<a href='http://sman16-bdl.sch.id' target='blank'>sman16-bdl.sch.id</a>"},
	{lat: -5.463311, lng: 105.324735,
    info: "<h2>SMAN 17 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Soekarno - Hatta, Pidada, Panjang, Kota Bandar Lampung,  Lampung 35241 </h3><hr>"+"<a href='http://sman17bdl.sch.id' target='blank'>sman17bdl.sch.id</a>"},
	{lat: -5.393935, lng: 105.279480,
    info: "<h2>SMK NEGERI 1 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. P. Morotai No.33 Jagabaya III, Sukabumi, Way Halim, Kota Bandar Lampung 35132 </h3><hr>"+" 0721-705529 <br> "+"<a href='http://www.smkn1bdl.sch.id/' target='blank'>smkn1bdl.sch.id/</a>"},
	{lat: -5.363917, lng: 105.245401,
    info: "<h2>SMK NEGERI 2 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Prof. Dr. Sumantri Brojonegoro, Rajabasa, Gedung Meneng, Rajabasa, Kota Bandar Lampung 35145 </h3><hr>"+" 0721-701966 <br> "+"<a href='http://smkn2bdl.sch.id/' target='blank'>smkn2bdl.sch.id/</a>"},
	{lat: -5.434605, lng: 105.260757,
    info: "<h2>SMK NEGERI 3 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Cut Mutia No.21 Gulak Galik, Teluk Betung Utara, Kota Bandar Lampung 35214 </h3><hr>"+" 0721-482037 <br> "+"<a href='http://www.smkn3-bdl.sch.id/' target='blank'>smkn3-bdl.sch.id/</a>"},
	{lat: -5.423608, lng: 105.262286,
    info: "<h2>SMK NEGERI 4 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Hos Cokroaminoto No.102 Enggal, Tanjung Karang Pusat, Kota Bandar Lampung 35113 </h3><hr>"+" 0721-261637 <br> "+"<a href='http://smkn4-bdl.sch.id/' target='blank'>smkn4-bdl.sch.id/</a>"},
	{lat: -5.398665, lng: 105.306257,
    info: "<h2>SMK NEGERI 5 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Pangeran Tirtayasa, Sukabumi, Kota Bandar Lampung 35134 </h3><hr>"+" 0721-350870 <br> "+"<a href='http://smkn5blampung.sch.id/' target='blank'>smkn5blampung.sch.id/</a>"},
	{lat: -5.472261, lng: 105.245297,
    info: "<h2>SMK NEGERI 6 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Re. Martadinata, Sukamaju, Teluk Betung Barat, Kota Bandar Lampung 35236 </h3><hr>"+" 0721-488437 <br> "+"<a href='https://smkn6bdl.wordpress.com/' target='blank'>smkn6bdl.wordpress.com/</a>"},
	{lat: -5.377244, lng: 105.312202,
    info: "<h2>SMK NEGERI 7 BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Pendidikan / Malay Raya . Sukarame, Kota Bandar Lampung 35131 </h3><hr>"+" 0721-5610689 <br> "+"<a href='http://smkn7bandarlampung.sch.id/' target='blank'>smkn7bandarlampung.sch.id/</a>"},
	{lat: -5.387751, lng: 105.206516,
    info: "<h2>SMK NEGERI 8 BANDAR LAMPUNG</h2><hr>"+"<h3> JL. Imam Bonjol No. 52 Kemiling, Kota Bandar Lampung 35158 </h3><hr>"+" 081272323236 <br>"+"<a href='https://smkn8bl.sch.id/' target='blank'>smkn8bl.sch.id/</a>"}, 
	{lat: -5.422331, lng: 105.265902,
    info: "<h2>SMTI TANJUNGKARANG BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Jend. Sudirman No. 43, Rawa Laut, Tanjung Karang Timur, Kota Bandar Lampung 35127 </h3><hr>"+" 0721-253383 <br> "+"<a href='http://www.smksmti-bdl.sch.id/' target='blank'>smksmti-bdl.sch.id/</a>"},
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