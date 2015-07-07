<?php
include '../../function/connectDB.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Atur Video</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/AdminUtama/style.css">
        <link rel="stylesheet" href="../css/AdminUtama/sidebar.css">
        <link rel="stylesheet" href="../css/AdminUtama/aturVideoInformasiMasjid.css">
    </head>
    <body>
        <?php
        if (isset($_GET['delete'])) {
            if ($_GET['delete'] == 'true') {
                $b = queryDelete('video_informasi_masjid', 'id_video_masjid=' . $_GET['id_video_masjid']);
                header('location:http://localhost/SIMasjid/view/AdminUtama/aturVideoInformasiMasjid.php');
            }
        }
        ?>
        <div class="wrapper">
            <div class="col-full">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="side box span-1-8">

                    </div>
                    <div class="box span-10-3">
                        <div class="kotak-tengah box span-12">
                            <div class="kotak-judul box span-12">
                                Atur Video
                            </div>
                            <div class="tab-cont box span-12">
                                <ul class="tab">
                                    <li>
                                        <a class="informasiMasjid href-white" href="aturVideoInformasiMasjid.php">Video informasi masjid</a>
                                    </li>
                                    <li>
                                        <a class="href-black" href="aturVideoCeramah.php">Video ceramah</a>
                                    </li>
                                    <li>
                                        <a class="href-black" href="aturVideoMusik.php">Video musik</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="box span-12">
                                <!-------------------------------------------------> 

                                <div class="box span-12 video-display active" id="vMasjid">
                                    <div class="wilayah box span-12">
                                        <div class="jarak-bawah box span-6">
                                            <div class="padding-combo box span-2">
                                                Wilayah
                                            </div>
                                            <div class="padding-combo box span-0-5">
                                                :
                                            </div>
                                            <div class="box span-5">
                                                <div class="styled-select">
                                                    <select id="idWilayahMasjid" name="wilayahMasjid" onchange="getMasjidByWilayah(this.value)">
                                                        <option value="">Pilih wilayah</option>
                                                        <?php include '../../function/script/select/wilayahMasjid.php' ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jarak-bawah box span-6">
                                            <div class="padding-combo box span-2">
                                                Masjid
                                            </div>
                                            <div class="padding-combo box span-0-5">
                                                :
                                            </div>
                                            <div class="box span-5">
                                                <div class="styled-select">
                                                    <select id="tambahBeritaMasjid_selectMasjid" name="masjid" onchange="getVideo(this.value,0);">
                                                        <option value="">Pilih masjid</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider kotak-isi box span-12" id="ubahVideoInformasiMasjidAU">
                                        
                                        
                                        
                                    </div>
                                </div>

                                <!------------------------------------------------->
                            </div>
                        </div>        
                    </div>
                </div>
                <div class="footer row">

                </div>
            </div>
        </div>
        <script src="../js/custom.js"></script>
        <script src="../js/jquery-2.1.0.min.js"></script>
        <script src="../js/main.js"></script>
        <script>
                        $(document).ready(function () {
                            $(".header").load("header.php");
                            $(".side").load("sidebar.php");
                        });
        </script>
        <script>
            function confirm_delete() {
                return confirm('Anda yakin akan menghapus video informasi masjid?');
            }
        </script>
    </body>
</html>