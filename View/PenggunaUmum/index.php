<!DOCTYPE html>
<?php
include '../../function/connectDB.php';
$dataBeritaMasjid = querySelect('*', 'berita_masjid ORDER BY tanggal_upload DESC', null, 3);
$dataBeritaUmum = querySelect('*', 'berita_umum ORDER BY tanggal_upload DESC', null, 3);
?>
<html>
    <head>
        <title>Beranda</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/PenggunaUmum/index.css">
        <link rel="stylesheet" href="../js/bxslider/jquery.bxslider.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-scrl">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="slideshow box">
                        <div class="col">
                            <?php if (!empty($dataBeritaMasjid) || !empty($dataBeritaUmum)): ?>
                                <ul class="bxslider">
                                    <?php
                                    if (!empty($dataBeritaMasjid)) {
                                        foreach ($dataBeritaMasjid as $dbm) {
                                            echo '<li>
                                                    <div class="box span-11">
                                                            <div class="slider-content">
                                                                    <div class="box span-6" style="text-align:center">
                                                                            <p style="color:white; margin-left:60px">';
                                            if (strlen($dbm['isi_berita']) > 300) {
                                                echo(substr(str_replace('<br />', "", $dbm['isi_berita']), 0, 300) . '........');
                                            } else {
                                                echo(str_replace('<br />', "", $dbm['isi_berita']));
                                            }
                                            echo '</p>
                                                        </div>
                                                        <div class="box span-6" style="margin: auto;">
                                                               <img src="' . $dbm['gambar'] . '" style="margin-left:80px; margin-bottom:60px;">
                                                        </div>
                                                </div>
                                        </div>
                                </li>';
                                        }
                                    }
                                    if (!empty($dataBeritaUmum)) {
                                        foreach ($dataBeritaUmum as $dbu) {
                                            echo '  <li>			
                                                        <div class="box span-11">
                                                                <div class="slider-content">
                                                                        <div class="box span-6" style="text-align:center">
                                                                                <p style="color:white; margin-left:60px">';
                                            if (strlen($dbu['isi_berita']) > 300) {
                                                echo(substr(str_replace('<br />', "", $dbu['isi_berita']), 0, 300) . '........');
                                            } else {
                                                echo(str_replace('<br />', "", $dbu['isi_berita']));
                                            }
                                            echo '</p>
                                                                </div>
                                                                <div class="box span-6">
                                                                        <img src="' . $dbu['gambar'] . '" style="margin-left:80px; margin-bottom:60px;">
                                                                </div>
                                                        </div>
                                                </div>
                                                
                                        </li>';
                                        }
                                    }
                                    ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="berita box">
                        <div class="col">
                            <div class="berita-text box span-12">
                                <img src="../img/Berita/berita.png">
                            </div>
                            <div class="box span-12">
                                <div class="box span-1-5 ">
                                    &nbsp;
                                </div>
                                <div class="box span-9-5">
                                    <?php
                                    $namaBulan = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
                                    for ($i = 0; $i < 3; $i++) {
                                        ?>
                                        <div class="box span-4 center">
                                            <div class="gambar">
                                                <?php
                                                if (isset($dataBeritaUmum[$i]['id_berita_umum'])) {
                                                    ?>
                                                    <a href="beritaUmumIsi.php?id_berita_umum=<?php echo $dataBeritaUmum[$i]['id_berita_umum'] ?>"><img class="berita-img" src="<?php echo $dataBeritaUmum[$i]['gambar']; ?>"></a>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                            <div class="judulBerita">
                                                <a class="href-black" href="beritaUmumIsi.php?id_berita_umum=<?php echo $dataBeritaUmum[$i]['id_berita_umum'] ?>">
                                                    <?php
                                                    if (isset($dataBeritaUmum[$i]['judul'])) {
                                                        echo $dataBeritaUmum[$i]['judul'];
                                                    }
                                                    ?>
                                                </a>
                                            </div>
                                            <div class="tanggal">
                                                <?php
                                                if (isset($dataBeritaUmum[$i]['tanggal_upload'])) {
                                                    $tanggalBerita = $dataBeritaUmum[$i]['tanggal_upload'];
                                                    $dateArray = explode(" ", $tanggalBerita);
                                                    $tanggal = $dateArray[0];
                                                    $dateArray = explode("-", $tanggal);
                                                    $tanggal = $dateArray[2];
                                                    $bulan = $dateArray[1];
                                                    $tahun = $dateArray[0];

                                                    echo $tanggal . ' ' . $namaBulan[$bulan - 1] . ' ' . $tahun;
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="box span-1-5">
                                    &nbsp;
                                </div>
                            </div>
                            <div class="box span-12">&nbsp;</div>
                            <div class="box span-12">
                                <div class="box span-1-5 ">
                                    &nbsp;
                                </div>
                                <div class="box span-9-5">
                                    <?php
                                    for ($i = 0; $i < 3; $i++) {
                                        ?>
                                        <div class="box span-4 center">
                                            <div class="gambar">
                                                <?php
                                                if (isset($dataBeritaMasjid[$i]['id_berita_masjid'])) {
                                                    ?>
                                                    <a href="masjidBerita.php?id_masjid=<?php echo $dataBeritaMasjid[$i]['id_masjid']; ?>&id_berita=<?php echo $dataBeritaMasjid[$i]['id_berita_masjid']; ?>"><img class="berita-img" src="<?php echo $dataBeritaMasjid[$i]['gambar']; ?>"></a>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                            <div class="judulBerita">
                                                <a class="href-black" href="masjidBerita.php?id_masjid=<?php echo $dataBeritaMasjid[$i]['id_masjid'] ?>&id_berita=<?php echo $dataBeritaMasjid[$i]['id_berita_masjid'] ?>">
                                                    <?php
                                                    if (isset($dataBeritaMasjid[$i]['judul'])) {
                                                        echo $dataBeritaMasjid[$i]['judul'];
                                                    }
                                                    ?>
                                                </a>
                                            </div>
                                            <div class="masjid">
                                                <?php
                                                if (isset($dataBeritaMasjid[$i]['jenis_admin'])) {
                                                    echo $dataBeritaMasjid[$i]['jenis_admin'];
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="box span-1-5">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lengkung box">
                        <div class="bentuk-atas-kiri box span-1"></div>
                        <div class="bentuk-tengah box span-10"></div>
                        <div class="bentuk-atas-kanan box span-1"></div>
                    </div>
                    <div class="lengkung-tengah box">
                        <div class="col">
                            <div class="video-text box span-12">
                                <img src="../img/Video/Video.png">
                            </div>
                            <div class="video box span-12">
                                <?php
                                $offset = 0;
                                $dataVideo = querySelect('*', 'video_informasi_masjid INNER JOIN `masjid` ON video_informasi_masjid.id_masjid = `masjid`.id_masjid', 'validasi=1 ORDER BY tanggal_upload DESC', null);
                                if (isset($_GET['offset'])) {
                                    $offset = (int) $_GET['offset'];
                                } else {
                                    $offset = 0;
                                }
                                $pagination = 0;
                                $c = 0;
                                for ($i = 0; $i < count($dataVideo); $i++) {
                                    if ($i >= $offset) {
                                        if ($pagination < 4) {
                                            ?>
                                            <div class="box span-3">
                                                <a href="index.php?vid<?php echo $i; ?>">
                                                    <div class="video-isi">
                                                        <div>
                                                            <?php echo $dataVideo[$i]['img'] ?>
                                                        </div>
                                                        <div class="judulvideo">
                                                            <?php
                                                            if (strlen($dataVideo[$i]['judul']) > 45) {
                                                                echo(substr($dataVideo[$i]['judul'], 0, 45) . '...');
                                                            } else {
                                                                echo($dataVideo[$i]['judul']);
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="keterangan-video">
                                                            <?php echo $dataVideo[$i]['nama_masjid'] ?>
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
                                    if (isset($_GET['vid' . $i])) {
                                        $c = $i;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="lengkung box">
                        <div class="bentuk-bawah-kiri box span-1"></div>
                        <div class="bentuk-tengah box span-10"></div>
                        <div class="bentuk-bawah-kanan box span-1"></div>
                    </div>
                    <div class="box">
                        <div class="col">
                            <div class="cari-text box span-12">
                                <img src="../img/Peta/cari.png">
                            </div>
                            <div class="box span-12">
                                <div class="box span-1">&nbsp;</div>
                                <div class="peta-img box span-5">
                                    <img src="../img/Peta/peta.png">
                                </div>
                                <div class="cari-isi box span-5">
                                    <div class="cari-judul">
                                        <b>Penjelasan fitur cari :</b>
                                    </div>
                                    <div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kota Bandung terbagi menjadi 6 wilayah  yaitu Bojonagara, Cibeunying, Tegallega, Karees, Ujung berung dan Gede bage. 
                                        Fitur cari dimaksudkan untuk membantu masyarakat dalam mencari lokasi masjid dan keterangan angkot yang lewat dengan menggunakan google maps.
                                        <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selain itu fitur cari dapat membantu dalam mencari kegiatan dan fasilitas yang terdapat di masjid.
                                        Fitur cari tebagi menjadi 2 bagian, yaitu sebagai berikut :
                                    </div>
                                    <div class="cari-judul">
                                        <b>- Cari Lokasi Masjid</b>
                                    </div>
                                    <div>
                                        Merupakan fitur pencarian masjid dengan memasukan nama masjid yang dicari, 
                                        dapat mencari berdasarkan lokasi yang diinginkan dengan memilih wilayah dari kota Bandung yang telah terbagi menjadi 6 wilayah, 
                                        kemudian dapat mencari informasi mengenai informasi angkot yang lewat masjid.
                                    </div>
                                    <div class="cari-judul">
                                        <b>- Cari Kegiatan & Fasilitas Masjid</b>
                                    </div>
                                    <div>
                                        Merupakan fitur pencarian kegiatan dan fasilitas yang terdapat pada masjid - masjid di semua wilayah kota Bandung. 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="col">
                            <div class="jarak box span-12">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_GET['vid' . $c])) {
                    echo '<div id="vidPopup" class="vid-popup" ><div class="layer box span-12"></div><div class="pop-up box span-12">';
                    echo $dataVideo[$c]['embed'];
                    echo '</div><div id="btnKembali" class="absolute btn-ok btn-block-ok btn-lg-ok btn-inverse-ok">Kembali</div></div>';
                }
                ?>
                <div class="footer row">
                </div>
            </div>
        </div>
        <script src="../js/jquery-2.1.0.min.js"></script>
        <script src="../js/main.js"></script>
        <script src="../js/bxslider/jquery.bxslider.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".header").load("header.php");
                $(".footer").load("footer.php");

                $("#btnKembali").on("click", function () {
                    $('div#vidPopup').hide();
                });

                $('.bxslider').bxSlider({
                    mode: 'fade',
                    auto: true,
                    adaptiveHeight: true,
                    infiniteLoop: true
                });
            });
        </script>
    </body>
</html>