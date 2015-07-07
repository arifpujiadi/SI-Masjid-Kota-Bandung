<?php
require_once '../../function/connectDB.php';
session_start();
$id_masjid = $_SESSION['id_masjid_admin'];
$dataMasjid = querySelect('*','masjid', 'id_masjid='.$id_masjid,null);
$dataBerita = querySelect('*','berita_masjid', 'id_masjid='.$id_masjid,null);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Atur Berita Masjid</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/AdminMasjid/style.css">
        <link rel="stylesheet" href="../css/AdminMasjid/sidebar.css">
        <link rel="stylesheet" href="../css/AdminMasjid/aturBeritaMasjid.css">
    </head>
    <body>
        <?php
        if (isset($_GET['delete'])) {
            if ($_GET['delete'] == 'true') {
                $b = queryDelete('berita_masjid', 'id_berita_masjid=' . $_GET['id_berita_masjid']);
                header('location:http://localhost/SIMasjid/view/AdminMasjid/aturBeritaMasjid.php');
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
                                Atur Berita Masjid
                            </div>
                            <div class="slider kotak-isi box span-12">
                                <div class="kolom box span-12">
                                    <div class="judul center box span-1-5">
                                        Nomer
                                    </div>
                                    <div class="judul center box span-2-5">
                                        Tanggal post
                                    </div>
                                    <div class="judul center box span-6">
                                        Judul berita
                                    </div>
                                    <div class="judul center box span-2-5">
                                        Aksi
                                    </div>
                                </div>
                                <?php
                                $berita_masjid = querySelect('*', 'berita_masjid', 'id_masjid ='.$_SESSION['id_masjid_admin']. ' ORDER BY tanggal_upload DESC', null);
                                if (isset($_GET['offset'])) {
                                    $offset = (int) $_GET['offset'];
                                } else {
                                    $offset = 0;
                                }
                                $pagination = 0;
                                for ($i = 0; $i < count($berita_masjid); $i++) {
                                    if ($i >= $offset) {
                                        if ($pagination < 5) {
                                            ?>
                                            <div class="baris box span-12">
                                                <div class="nomer center box span-1-5">
                                                    <?php echo ($i + 1) ?>
                                                </div>
                                                <div class="isi center box span-2-5">
                                                    <?php echo $berita_masjid[$i]['tanggal_upload'] ?>
                                                </div>
                                                <div class="berita inherit center box span-6">
                                                    <table class="table-judul middle center">
                                                        <tr>
                                                            <td>
                                                                <?php echo $berita_masjid[$i]['judul'] ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="aksi box span-2-5">
                                                    <div class="ubah box span-6">
                                                        <a class="btn btn-block btn-lg btn-ubah-inverse" href="isiAturBeritaMasjid.php?berita_id=<?php echo $berita_masjid[$i]['id_berita_masjid']; ?>">
                                                            <img src="../img/Notification/edit.png">                                                            
                                                        </a>
                                                    </div>
                                                    <div class="hapus box span-6">
                                                        <a class="btn btn-block btn-lg btn-hapus-inverse" href="aturBeritaMasjid.php?delete=true&id_berita_masjid=<?php echo $berita_masjid[$i]['id_berita_masjid']; ?>" onclick="return confirm('Anda yakin akan menghapus berita masjid?');">
                                                            <img src="../img/Notification/delete.png">
                                                        </a>
                                                    </div>
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
                                            <a href="aturBeritaMasjid.php?offset=<?php echo $offset - 5; ?>">
                                                &nbsp;
                                            </a>
                                            <?php
                                        } else if ($offset_arrow > 0) {
                                            ?>
                                            <a href="aturBeritaMasjid.php?offset=<?php echo $offset - 5; ?>">
                                                <img class="panah" src="../img/Panah/Kiri-2.png">
                                            </a>

                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="box span-10">&nbsp;</div>
                                    <?php
                                    if ($offset_arrow + 5 < sizeof($berita_masjid)) {
                                        ?>
                                        <div class="panah-kanan box span-1">
                                            <a href="aturBeritaMasjid.php?offset=<?php echo $offset + 5; ?>">
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