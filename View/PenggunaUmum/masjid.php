<!DOCTYPE html>
<?php
session_start();
include '../../function/connectDB.php';
$id_masjid = $_GET['id_masjid'];
$dataMasjid = querySelect('*', 'masjid', 'id_masjid=' . $id_masjid, null);
$joinFasilitas = querySelect('*', 'fasilitas_masjid LEFT JOIN fasilitas ON fasilitas_masjid.id_fasilitas = fasilitas.id_fasilitas', 'id_masjid=' . $id_masjid, null);
$joinKegiatan = querySelect('*', 'kegiatan_masjid LEFT JOIN kegiatan ON kegiatan_masjid.id_kegiatan = kegiatan.id_kegiatan', 'id_masjid=' . $id_masjid, null);
$kegiatanRutin = querySelect('*', 'kegiatan_rutin', 'id_masjid=' . $id_masjid, null)
?>
<html>
    <head>
        <title>Masjid - <?php echo $dataMasjid[0]['nama_masjid'] ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/PenggunaUmum/jquery-ui-1.10.3.css">
        <link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css">
        <link rel="stylesheet" href="../js/fancybox/helpers/jquery.fancybox-thumbs.css">
        <link rel="stylesheet" href="../css/PenggunaUmum/masjid.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-scrl">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="kotak-kiri box span-3">
                        <input hidden type="text" name="id_masjid" value="<?php echo $_GET['id_masjid'] ?>"/>
                    </div>
                    <div class="kotak-tengah box span-6">
                        <div class="slider box span-12">
                            <div class="judul box span-12">
                                Masjid <?php echo $dataMasjid[0]['nama_masjid'] ?>
                            </div>
                            <div class="box span-12">
                                <div class="sub-judul box span-12">
                                    <b>Deskripsi masjid :</b>
                                </div>
                                <div class="text box span-12">
                                    <?php echo $dataMasjid[0]['deskripsi_masjid'] ?>
                                </div>
                            </div>
                            <div class="box span-12">
                                <div class="sub-judul box span-12">
                                    <b>Keunikan :</b>
                                </div>
                                <div class="text box span-12">
                                    <?php echo $dataMasjid[0]['keunikan'] ?>
                                </div>
                            </div>
                            <div class="box span-12">
                                <div class="box span-6">
                                    <div class="judul-ul box span-12">
                                        <b>Kegiatan masjid :</b>
                                    </div>
                                    <div class="text box span-12">
                                        <?php
                                        echo '<ul>';
                                        for ($i = 0; $i < count($joinKegiatan); $i++) {
                                            echo '<li>' . $joinKegiatan[$i]['nama'] . '</li>';
                                        }
                                        echo '</ul>';
                                        ?>
                                    </div>
                                </div>
                                <div class="box span-6">
                                    <div class="judul-ul box span-12">
                                        <b>Fasilitas umum :</b>
                                    </div>
                                    <div class="text box span-12">
                                        <?php
                                        echo '<ul>';
                                        for ($i = 0; $i < count($joinFasilitas); $i++) {
                                            echo '<li>' . $joinFasilitas[$i]['nama'] . '</li>';
                                        }
                                        echo '</ul>';
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if (count($kegiatanRutin) != 0) {
                                ?>
                                <div class="tabel box span-9">
                                    <div class="sub-judul box span-12">
                                        <b>Kegiatan rutin :</b>
                                    </div>
                                    <div class="box span-12">
                                        <table>
                                            <?php
                                            for ($i = 0; $i < count($kegiatanRutin); $i++) {
                                                echo '<tr>';
                                                echo '<td>' . $kegiatanRutin[$i]['nama'] . '</td>';
                                                echo'<td>' . $kegiatanRutin[$i]['hari'] . '</td>';
                                                echo '<td>' . $kegiatanRutin[$i]['jam_mulai'] . ' - ' . $kegiatanRutin[$i]['jam_selesai'] . '</td>';
                                                echo '</tr>';
                                            }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                                <?php
                            }else{
                                echo '';
                            }
                            ?>
                            <div class="struktur box span-12">
                                <?php
                                $gambarStruktur = $dataMasjid[0]['struktur_organisasi'];
                                $struktur0 = '
                                <div class="sub-judul box span-12">
                                    <b>Struktur organisasi :</b>
                                </div>';
                                $struktur1 = '<div class="box span-12"><a href="';
                                $struktur2 = '" target="_blank"><img class="gambar-struktur struktur" src="';
                                $struktur3 = ' "></a></div>';

                                if ($gambarStruktur != null) {
                                    echo $struktur0;
                                    echo $struktur1;
                                    echo $gambarStruktur;
                                    echo $struktur2;
                                    echo $gambarStruktur;
                                    echo $struktur3;
                                } else {
                                    echo '';
                                }
                                ?>
                            </div>
                            <div class="box span-12">
                                <div class="sub-judul box span-12">
                                    <b>Peta lokasi masjid :</b>
                                </div>
                                <div class="lokasi box span-12" id="map-canvas">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kotak-kanan box span-3">

                    </div>
                </div>
                <div class="footer row">

                </div>
            </div>
        </div>
        <script src="../js/custom.js"></script>
        <script src="../js/jquery-2.1.0.min.js"></script>
        <script src="../js/jquery-ui-1.10.3.min.js"></script>
        <script src="../js/fancybox/jquery.fancybox.js"></script>
        <script src="../js/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
        <script src="../js/main.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNI9DqfA0Hdaycx7k7yzbXwnqju1rYut0&type=geocode&libraries=places"></script>
        <script>
            $(document).ready(function () {
                $(".header").load("header.php");
                $(".kotak-kiri").load("masjidSideLeft.php?id_masjid=<?php echo $id_masjid ?>");
                $(".kotak-kanan").load("masjidSideRight.php?id_masjid=<?php echo $id_masjid ?>");
                $(".footer").load("footer.php");
            });

        <?php if (!empty($dataMasjid[0]['latitude']) && !empty($dataMasjid[0]['longitude'])): ?>
                var map;

                function initialize() {
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(function (position) {
                            setMap(<?php echo $dataMasjid[0]['latitude']; ?>, <?php echo $dataMasjid[0]['longitude']; ?>);
                        }, function () {
                            handleNoGeoLocation(true);
                        })
                    } else {
                        handleNoGeoLocation(false);
                    }
                }

                function setMap(lat, lng) {
                    var mapCanvas = document.getElementById('map-canvas');
                    var myLatLng = new google.maps.LatLng(lat, lng);
                    var mapOptions = {
                        zoom: 16,
                        center: myLatLng,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    }

                    map = new google.maps.Map(mapCanvas, mapOptions);

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        animation: google.maps.Animation.DROP
                    });

                    var infowindow = new google.maps.InfoWindow({
                        content: 'Masjid <?php echo $dataMasjid[0]['nama_masjid']; ?>'
                    });
                    google.maps.event.addListener(marker, 'click', function () {
                        infowindow.open(map, marker);
                    });

                    traffic = new google.maps.TrafficLayer();
                    traffic.setMap(map);
                }

                function handleNoGeolocation(errorFlag) {
                    if (errorFlag) {
                        var content = 'Error: The Geolocation service failed.';
                    } else {
                        var content = 'Error: Your browser doesn\'t support geolocation.';
                    }

                    var options = {
                        map: map,
                        position: new google.maps.LatLng(60, 105),
                        content: content
                    };

                    var infowindow = new google.maps.InfoWindow(options);
                    map.setCenter(options.position);
                }

                google.maps.event.addDomListener(window, 'load', initialize);
    <?php else: ?>
                $('#map-canvas').html('<h4>Lokasi masjid tidak ditemukan</h4>');
    <?php endif; ?>
        </script>
    </body>
</html>