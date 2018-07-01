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
    info: "<h2>SMAN 1 BANDAR LAMPUNG</h2><hr>"+"<h3> Jalan Jenderal Sudirman No.41, Rawa Laut, Tanjung Karang Timur, Engal, Rw. Laut, Engal, Kota Bandar Lampung, Lampung 35213 </h3><hr>"+"<a href='http://smansa-bdl.sch.id' target='blank'>smansa-bdl.sch.id</a>" },
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
	{lat: -5.422172, lng: 105.264967,
    info: "<h2>SMA S UTAMA 2 BANDAR LAMPUNG</h2><hr>"+"<h3> JL. JEND. SUDIRMAN NO. 39 Rawa Laut Kec. Enggal Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-253938 <br> "+"smautama2bandarlampung@gmail.com"},
    {lat: -5.412641, lng: 105.268759,
    info: "<h2>SMAS NUSANTARA BANDAR LAMPUNG</h2><hr>"+"<h3> JL. GELATIK TJ. AGUNG NO. 16 TANJUNG AGUNG Kec.Tanjung Karang Timur Kota Bandar Lampung Prov.Lampung </h3><hr>"+"0721-262109 <br> "+"sma_nusantara1984@yahoo.com"},
    {lat: -5.383214, lng: 105.267234,
    info: "<h2>SMAS SURYA DHARMA 2 KEDATON BANDAR LAMPUNG</h2><hr>"+"<h3> JL. KI MAJA GG PERTAMA NO.1 KEDATON Kedaton Kec.Kedaton Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-77065"},
    {lat: -5.358900, lng: 105.254701,
    info: "<h2>SMAS YADIKA BANDAR LAMPUNG</h2><hr>"+"<h3> JL. SOEKARNO HATTA Labuhan Dalam Kec. Tanjung Senang Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-772760 <br> "+"SMA_yadbalam@yahoo.com"},
    {lat: -5.372228, lng: 105.276920,
    info: "<h2>SMA S GAJAH MADA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Soekarno Hatta No. 1 Tanjung Senang, Kec.Tanjung Senang Kota Bandar Lampung Prov. Lampung</h3><hr>"+"0721-788304 <br> "+"smagamabl@gmail.com"},
    {lat: -5.380324, lng: 105.241139,
    info: "<h2>SMAS IT AR RAIHAN BANDAR LAMPUNG</h2><hr>"+"<h3> JL. PURNAWIRAWAN No. 114 Gunung Terang Kec.Langkapura Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-785652 <br> "+"ikhwan82.cool@gmail.com"},
    {lat: -5.420797, lng: 105.247094,
    info: "<h2>SMAS PELITA BANGSA BANDAR LAMPUNG</h2><hr>"+"<h3> JL. P EMIR M NOER NO. 33 Durian Payung Kec. Tanjung Karang Pusat Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-253788 <br> "+"sekolahpelitabangsa@gmail.com"},
    {lat: -5.419383, lng: 105.245521,
    info: "<h2>SMAS ADIGUNA BANDAR LAMPUNG</h2><hr>"+"<h3> JL. KHAIRIL ANWAR NO. 79 Durian Payung Kec. Tanjung Karang Pusat Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-267202 <br> "+"smaadiguna@yahoo.com"},
    {lat: -5.370670, lng: 105.273098,
    info: "<h2>SMAS BODHISATVA BANDAR LAMPUNG</h2><hr>"+"<h3> JL. DR. SETIA BUDI NO. 7/8 Kuripan Kec. Teluk Betung Barat Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-486798 <br> "+"sma.bodhisattva@gmail.com"},
    {lat: -5.422372, lng: 105.264922,
    info: "<h2>SMAS UTAMA 3 BANDAR LAMPUNG</h2><hr>"+"<h3> JL. Jend. Sudirman No. 39 Rawa Laut Kec. Enggal Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-253938 <br> "+"smautama3@gmail.com"},
    {lat: -5.353124, lng: 105.240668,
    info: "<h2>SMA IT MIFTAHUL JANNAH BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Bhayangkara Gg. Kutilang LK.I No.41 Rajabasa Raya Kec. Rajabasa Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-8011641 <br> "+"Khairulsofyan94@gmail.com"},
    {lat: -5.378136, lng: 105.250136,
    info: "<h2>SMA S DARMA BANGSA BANDAR LAMPUNG</h2><hr>"+"<h3> JL ZA PAGAR ALAM 93 A Gedong Meneng Kec. Rajabasa Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-700931 <br> "+"sma@darmabangsa.sch.id"},
    {lat: -5.415092, lng: 105.256397,
    info: "<h2>SMA S YP UNILA BANDAR LAMPUNG</h2><hr>"+"<h3> JL. JEND. SUPRAPTO NO. 88 Enggal Kec. Enggal Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-254502 <br> "+"sma_yp_unila@yahoo.co.id"},
    {lat: -5.397140, lng: 105.266789,
    info: "<h2>SMAS ISLAMIYAH BANDAR LAMPUNG</h2><hr>"+"<h3> JL. LAKS MALAHAYATI NO. 50 Pesawahan Kec. Teluk Betung Selatan Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-480307 <br> "+"rajwarani@yahoo.co.id"},
    {lat: -5.379287, lng: 105.271048,
    info: "<h2>SMAS AL - AZHAR BANDAR LAMPUNG</h2><hr>"+"<h3> JL. M. NUR 1 Sepang Jaya Kec. Labuhan Ratu Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-774107 <br> "+"alazhar3lampung@gmail.com"},
    {lat: -5.391286, lng: 105.209455,
    info: "<h2>SMAS BUDAYA BANDAR LAMPUNG</h2><hr>"+"<h3> JL.PENDIDIKAN NO.32 Sumber Rejo Kec. Kemiling Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-270853 <br> "+"hilmanaziz27@yahoo.co.id"},
    {lat: -5.390308, lng: 105.244475,
    info: "<h2>SMAS DCC GLOBAL SCHOOL BANDAR LAMPUNG</h2><hr>"+"<h3> JL. PAGAR ALAM - MATA RUSYDI LEBAK BUDI Kec. Tanjung Karang Barat Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-774632 <br> "+"smadcc@yahoo.co.id"},
    {lat: -5.362422, lng: 105.278373,
    info: "<h2>SMAS PANGUDI LUHUR BANDAR LAMPUNG</h2><hr>"+"<h3> JL. RATU DIBALAU NO. 176 Tanjung Senang Kec. Tanjung Senang Kota Bandar Lampung Prov. LampungBetung Barat, Kota Bandar Lampung, Lampung 35221  </h3><hr>"+"0721-781139 <br> "+"sma_pangudiluhur_lampung@yahoo.co.id"},
    {lat: -5.417654, lng: 105.261682,
    info: "<h2>SMA S ARJUNA BANDAR LAMPUNG</h2><hr>"+"<h3> JL. TULANG BAWANG No. 35 Enggal Kec. Enggal Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-254273 <br> "+"smaarjuna@yahoo.com"},
    {lat: -5.388905, lng: 105.212012,
    info: "<h2>SMAS AL HUSNA BANDAR LAMPUNG</h2><hr>"+"<h3> Jl Imam Bonjol Gg Terong 31 Kec. Kemiling Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-272816 <br> "+"alhusnalampung@yahoo.co.id"},
    {lat: -5.417712, lng: 105.248070,
    info: "<h2>SMAS PERINTIS 1 BANDAR LAMPUNG</h2><hr>"+"<h3> JL. CUT NYAK DIEN NO.4 PALAPA Kec. Tanjung Karang Pusat Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-263936 <br> "+"smaperintissatu@rocketmail.com"},
    {lat: -5.444587, lng: 105.265998,
    info: "<h2>SMAS TAMAN SISWA TELUK BETUNG UTARA BANDAR LAMPUNG</h2><hr>"+"<h3> JL. WR. SUPRATMAN NO. 74 Kupang Kota Kec. Teluk Betung Utara Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-475448 <br> "+"smatamansiswa_tbu@yahoo.co.id"},
    {lat: -5.433832, lng: 105.288583,
    info: "<h2>SMA S NURUL ISLAM BANDAR LAMPUNG</h2><hr>"+"<h3> JL.GATOT SUBROTO wwGG HI. SY. PAYAKUN 55 Garuntang Kec. Bumi Waras Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-484443 <br> "+"smanuris123@gmail.com"},
    {lat: -5.400430, lng: 105.281821,
    info: "<h2>SMA S TUNAS MEKAR INDONESIA BANDAR LAMPUNG</h2><hr>"+"<h3> JL. ARIF RAHMAN HAKIM NO. 30 Kalibalau Kencana Kec. Kedamaian Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-789801 <br> "+"info@sekolahtmi.org"},
    {lat: -5.418136, lng: 105.246166,
    info: "<h2>SMAS PERINTIS 2 BANDAR LAMPUNG</h2><hr>"+"<h3> JL.KHAIRIL ANWAR N0.106 Durian Payung Kec. Tanjung Karang Pusat Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-255304 <br> "+"sma_prisda2@yahoo.co.id"},
    {lat: -5.416376, lng: 105.272916,
    info: "<h2>SMAS UTAMA 1 BANDAR LAMPUNG</h2><hr>"+"<h3> JL. DR. HARUN KOTABARU KOTA BARU Kec. Tanjung Karang Timur Kota Bandar Lampung Prov. Lampung</h3><hr>"+"0721-259246 <br> "+"smautama1bdl@gmail.com"},
    {lat: -5.368414, lng: 105.224699,
    info: "<h2>SMAS GLOBAL MADANI BANDAR LAMPUNG</h2><hr>"+"<h3> JL. KAVLING RAYA 14 NO. 1 PRAMUKA Rajabasa Kec. Rajabasa Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-8011325 <br> "+"sma.globalmadani@gmail.com"},
    {lat: -5.376362, lng: 105.245473,
    info: "<h2>SMAS TUNAS HARAPAN BANDAR LAMPUNG</h2><hr>"+"<h3> JLK.HI.ZA.P.ALAM NO.43 GEDUNG MENENG Kec. Rajabasa Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-907354 <br> "+"tunasharapan837@yahoo.com"},
    {lat: -5.409081, lng: 105.254371,
    info: "<h2>SMA S DIRGANTARA BANDAR LAMPUNG</h2><hr>"+"<h3> JL. PANGERAN ANTASARI NO. 12 Kedamaian Kec. Kedamaian Kota Bandar Lampung Prov. Lampung </h3><hr>"+"lisawa_wa@ymail.com"},
    {lat: -5.380120, lng: 105.267597,
    info: "<h2>SMA S SRIWIJAYA BANDAR LAMPUNG</h2><hr>"+"<h3> JL. M. BANGSAWAN NO. 12 A LABUHAN RATU Kec. Labuhan Ratu Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-784906 <br> "+"fatrianyl@yahoo.com"},
    {lat: -5.424625, lng: 105.267780,
    info: "<h2>SMA S XAVERIUS BANDAR LAMPUNG </h2><hr>"+"<h3> JL. CENDANA NO. 31 RAWA LAUT Rawa Laut Kec. Enggal Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-267993 <br> "+"xavcen31bdl@yahoo.com"},
    {lat: -5.398335, lng: 105.250161,
    info: "<h2>SMAS 5 Oktober BANDAR LAMPUNG</h2><hr>"+"<h3> Jl.Sam Ratulangi Gg. Anggrek 2 No.3 Gedong Air Kec. Tanjung Karang Barat Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-701520 <br> "+"reni_restadewi@yahoo.co.id"},
    {lat: -5.375856, lng: 105.214060,
    info: "<h2>SMA IT Nurul Falah BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. WA. Rahman Parendoan1 RT 006 Lk 01 BATU PUTU Kec. Teluk Betung Barat Kota Bandar Lampung Prov. Lampung </h3><hr>"+"smait.nurulfalah@yahoo.com"},
    {lat: -5.380326, lng: 105.237139,
    info: "<h2>SMA IT Quran Qordhova BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Purnawirawan Raya Gg. Swadaya VIB No 6 Gunung Terang Kec. Langkapura Kota Bandar Lampung Prov. Lampung </h3><hr>"+"smaquqordhova@gmail.com"},
    {lat: -5.425532, lng: 105.250568,
    info: "<h2>SMAS MUHAMMADIYAH 1 BANDAR LAMPUNG</h2><hr>"+"<h3> JL. WOLTER MONGINSIDI Pengajaran Kec. Teluk Betung Utara Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-251656 <br> "+"muhi32@yahoo.com"},
    {lat: -5.392546, lng: 105.258209,
    info: "<h2>SMAS WIJAYA KEDATON BANDAR LAMPUNG</h2><hr>"+"<h3> JL. KANGURU KEDATONNO. 38 SIDODADI Kec. Kedaton Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-785720 <br> "+"sma_wijaya@yahoo.co.id"},
    {lat: -5.383045, lng: 105.260665,
    info: "<h2>SMA PENYIMBANG BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Teuku Umar Gg. Suci Kedaton Kec. Kedaton Kota Bandar Lampung Prov. Lampung </h3><hr>"+"smapenyimbang@yahoo.co.id"},
    {lat: -5.417971, lng: 105.270447,
    info: "<h2>SMAS BPK PENABUR BANDAR LAMPUNG</h2><hr>"+"<h3> JL. PERINTIS KEMERDEKAAN Kota Baru Kec. Tanjung Karang Timur Kota Bandar Lampung Prov. Lampung </h3><hr>"},
    {lat: -5.417971, lng: 105.270447,
    info: "<h2>SMAS IMMANUEL BANDAR LAMPUNG</h2><hr>"+"<h3> JL. DR. SUSILO NO. 6 Sumur Batu Kec. Teluk Betung Utara Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-253281 <br> "+"smaimmanuellpg@gmail.com"},
    {lat: -5.361629, lng: 105.236878,
    info: "<h2>SMA S AL KAUTSAR BANDAR LAMPUNG</h2><hr>"+"<h3> JL. SOEKARNO HATTA Rajabasa Kec. Rajabasa Kota Bandar Lampung Prov. Lampung </h3><hr>"+"0721-781578 <br> "+"smaal_kautsar@yahoo.co.id"},
    {lat: -5.409361, lng: 105.250474,
    info: "<h2>SMAS Islam Cendikia BANDAR LAMPUNG</h2><hr>"+"<h3> Jl. Tamin Gg. Hi. Abdurahman SUKAJAWA BARU Kec. Tanjung Karang Barat Kota Bandar Lampung Prov. Lampung  </h3><hr>"+"smaislamcendikia@yahoo.co.id"},
    {lat: -5.446790, lng: 105.264019,
    info: "<h2>SMAS YAMAMA BANDAR LAMPUNG</h2><hr>"+"<h3> JL.GIRI JAYA SUMBER AGUNG Kec. Kemiling Kota Bandar Lampung Prov. Lampung </h3><hr>"+"rini.danuwanti@gmail.com"},];
	
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