<!DOCTYPE html>
<?php
session_start();
include '../../function/connectDB.php';
$id_berita = $_GET['id_berita'];
$id_masjid = $_GET['id_masjid'];
$dataMasjid = querySelect('*', 'masjid', 'id_masjid='.$id_masjid, null);
$dataBerita = querySelect('*', 'berita_masjid', 'id_berita_masjid='.$id_berita, null);
?>
<html>
    <head>
        <title>Masjid - Berita</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/PenggunaUmum/masjidBerita.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-scrl">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="kotak-kiri box span-3">
                        
                    </div>
                    <div class="kotak-tengah box span-6">
                        <div class="slider box span-12">
                            <div class="judul box span-12">
                                <?php echo $dataBerita[0]['judul'] ?>
                            </div>
                            <div class="gambarBerita box span-12">
                                <a href="<?php echo $dataBerita[0]['gambar'] ?>" target="_blank">
                                    <img class="img-berita" src="<?php echo $dataBerita[0]['gambar'] ?>">
                                </a>
                            </div>
                            <div class="text box span-12">
                                <?php echo $dataBerita[0]['isi_berita'] ?>
                            </div>
                            <?php 
                               if($dataBerita[0]['nama_file'] != "" && $dataBerita[0]['alamat_file'] != ""){
                            ?>
                            <div class="box span-12">
                                <div class="inherit box span-12">
                                    <div class="gambarFile box span-0-5">
                                        <img class="inherit" src="../img/Icon/Download.png">
                                    </div>
                                    <div class="namaFile box span-11">
                                        <a class="href-black" href="<?php echo $dataBerita[0]['alamat_file'] ?>"><?php echo $dataBerita[0]['nama_file'] ?></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                               }else{
                                   echo '';
                               }
                            ?>
                            <div class="kembali box span-12">
                                <a class="btn btn-block btn-lg btn-inverse" href="masjid.php?id_masjid=<?php echo $id_masjid?>"">Masjid</a>
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
        <script src="../js/jquery-2.1.0.min.js"></script>
        <script src="../js/main.js"></script>
        <script>
            $(document).ready(function () {
                $(".header").load("header.php");
                $(".kotak-kiri").load("masjidSideLeft.php?id_masjid=<?php echo $id_masjid ?>");
                $(".kotak-kanan").load("masjidSideRight.php?id_masjid=<?php echo $id_masjid ?>");
                $(".footer").load("footer.php");
            });
        </script>
    </body>
</html>