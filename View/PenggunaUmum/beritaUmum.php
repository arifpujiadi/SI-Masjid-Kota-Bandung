<!DOCTYPE html>
<?php
include '../../function/connectDB.php';
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
        <link rel="stylesheet" href="../css/PenggunaUmum/beritaUmum.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-full">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="sizeBoxBerita box">
                        <div class="col">
                            <div class="slideBerita box span-12">
                                <?php
                                $dataBeritaUmum = querySelect('*', 'berita_umum ORDER BY tanggal_upload DESC', null, null);
                                if (isset($_GET['offset'])) {
                                    $offset = (int) $_GET['offset'];
                                } else {
                                    $offset = 0;
                                }
                                $pagination = 0;
                                for ($i = 0; $i < count($dataBeritaUmum); $i++) {
                                    $date = $dataBeritaUmum[$i]['tanggal_upload'];
                                    $dateArray = explode(" ", $date);
                                    $tanggal = $dateArray[0];
                                    $jam = $dateArray[1];
                                    if ($i >= $offset) {
                                        if ($pagination < 4) {
                                            ?>
                                            <div class="berita box span-12 ">
                                                <div class="box span-2">
                                                    <div class="gambar box span-12">
                                                        <a href="beritaUmumIsi.php?id_berita_umum=<?php echo $dataBeritaUmum[$i]['id_berita_umum'] ?>">
                                                            <img class="berita-img" src="<?php echo $dataBeritaUmum[$i]['gambar'] ?>">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="box span-10">
                                                    <div class="judul box span-12">
                                                        <a class="href-black" href="beritaUmumIsi.php?id_berita_umum=<?php echo $dataBeritaUmum[$i]['id_berita_umum'] ?>">
                                                            <?php echo $dataBeritaUmum[$i]['judul'] ?>
                                                        </a> 
                                                    </div>
                                                    <div class="box span-12">
                                                        <div class="tanggal box span-2-5">
                                                            Tanggal upload : <?php echo $tanggal ?>
                                                        </div>
                                                        <div class="tanggal box span-9-5">
                                                            Jam upload : <?php echo $jam ?>
                                                        </div>
                                                    </div>
                                                    <div class="keterangan box span-12">
                                                        <?php
                                                        if (strlen($dataBeritaUmum[$i]['isi_berita']) > 250) {
                                                            echo(substr(str_replace('<br />', "",$dataBeritaUmum[$i]['isi_berita']), 0, 250) . '........');
                                                        } else {
                                                            echo str_replace('<br />', "",$dataBeritaUmum[$i]['isi_berita']);
                                                        }
                                                        ?>
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
                                <div class="button box">
                                    <div class="col">
                                        <div class="box span-12">
                                            <div class="panah-kiri box span-1">
                                                <?php
                                                $offset_arrow = $offset - 1;
                                                if ($offset_arrow <= 0) {
                                                    ?>
                                                    <a href="beritaUmum.php?offset=<?php echo $offset - 4; ?>">
                                                        &nbsp;
                                                    </a>
                                                    <?php
                                                } else if ($offset_arrow > 0) {
                                                    ?>
                                                    <a href="beritaUmum.php?offset=<?php echo $offset - 4; ?>">
                                                        <img class="panah" src="../img/Panah/Kiri-2.png">
                                                    </a>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                            <div class="box span-10">&nbsp;</div>
                                            <?php
                                            if ($offset_arrow + 4 < sizeof($dataBeritaUmum)) {
                                                ?>
                                                <div class="panah-kanan box span-1">
                                                    <a href="beritaUmum.php?offset=<?php echo $offset + 4; ?>">
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
