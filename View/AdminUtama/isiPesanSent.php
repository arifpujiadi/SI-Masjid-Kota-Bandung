<?php
require_once '../../function/connectDB.php';
session_start();
$id_pesan = $_GET['pesan_id'];
$datapesan = querySelect('*', 'pesan', 'id_pesan=' . $id_pesan, null);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Isi Pesan Sent</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/AdminUtama/style.css">
        <link rel="stylesheet" href="../css/AdminUtama/sidebarMessage.css">
        <link rel="stylesheet" href="../css/AdminUtama/isiPesan.css">
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
                        <div class="kotak-judul box span-12">
                            <?php echo $datapesan[0]['judul']; ?>
                        </div>
                        <div class="dari box span-12">
                            <div class="inherit box span-0-5">
                                Ke &nbsp; :  
                            </div>
                            <div class="inherit box span-11">
                                <?php echo $datapesan[0]['nama_ke']; ?>
                            </div>
                        </div>
                        <div class="isi box span-12">
                            <div class="box span-0-5">
                                &nbsp;
                            </div>
                            <div class="box span-10">
                                <?php echo $datapesan[0]['isi_pesan']; ?>
                            </div>
                        </div>
                        <div class="file box span-12">
                            <?php
                            if ($datapesan[0]['nama_file'] != '' && $datapesan[0]['alamat_file'] != '') {
                                ?>
                                <div class="inherit box span-12">
                                    <div class="gambar box span-0-5">
                                        <img class="inherit" src="../img/Icon/Download.png">
                                    </div>
                                    <div class="namaFile box span-11">
                                        <a class="href-black" href="<?php echo $datapesan[0]['alamat_file']; ?>"><?php echo $datapesan[0]['nama_file']; ?></a>
                                    </div>
                                </div>
                                <?php
                            } else {
                                echo '';
                            }
                            ?>
                        </div>
                        <div class="balas-text box span-12">
                            &nbsp;
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
                $(".side").load("sidebarMessage.php");
            });
        </script>
    </body>
</html>