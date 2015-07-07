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
        <link rel="stylesheet" href="../css/AdminUtama/aturVideoCeramah.css">
    </head>
    <body>
        <?php
        if (isset($_GET['delete'])) {
            if ($_GET['delete'] == 'true') {
                $b = queryDelete('video_ceramah', 'id_video_ceramah=' . $_GET['id_video_ceramah']);
                header('location:http://localhost/SIMasjid/view/AdminUtama/aturVideoCeramah.php');
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
                                        <a class="href-black" href="aturVideoInformasiMasjid.php">Video informasi masjid</a>
                                    </li>
                                    <li>
                                        <a class="ceramah href-white" href="aturVideoCeramah.php">Video ceramah</a>
                                    </li>
                                    <li>
                                        <a class="href-black" href="aturVideoMusik.php">Video musik</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="box span-12">
                                <!-------------------------------------------------> 

                                <div class="box span-12 video-display active" id="vCeramah">
                                    <div class="slider kotak-isi box span-12">
                                        <div class="kolom box span-12">
                                            <div class="judul center box span-1-5">
                                                Nomer
                                            </div>
                                            <div class="judul center box span-2-5">
                                                Penceramah
                                            </div>
                                            <div class="judul center box span-6">
                                                Judul
                                            </div>
                                            <div class="judul center box span-2-5">
                                                Aksi
                                            </div>
                                        </div>
                                        <?php
                                        $video_ceramah = querySelect('*', 'video_ceramah ORDER BY tanggal_upload DESC', null, null);
                                        if (isset($_GET['offset'])) {
                                            $offset = (int) $_GET['offset'];
                                        } else {
                                            $offset = 0;
                                        }
                                        $pagination = 0;
                                        for ($i = 0; $i < count($video_ceramah); $i++) {
                                            if ($i >= $offset) {
                                                if ($pagination < 5) {
                                                    ?>
                                                    <div class="baris box span-12">
                                                        <div class="nomer center box span-1-5">
                                                            <?php echo ($i + 1) ?>
                                                        </div>
                                                        <div class="inherit center box span-2-5">
                                                            <table class="tabel-keterangan middle">
                                                                <tr>
                                                                    <td>
                                                                        <?php echo $video_ceramah[$i]['penceramah'] ?>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="inherit center box span-6">
                                                            <table class="tabel-judul middle">
                                                                <tr>
                                                                    <td>
                                                                        <?php echo $video_ceramah[$i]['judul'] ?>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="aksi box span-2-5">
                                                            <div class="ubah box span-6">
                                                                <a class="btn btn-block btn-lg btn-ubah-inverse" href="isiAturVideoCeramah.php?ceramah_id=<?php echo $video_ceramah[$i]['id_video_ceramah']; ?>">
                                                                    <img src="../img/Notification/edit.png">
                                                                </a>
                                                            </div>
                                                            <div class="hapus box span-6">
                                                                <a class="btn btn-block btn-lg btn-hapus-inverse" href="aturVideoCeramah.php?delete=true&id_video_ceramah=<?php echo $video_ceramah[$i]['id_video_ceramah']; ?>" onclick="return confirm('Anda yakin akan menghapus video ceramah?');">
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
                                    </div>
                                    <div class="button box span-12">
                                        <div class="panah-kiri box span-1">
                                            <?php
                                            $offset_arrow = $offset - 1;
                                            if ($offset_arrow <= 0) {
                                                ?>
                                                <a href="aturVideoCeramah.php?offset=<?php echo $offset - 5; ?>">
                                                    &nbsp;
                                                </a>
                                                <?php
                                            } else if ($offset_arrow > 0) {
                                                ?>
                                                <a href="aturVideoCeramah.php?offset=<?php echo $offset - 5; ?>">
                                                    <img class="panah" src="../img/Panah/Kiri-2.png">
                                                </a>

                                                <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="box span-10">&nbsp;</div>
                                        <?php
                                        if ($offset_arrow + 5 < sizeof($video_ceramah)) {
                                            ?>
                                            <div class="panah-kanan box span-1">
                                                <a href="aturVideoCeramah.php?offset=<?php echo $offset + 5; ?>">
                                                    <img class="panah" src="../img/Panah/Kanan-2.png">
                                                </a>
                                            </div>
                                            <?php
                                        }
                                        ?>
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
    </body>
</html>