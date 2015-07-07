<!DOCTYPE html>
<?php
include '../../function/connectDB.php';
$id_masjid = $_GET['id_masjid'];
$dataMasjid = querySelect('*', 'masjid', 'id_masjid=' . $id_masjid, null);
$wilayah = $dataMasjid[0]['id_wilayah'];
$namaWilayah = querySelect('*', 'wilayah', 'id_wilayah=' . $wilayah, null);
?>
<html>
    <head>
        <title>Masjid - Galeri</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/PenggunaUmum/masjidGaleri.css">
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
                                Galeri Masjid
                            </div>
                            <div class="box span-12">
                                <div class="box span-12">
                                    <div class="foto box span-12">
                                        <?php
                                        $dataGaleri = querySelect('*', 'galeri', 'id_masjid=' . $id_masjid, null);
                                        if (isset($_GET['offset'])) {
                                            $offset = (int) $_GET['offset'];
                                        } else {
                                            $offset = 0;
                                        }
                                        $pagination = 0;
                                        for ($i = 0; $i < count($dataGaleri); $i++) {
                                            if ($i >= $offset) {
                                                if ($pagination < 9) {
                                                    ?>

                                                    <div class="box span-4">
                                                        <a class="href-black" href="<?php echo $dataGaleri[$i]['alamat_foto'] ?>" target="_blank">
                                                            <div class="frame box span-12">
                                                                <div class="box span-12">
                                                                    <img src="<?php echo $dataGaleri[$i]['alamat_foto'] ?>">
                                                                </div>
                                                                <div class="judul-foto box span-12">
                                                                    <table>
                                                                        <tr>
                                                                            <td>
                                                                                <?php echo $dataGaleri[$i]['judul_foto'] ?>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <?php
                                                    $pagination++;
                                                } else {
                                                    break;
                                                }
                                            }
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <div class="halaman box span-12">
                                <div class="panah-kiri box span-1">
                                    <?php
                                    $offset_arrow = $offset - 1;
                                    if ($offset_arrow <= 0) {
                                        ?>
                                        <a href="masjidGaleri.php?offset=<?php echo $offset - 9; ?>&id_masjid=<?php echo $id_masjid ?>">
                                            &nbsp;
                                        </a>
                                        <?php
                                    } else if ($offset_arrow > 0) {
                                        ?>
                                        <a href="masjidGaleri.php?offset=<?php echo $offset - 9; ?>&id_masjid=<?php echo $id_masjid ?>">
                                            <img class="panah" src="../img/Panah/Kiri-2.png">
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="box span-10">&nbsp;</div>
                                <?php
                                if ($offset_arrow + 9 < sizeof($dataGaleri)) {
                                    ?>
                                    <div class="panah-kanan box span-1">
                                        <a href="masjidGaleri.php?offset=<?php echo $offset + 9; ?>&id_masjid=<?php echo $id_masjid ?>">
                                            <img class="panah" src="../img/Panah/Kanan-2.png">
                                        </a>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="kembali box span-12">
                                <a class="btn btn-block btn-lg btn-inverse" href="masjid.php?id_masjid=<?php echo $id_masjid ?>">Masjid</a>
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