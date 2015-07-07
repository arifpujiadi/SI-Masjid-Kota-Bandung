<!DOCTYPE html>
<?php
include '../../function/connectDB.php';
$id_berita = $_GET['id_berita_umum'];
$dataBerita = querySelect('*', 'berita_umum', 'id_berita_umum=' . $id_berita, null);
?>
<html>
    <head>
        <title>Berita - Umum</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/PenggunaUmum/beritaUmum-1.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-scrl">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="box">
                        <div class="col">
                            <div class="kotak-tengah box span-12">
                                <div class="judul box span-12">
                                    <?php echo $dataBerita[0]['judul'] ?>
                                </div>
                                <div class="box span-12">
                                    <?php
                                    $date = $dataBerita[0]['tanggal_upload'];
                                    $dateArray = explode(" ", $date);
                                    $tanggal = $dateArray[0];
                                    $jam = $dateArray[1];
                                    ?>
                                    <div class="tanggal box span-12">
                                        Tanggal upload : <?php echo $tanggal ?>, jam upload : <?php echo $jam ?>
                                    </div>
                                </div>

                                <div class="gambar box center span-12">
                                    <a href="<?php echo $dataBerita[0]['gambar'] ?>" target="_blank">
                                        <img class="ukuranGambar" src="<?php echo $dataBerita[0]['gambar'] ?>">
                                    </a>
                                </div>
                                <div class="text box span-12">
                                    <?php echo $dataBerita[0]['isi_berita'] ?>
                                </div>

                                <div class="box span-12">&nbsp;</div>
                                <div class="box span-12">&nbsp;</div>

                                <div class="box span-12">
                                    <table>
                                        <tr>
                                            <td>Editor</td>
                                            <td>&nbsp; : &nbsp;</td>
                                            <td><?php echo $dataBerita[0]['editor'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Sumber</td>
                                            <td>&nbsp; : &nbsp;</td>
                                            <td><?php echo $dataBerita[0]['sumber'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Link</td>
                                            <td>&nbsp; : &nbsp;</td>
                                            <td>
                                                <a class="href-black" target="_blank" href="<?php echo $dataBerita[0]['link'] ?>"><?php echo $dataBerita[0]['link'] ?></a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="box span-12">&nbsp;</div>
                                <div class="button box span-12">
                                    <a class="btn btn-block btn-lg btn-inverse" href="beritaUmum.php">Kembali</a>
                                </div>
                            </div>
                        </div>
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
                $(".footer").load("footer.php");
            });
        </script>
    </body>
</html>
