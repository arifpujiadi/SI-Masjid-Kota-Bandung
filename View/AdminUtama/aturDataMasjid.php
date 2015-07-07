<!DOCTYPE html>
<?php
include '../../function/connectDB.php';
?>
<html>
    <head>
        <title>Atur Data Masjid</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/AdminUtama/style.css">
        <link rel="stylesheet" href="../css/AdminUtama/sidebar.css">
        <link rel="stylesheet" href="../css/AdminUtama/aturDataMasjid.css">
    </head>
    <body>
        <?php
        if (isset($_GET['delete'])) {
            if ($_GET['delete'] == 'true') {
                $tempData = querySelect('*', 'masjid', 'id_masjid=' . $_GET['masjid_id'], null);

                $temp2 = $tempData[0]['foto'];
                $urlFoto = split('http://localhost/SIMasjid/View/', $temp2);

                unlink("../" . $urlFoto[1]);

                $tempFile = querySelect('*', 'file', 'id_masjid=' . $_GET['masjid_id'], null);

                for ($i = 0; $i < count($tempFile); $i++) {
                    $temp2 = $tempFile[$i]['lokasi_file'];
                    $urlFile = split('http://localhost/SIMasjid/View/', $temp2);

                    unlink("../" . $urlFile[1]);
                }



                $b = queryDelete('user', 'id_user=' . $_GET['id_user']);
                $c = queryDelete('masjid', 'id_masjid=' . $_GET['masjid_id']);
                header('location:http://localhost/SIMasjid/view/AdminUtama/aturDataMasjid.php');
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
                                Atur Data Masjid
                            </div>
                            <div class="wilayah box span-12">
                                <div class="jarak-bawah box span-12">
                                    <div class="padding-combo box span-1">
                                        Wilayah
                                    </div>
                                    <div class="padding-combo box span-0-5">
                                        :
                                    </div>
                                    <div class="box span-9">
                                        <div class="styled-select">
                                            <select onchange="ubahMasjidAU(this.value, 0)" id="wil_masjid">
                                                <option value="">Pilih wilayah</option>
                                                <?php include '../../function/script/select/wilayahMasjid.php' ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider kotak-isi box span-12" id="ubahMasjidAU">



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
                    return confirm('Anda yakin akan menghapus data masjid?');
                }
            </script>
    </body>
</html>