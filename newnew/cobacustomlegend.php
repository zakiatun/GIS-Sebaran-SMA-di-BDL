
<!DOCTYPE html>
<html>
  <head>
    <title>Custom Legend</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>

   #map {
    background-color: gray;
    width: 100%;
    height: 400px;
}
      #legend {
        font-family: Arial, sans-serif;
        background: #fff;
        opacity: 2px;
        padding: 10px;
        margin: 10px;
        border: 3px solid;
        border-color:powderblue;
      }
      #legend h3 {
        margin-top: 0;
      }
      #legend img {
        vertical-align: middle;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <div id="legend"><h5>Keterangan</h5></div>
    <script>
      var map;
      function initMap() {
        var markers=[];
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          //center: new google.maps.LatLng(-33.91722, 151.23064),
		  // the old one is in UNSW, Australia
		  // change it into UIN Suska: 101.35475,0.46559
          center: new google.maps.LatLng(-5.397140,  105.266789),
          mapTypeId: 'roadmap',
        
        });
        var iconBase = 'img/';
        var icons = {
          sman: {
            name: 'sman',
            icon: iconBase + 'sman.png'
          },
          smas: {
            name: 'smas',
            icon: iconBase + 'smas.png'
          },
          smkn: {
            name: 'smkn',
            icon: iconBase + 'smkn.png'
          },
          smks: {
            name: 'smks',
            icon: iconBase + 'smks.png'
          },
          man: {
            name: 'man',
            icon: iconBase + 'man.png'
          },
          mas: {
            name: 'mas',
            icon: iconBase + 'mas.png'
          }
        };


        function addMarker(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
		  // since not every feature has content, only add infoWindow when content exist
		  if(feature.content){
			  var marker_infoWindow = new google.maps.InfoWindow({
				content: feature.content
			  });
			  marker.addListener('click', function() {
				marker_infoWindow.open(map, marker);
			  })
            
          }


        }

        var features = [
          {
            position: new google.maps.LatLng(-5.422571, 105.265161),
			content: '<h4>SMAN 1 BANDAR LAMPUNG</h4><hr>'+'<h5> Jalan Jenderal Sudirman No.41, Rawa Laut, Tanjung Karang Timur, Engal, Rw. Laut, Engal, Kota Bandar Lampung, Lampung 35213 </h5><hr>'
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=1' target='blank'>detail</a>'",
            type: 'sman'
          }, {
            position: new google.maps.LatLng(-5.427049, 105.254837),
			content: "<h2>SMAN 2 BANDAR LAMPUNG</h2><hr>"+"<h3> Jalan Amir Hamzah No. 1, Gotong Royong, Tanjung Karang Pusat, Gotong Royong, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119 </h3><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=4' target='blank'>detail</a>",
            type: 'sman'
          }, {
            position: new google.maps.LatLng(-5.419214, 105.244381),
            content: "<h4>SMAN 3 BANDAR LAMPUNG</h4><hr>"+"<h5> Jalan Khairil Anwar No.30, Durian Payung, Tanjung Karang Pusat, Durian Payung, Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35214 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=5' target='blank'>detail</a>",
            type: 'sman'
          }, {
            position: new google.maps.LatLng( -5.435694, 105.270253),
            content:"<h4>SMAN 4 BANDAR LAMPUNG</h4><hr>"+"<h5> Jl. Dr. Cipto Mangunkusumo, No 88, Teluk Betung, Kupang Teba, Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35228 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=6' target='blank'>detail</a>",
            type: 'sman'
          }, {
            position: new google.maps.LatLng( -5.378912, 105.284764),
            content:"<h4>SMAN 5 BANDAR LAMPUNG</h4><hr>"+"<h5> Jalan Soekarno Hatta, Way Dadi, Sukarame, Way Dadi, Sukarame, Kota Bandar Lampung, Lampung 35132 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=7' target='blank'>detail</a>",
            type: 'sman'
          },{
            position: new google.maps.LatLng(  -5.438214,105.296496),
            content:"<h4>SMAN 6 BANDAR LAMPUNG</h4><hr>"+"<h5>  Jl. KH. Agus Anang No.35, Ketapang, Tlk. Betung Sel., Kota Bandar Lampung, Lampung 35245 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=8' target='blank'>detail</a>",
            type: 'sman'
          }, {
            position: new google.maps.LatLng(  -5.404216, 105.201355),
            content:"<h4>SMAN 7 BANDAR LAMPUNG</h4><hr>"+"<h5> Jalan Teuku Cik Ditro No.2, Beringin Raya, Kemiling, Beringin Raya, Kemiling, Kota Bandar Lampung, Lampung 35158 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=9 target='blank'>detail</a>",
            type: 'sman'
          }, {
            position: new google.maps.LatLng(  -5.449391,105.257924),
            content:"<h4>SMAN 8 BANDAR LAMPUNG</h4><hr>"+"<h5> Jalan LAKSAMANA MALAHAYATI No.10, Talang, Teluk Betung Selatan, Talang, Tlk. Betung Sel., Bandar Lampung, Lampung 35229 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=10 target='blank'>detail</a>",
            type: 'sman'
          }, {
            position: new google.maps.LatLng(  -5.389186, 105.249201),
            content:"<h4>SMAN 9 BANDAR LAMPUNG</h4><hr>"+"<h5>  Jalan Panglima Polim No.18, Segala Mider, Tanjung Karang Barat, Segala Mider, Tj. Karang Bar., Kota Bandar Lampung, Lampung 35152 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=11' target='blank'>detail</a>",
            type: 'sman'
          }, {
            position: new google.maps.LatLng(-5.428743,  105.275725),
			content:  "<h4>SMAN 10 BANDAR LAMPUNG</h4><hr>"+"<h5> Jalan sman 10: Jalan GATOT SUBROTO No.81, Tanjung Gading, North Teluk Betung, Kedamaian, Tj. Gading, Kedamaian, Kota Bandar Lampung, Lampung 35226 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=12' target='blank'>detail</a>",
            type: 'sman'
          }, {
            position: new google.maps.LatLng( -5.472951,105.243144),
			content: "<h4>SMAN 11 BANDAR LAMPUNG</h4><hr>"+"<h5> JL. RE. Martadinata, Perwata, Tlk. Betung Tim., Kota Bandar Lampung, Lampung 35231 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=13' target='blank'>detail</a>",
            type: 'sman'
          }, {
            position: new google.maps.LatLng(-5.375898,  105.311003),
            content:"<h4>SMAN 12 BANDAR LAMPUNG</h4><hr>"+"<h5> Jalan Haji Endro Suratmin, Sukarame, Kota Bandar Lampung, Lampung 35131 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=14' target='blank'>detail</a>",
            type: 'sman'
          }, {
            position: new google.maps.LatLng(-5.346666, 105.256170),
            content:"<h4>SMAN 13 BANDAR LAMPUNG</h4><hr>"+"<h5> Jl. Padat Karya, Sinar Harapan, Rajabasa Jaya, Rajabasa, Kota  Bandar Lampung, Lampung 35141 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=15' target='blank'>detail</a>",
            type: 'sman'
          }, {
            position: new google.maps.LatLng(-5.379955,105.212618),
            content:"<h4>SMAN 14 BANDAR LAMPUNG</h4><hr>"+"<h5> Jl. Perum Bukit Kemiling Permai, Kemiling Permai, Kemiling,  Kota Bandar Lampung, Lampung 35152 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=16' target='blank'>detail</a>",
            type: 'sman'
          }, {
            position: new google.maps.LatLng(-5.360553, 105.267474),
            content:"<h4>SMAN 15 BANDAR LAMPUNG</h4><hr>"+"<h5> Jl. Turi Raya, Labuhan Dalam, Tj. Senang, Kota Bandar Lampung, Lampung 35141 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=17' target='blank'>detail</a>",
            type: 'sman'
          }, {
            position: new google.maps.LatLng(-5.402855, 105.229122),
            content:"<h4>SMAN 16 BANDAR LAMPUNG</h4><hr>"+"<h5> Jalan DARUSSALAM, Susunan Baru, Tanjung Karang, Langkapura,  Kota Bandar Lampung, Lampung 35111 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=18' target='blank'>detail</a>",
            type: 'sman'
          },{
            position: new google.maps.LatLng(-5.463311,  105.324735),
            content:"<h4>SMAN 17 BANDAR LAMPUNG</h4><hr>"+"<h5> Jl. Soekarno - Hatta, Pidada, Panjang, Kota Bandar Lampung,  Lampung 35241 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=19' target='blank'>detail</a>",
            type: 'sman'
          },{
            position: new google.maps.LatLng(-5.463311,  105.324735),
            content:"<h4>SMAN 17 BANDAR LAMPUNG</h4><hr>"+"<h5> Jl. Soekarno - Hatta, Pidada, Panjang, Kota Bandar Lampung,  Lampung 35241 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=19' target='blank'>detail</a>",
            type: 'sman'
          },{
            position: new google.maps.LatLng(-5.422172, 105.264967),
            content:"<h4>SMA S UTAMA 2 BANDAR LAMPUNG</h4><hr>"+"<h5> JL. JEND. SUDIRMAN NO. 39 Rawa Laut Kec. Enggal Kota Bandar Lampung Prov. Lampung </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=20' target='blank'>detail</a>",
            type: 'smas'
          },{
            position: new google.maps.LatLng(-5.412641, 105.268759),
            content:"<h4>SMAS NUSANTARA BANDAR LAMPUNG</h4><hr>"+"<h5> JL. GELATIK TJ. AGUNG NO. 16 TANJUNG AGUNG Kec.Tanjung Karang Timur Kota Bandar Lampung Prov.Lampung </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=21' target='blank'>detail</a>",
            type: 'smas'
          },{
            position: new google.maps.LatLng(-5.383214, 105.267234),
            content: "<h4>SMAS SURYA DHARMA 2 KEDATON BANDAR LAMPUNG</h4><hr>"+"<h5> JL. KI MAJA GG PERTAMA NO.1 KEDATON Kedaton Kec.Kedaton Kota Bandar Lampung Prov. Lampung </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=22' target='blank'>detail</a>",
            type: 'smas'
          },{
            position: new google.maps.LatLng( -5.358900,105.254701),
            content: "<h4>SMAS YADIKA BANDAR LAMPUNG</h4><hr>"+"<h5> JL. SOEKARNO HATTA Labuhan Dalam Kec. Tanjung Senang Kota Bandar Lampung Prov. Lampung </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=24' target='blank'>detail</a>",
            type: 'smas'
          },{
            position: new google.maps.LatLng(-5.372228,105.276920),
            content: "<h4>SMA S GAJAH MADA BANDAR LAMPUNG</h4><hr>"+"<h5> Jl. Soekarno Hatta No. 1 Tanjung Senang, Kec.Tanjung Senang Kota Bandar Lampung Prov. Lampung</h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=25' target='blank'>detail</a>",
            type: 'smas'
          },{
            position: new google.maps.LatLng(-5.380324, 105.241139),
            content: "<h4>SMAS IT AR RAIHAN BANDAR LAMPUNG</h4><hr>"+"<h5> JL. PURNAWIRAWAN No. 114 Gunung Terang Kec.Langkapura Kota Bandar Lampung Prov. Lampung </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=26' target='blank'>detail</a>",
            type: 'smas'
          },{
            position: new google.maps.LatLng(-5.420797, 105.247094),
            content: "<h4>SMAS PELITA BANGSA BANDAR LAMPUNG</h4><hr>"+"<h5> JL. P EMIR M NOER NO. 33 Durian Payung Kec. Tanjung Karang Pusat Kota Bandar Lampung Prov. Lampung </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=27' target='blank'>detail</a>",
            type: 'smas'
          },{
            position: new google.maps.LatLng(-5.419383, 105.245521),
            content: "<h4>SMAS ADIGUNA BANDAR LAMPUNG</h4><hr>"+"<h5> JL. KHAIRIL ANWAR NO. 79 Durian Payung Kec. Tanjung Karang Pusat Kota Bandar Lampung Prov. Lampung </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=28' target='blank'>detail</a>",
            type: 'smas'
          },{
            position: new google.maps.LatLng(-5.370670, 105.273098),
            content:"<h4>SMAS BODHISATVA BANDAR LAMPUNG</h4><hr>"+"<h5> JL. DR. SETIA BUDI NO. 7/8 Kuripan Kec. Teluk Betung Barat Kota Bandar Lampung Prov. Lampung </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=29' target='blank'>detail</a>",
            type: 'smas'
          },{
            position: new google.maps.LatLng( -5.422372, 105.264922),
            content:"<h4>SMAS UTAMA 3 BANDAR LAMPUNG</h4><hr>"+"<h5> JL. Jend. Sudirman No. 39 Rawa Laut Kec. Enggal Kota Bandar Lampung Prov. Lampung </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=30' target='blank'>detail</a>",
            type: 'smas'
          },{
            position: new google.maps.LatLng( -5.417654, 105.261682),
            content:"<h4>SMA S ARJUNA BANDAR LAMPUNG</h4><hr>"+"<h5> JL. TULANG BAWANG No. 35 Enggal Kec. Enggal Kota Bandar Lampung Prov. Lampung </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=31' target='blank'>detail</a>",
            type: 'smas'
          },{
            position: new google.maps.LatLng( -5.388905, 105.212012),
            content:"<h4>SMAS AL HUSNA BANDAR LAMPUNG</h4><hr>"+"<h5> Jl Imam Bonjol Gg Terong 31 Kec. Kemiling Kota Bandar Lampung Prov. Lampung </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=32' target='blank'>detail</a>",
            type: 'smas'
          },{
            position: new google.maps.LatLng( -5.417712,105.248070),
            content:"<h4>SMAS PERINTIS 1 BANDAR LAMPUNG</h4><hr>"+"<h5> JL. CUT NYAK DIEN NO.4 PALAPA Kec. Tanjung Karang Pusat Kota Bandar Lampung Prov. Lampung </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=33' target='blank'>detail</a>",
            type: 'smas'
          },{
            position: new google.maps.LatLng(  -5.444587, 105.265998),
            content:"<h4>SMAS TAMAN SISWA TELUK BETUNG UTARA BANDAR LAMPUNG</h4><hr>"+"<h5> JL. WR. SUPRATMAN NO. 74 Kupang Kota Kec. Teluk Betung Utara Kota Bandar Lampung Prov. Lampung </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=34' target='blank'>detail</a>",
            type: 'smas'
          },{
            position: new google.maps.LatLng(  -5.383045, 105.260665),
            content:"<h4>SMAS TAMAN SISWA TELUK BETUNG UTARA BANDAR LAMPUNG</h4><hr>"+"<h5> JL. WR. SUPRATMAN NO. 74 Kupang Kota Kec. Teluk Betung Utara Kota Bandar Lampung Prov. Lampung </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=34' target='blank'>detail</a>",
            type: 'smas'
          },{
            position: new google.maps.LatLng(  -5.423338,105.256029),
            content:"<h4>SMAS BPK PENABUR BANDAR LAMPUNG</h4><hr>"+"<h5> JL. PERINTIS KEMERDEKAAN Kota Baru Kec. Tanjung Karang Timur Kota Bandar Lampung Prov. Lampung </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=36' target='blank'>detail</a>",
            type: 'smas'
          }, {
            position: new google.maps.LatLng(  -5.429557, 105.26373),
            content:"<h4>SMAS IMMANUEL BANDAR LAMPUNG</h4><hr>"+"<h5> JL. DR. SUSILO NO. 6 Sumur Batu Kec. Teluk Betung Utara Kota Bandar Lampung Prov. Lampung </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=37' target='blank'>detail</a>",
            type: 'smas'
          }, {
            position: new google.maps.LatLng(  -5.393935, 105.279480),
            content: "<h4>	SMK NEGERI 1 BANDAR LAMPUNG </h4><hr>"+"<h5> Jl. P. Morotai No.33 Jagabaya III, Sukabumi, Way Halim, Kota Bandar Lampung, Lampung 35132 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=39' target='blank'>detail</a>",
            type: 'smkn'
          },
          {
            position: new google.maps.LatLng(  -5.363917,105.245401),
            content: "<h4>	SMK NEGERI 2 BANDAR LAMPUNG </h4><hr>"+"<h5> Jl. Prof. Dr. Sumantri Brojonegoro, Rajabasa, Gedung Meneng, Rajabasa, Kota Bandar Lampung, Lampung 35145 </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=40' target='blank'>detail</a>",
            type: 'smkn'
          },   {
            position: new google.maps.LatLng(  -5.422331,105.265902 ),
            content: "<h4>	SMTI TANJUNGKARANG BANDAR LAMPUNG </h4><hr>"+"<h5> Jl. Jend. Sudirman No. 43, Rawa Laut, Tanjung Karang Timur, Kota Bandar Lampung 35127</h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=41' target='blank'>detail</a>",
            type: 'smkn'
          },  {
            position: new google.maps.LatLng( -5.375385, 105.302463  ),
            content: "<h4>	MAN 1 (MODEL) Bandar Lampung </h4><hr>"+"<h5> Jalan Letnan Kolonel Endro Suratmin, Harapan Jaya, Sukarame, Harapan Jaya, Sukarame, Kota Bandar Lampung, Lampung 35131</h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=42' target='blank'>detail</a>",
            type: 'man'
          }, {
            position: new google.maps.LatLng( -5.434603, 105.280001 ),
            content: "<h4>	MAN 2 BANDAR LAMPUNG </h4><hr>"+"<h5> </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newJnew/detail.php?id=43' target='blank'>detail</a>",
            type: 'man'
          },{
            position: new google.maps.LatLng( -5.408995,105.270851 ),
            content:  "<h4>	MA AL JAUHAR BANDAR LAMPUNG </h4><hr>"+"<h5> </h5><hr>"
    +"<a href='http://localhost:8080/GIS-Sebaran-SMA-di-BDL.git/newnew/detail.php?id=45' target='blank'>detail</a>",
            type: 'mas'
          },
          
        ];
        for (var i = 0, feature; feature = features[i]; i++) {
          addMarker(feature);
         
       

        } 
 
        var legend = document.getElementById('legend');
        for (var key in icons) {
          var type = icons[key];
          var name = type.name;
          var icon = type.icon;
          var div = document.createElement('div');
          div.innerHTML = '<img src="' + icon + '"> ' + name;
          legend.appendChild(div);
        }
        map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);
      }
    </script>
    <script src="markerclusterer.js"></script>
   
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w&callback=initMap">
    </script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    
    </div>

 <script src="https://www.gstatic.com/firebasejs/5.0.2/firebase.js"></script>


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
  </body>
</html>