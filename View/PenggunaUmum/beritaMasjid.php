<!DOCTYPE html>
<?php
include '../../function/connectDB.php';
?>
<html>
    <head>
        <title>Berita - Masjid</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/PenggunaUmum/beritaMasjid.css">
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
                                $dataBeritaMasjid = querySelect('*', 'berita_masjid INNER JOIN `masjid` ON berita_masjid.id_masjid = `masjid`.id_masjid', 'validasi=1 ORDER BY tanggal_upload DESC', null);
                                if (isset($_GET['offset'])) {
                                    $offset = (int) $_GET['offset'];
                                } else {
                                    $offset = 0;
                                }
                                $pagination = 0;
                                for ($i = 0; $i < count($dataBeritaMasjid); $i++) {
                                    $date = $dataBeritaMasjid[$i]['tanggal_upload'];
                                    $dateArray = explode(" ", $date);
                                    $tanggal = $dateArray[0];
                                    $jam = $dateArray[1];
                                    if ($i >= $offset) {
                                        if ($pagination < 4) {
                                            ?>
                                            <div class="berita box span-12">
                                                <div class="box span-2">
                                                    <div class="gambar box span-12">
                                                        <a href="masjidBerita.php?id_masjid=<?php echo $dataBeritaMasjid[$i]['id_masjid'] ?>&id_berita=<?php echo $dataBeritaMasjid[$i]['id_berita_masjid'] ?>">
                                                            <img class="berita-img" src="<?php echo $dataBeritaMasjid[$i]['gambar'] ?>">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="box span-10">
                                                    <div class="judul box span-12">
                                                        <a class="href-black" href="masjidBerita.php?id_masjid=<?php echo $dataBeritaMasjid[$i]['id_masjid'] ?>&id_berita=<?php echo $dataBeritaMasjid[$i]['id_berita_masjid'] ?>">
                                                            <?php echo $dataBeritaMasjid[$i]['judul'] ?>
                                                        </a> 
                                                    </div>
                                                    <div class="box span-12">
                                                        <div class="tanggal box span-2-5">
                                                            Masjid : <?php echo $dataBeritaMasjid[$i]['nama_masjid'] ?>
                                                        </div>
                                                        <div class="tanggal box span-2-5">
                                                            Tanggal upload : <?php echo $tanggal ?>
                                                        </div>
                                                        <div class="tanggal box span-7">
                                                            Jam upload : <?php echo $jam ?>
                                                        </div>
                                                    </div>
                                                    <div class="keterangan box span-12">
                                                        <?php
                                                        if (strlen($dataBeritaMasjid[$i]['isi_berita']) > 250) {
                                                            echo(substr(str_replace('<br />', "",$dataBeritaMasjid[$i]['isi_berita']), 0, 250) . '........');
                                                        } else {
                                                            echo(str_replace('<br />', "",$dataBeritaMasjid[$i]['isi_berita']));
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
                                                    <a href="beritaMasjid.php?offset=<?php echo $offset - 4; ?>">
                                                        &nbsp;
                                                    </a>
                                                    <?php
                                                } else if ($offset_arrow > 0) {
                                                    ?>
                                                    <a href="beritaMasjid.php?offset=<?php echo $offset - 4; ?>">
                                                        <img class="panah" src="../img/Panah/Kiri-2.png">
                                                    </a>

                                                    <?php
                                                }
                                                ?>
                                            </div>
                                            <div class="box span-10">&nbsp;</div>
                                            <?php
                                            if ($offset_arrow + 4 < sizeof($dataBeritaMasjid)) {
                                                ?>
                                                <div class="panah-kanan box span-1">
                                                    <a href="beritaMasjid.php?offset=<?php echo $offset + 4; ?>">
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
