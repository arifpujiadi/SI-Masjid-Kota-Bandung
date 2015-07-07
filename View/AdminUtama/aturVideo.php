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
        <link rel="stylesheet" href="../css/AdminUtama/aturVideo.css">
    </head>
    <body>
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
                                        <a href="aturVideoInformasiMasjid.php">Video informasi masjid</a>
                                    </li>
                                    <li>
                                        <a href="aturVideoCeramah.php">Video ceramah</a>
                                    </li>
                                    <li>
                                        <a href="aturVideoMusik.php">Video musik</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=" box span-12">
                                <!-------------------------------------------------> 

                                

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
    </body>
</html>