<!DOCTYPE html>
<?php
require_once '../../function/connectDB.php';
?>
<html>
    <head>
        <title>Konfirmasi Masjid</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/AdminUtama/style.css">
        <link rel="stylesheet" href="../css/AdminUtama/sidebar.css">
        <link rel="stylesheet" href="../css/AdminUtama/konfirmasiMasjid.css">
    </head>
    <body>
        <?php
        if (isset($_GET['delete'])) {
            if ($_GET['delete'] == 'true') {
                $tempData = querySelect('*', 'masjid', 'id_masjid=' . $_GET['masjid_id'], null);
                $temp1 = $tempData[0]['sertifikat'];
                $urlSerti = split('http://localhost/SIMasjid/View/',$temp1);
                
                $temp2 = $tempData[0]['foto'];
                $urlFoto = split('http://localhost/SIMasjid/View/',$temp2);
                
                unlink("../".$urlSerti[1]);
                unlink("../".$urlFoto[1]);
                
                $b = queryDelete('user', 'id_user=' . $_GET['id_user']);
                $c = queryDelete('masjid', 'id_masjid=' . $_GET['masjid_id']);
                header('location:http://localhost/SIMasjid/view/AdminUtama/konfirmasiMasjid.php');
            }
        }
        ?>
        <?php
        if (isset($_GET['status'])) {
            if ($_GET['status'] == 'true') {
                $tempData = querySelect('*', 'masjid', 'id_masjid=' . $_GET['id_masjid'], null);
                $temp1 = $tempData[0]['sertifikat'];
                $urlSerti = split('http://localhost/SIMasjid/View/',$temp1);
                
                unlink("../".$urlSerti[1]);
                
                $updateValidasi = queryUpdate('masjid', 'validasi=1', 'id_masjid=' . $_GET['id_masjid']);
                header('location:http://localhost/SIMasjid/view/AdminUtama/konfirmasiMasjid.php');
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
                                Konfirmasi Masjid
                            </div>
                            <div class="slider kotak-isi box span-12">
                                <div class="kolom box span-12">
                                    <div class="judul center box span-1">
                                        Nomer
                                    </div>
                                    <div class="judul center box span-1-8">
                                        Wilayah
                                    </div>
                                    <div class="judul center box span-3">
                                        Masjid
                                    </div>
                                    <div class="judul center box span-1-8">
                                        Data masjid
                                    </div>
                                    <div class="judul center box span-1-8">
                                        Sertifikat
                                    </div>
                                    <div class="judul center box span-1-8">
                                        Tolak
                                    </div>
                                    <div class="judul center box span-1-8">
                                        Konfirmasi
                                    </div>
                                </div>
                                <?php
                                $dataMasjid = querySelect('*', 'masjid', 'validasi=0 ORDER BY id_masjid DESC', null);
                                if (isset($_GET['offset'])) {
                                    $offset = (int) $_GET['offset'];
                                } else {
                                    $offset = 0;
                                }
                                $pagination = 0;
                                for ($i = 0; $i < count($dataMasjid); $i++) {
                                    if ($i >= $offset) {
                                        if ($pagination < 5) {
                                            ?>
                                            <div class="baris box span-12">
                                                <div class="nomer center box span-1">
                                                    <?php echo ($i + 1) ?>
                                                </div>
                                                <div class="isi center box span-1-8">
                                                    <?php
                                                    $id_Wilayah = $dataMasjid[$i]['id_wilayah'];
                                                    $dataWilayah = querySelect('*', 'wilayah', 'id_wilayah=' . $id_Wilayah, null);
                                                    $namaWilayah = $dataWilayah[0]['nama_wilayah'];
                                                    echo $namaWilayah
                                                    ?>
                                                </div>
                                                <div class="masjid inherit center box span-3">
                                                    <?php echo $dataMasjid[$i]['nama_masjid'] ?>
                                                </div>
                                                <div class="check center box span-1-8">
                                                    <div class="box span-12">
                                                        <a class="btn-check btn-block-check btn-lg-check btn-inverse-check" href="http://localhost/SIMasjid/view/AdminUtama/isiAturDataMasjid.php?ubah=true&id_user=<?php echo $dataMasjid[$i]['id_user'] ?>&id_masjid=<?php echo $dataMasjid[$i]['id_masjid'] ?>" target="_blank">Lihat data</a>
                                                    </div>
                                                </div>
                                                <div class="check center box span-1-8">
                                                    <div class="box span-12">
                                                        <a class="btn-check btn-block-check btn-lg-check btn-inverse-check" href="<?php echo $dataMasjid[$i]['sertifikat'] ?>" target="_blank">Periksa</a>
                                                    </div>
                                                </div>
                                                <div class="hapus box span-1-8">
                                                    <a class="btn btn-block btn-lg-hapus btn-hapus-inverse" href="konfirmasiMasjid.php?delete=true&masjid_id=<?php echo $dataMasjid[$i]['id_masjid']; ?>&id_user=<?php echo $dataMasjid[$i]['id_user']; ?>" onClick="return confirm_delete()">
                                                        <img src="../img/Notification/delete.png">
                                                    </a>
                                                </div>
                                                <div class="aksi box span-1-8">
                                                    <a class="btn btn-block btn-lg btn-inverse" href="konfirmasiMasjid.php?status=true&id_masjid=<?php echo $dataMasjid[$i]['id_masjid']; ?>" onclick="return confirm('Anda yakin akan menambah masjid kepada SIMasjid?');">
                                                        <div class="plus box span-12" style="">
                                                            <img class="tambah" src="../img/Notification/insert.png">
                                                        </div>
                                                        <div class="plusSim box span-12" style="">
                                                            <img class="sim" src="../img/SIM/plusSim.png">
                                                        </div>                              
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                            $pagination++;
                                        } else {
                                            break;
                                        }
                                    }
                                }
                                ?>

                                <div class="button box span-12">
                                    <div class="panah-kiri box span-1">
                                        <?php
                                        $offset_arrow = $offset - 1;
                                        if ($offset_arrow <= 0) {
                                            ?>
                                            <a href="konfirmasiMasjid.php?offset=<?php echo $offset - 5; ?>">
                                                &nbsp;
                                            </a>
                                            <?php
                                        } else if ($offset_arrow > 0) {
                                            ?>
                                            <a href="konfirmasiMasjid.php?offset=<?php echo $offset - 5; ?>">
                                                <img class="panah" src="../img/Panah/Kiri-2.png">
                                            </a>

                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="box span-10">&nbsp;</div>
                                    <?php
                                    if ($offset_arrow + 5 < sizeof($dataMasjid)) {
                                        ?>
                                        <div class="panah-kanan box span-1">
                                            <a href="konfirmasiMasjid.php?offset=<?php echo $offset + 5; ?>">
                                                <img class="panah" src="../img/Panah/Kanan-2.png">
                                            </a>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
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
                return confirm('Anda yakin akan menolak masjid tersebut?');
            }
        </script>
    </body>
</html>