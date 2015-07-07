<!DOCTYPE html>
<?php
include '../../function/connectDB.php';
?>
<html>
    <head>
        <title>Data Masjid</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/PenggunaUmum/dataMasjid.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-full">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="box">
                        <div class="col-full">
                            <div class="kotak-full box span-12">
                                <div class="kotak-kiri box span-2-5">
                                    <div class="tab-cont box span-12 inherit">
                                        <div class="judul box span-12">
                                            Pilih Wilayah Kota Bandung
                                        </div>
                                        <ul class="tab">
                                            <?php
                                            $wilayah = querySelect('*', 'wilayah ORDER BY id_wilayah ASC', NULL, NULL);
                                            if (!empty($wilayah)) {
                                                foreach ($wilayah as $w) {
                                                    echo '<li>
                                                            <div class="box span-12">
                                                                    <a class="btn btn-block btn-lg btn-inverse" href="#' . strtolower(str_replace(' ', '', $w['nama_wilayah'])) . '">' . $w['nama_wilayah'] . '</a>
                                                            </div>
                                                    </li>';
                                                }
                                            } else {
                                                echo '<li>
                                                        <div class="box span-12">
                                                                Belum ada data wilayah
                                                        </div>
                                                </li>';
                                            }
                                            ?>
                                        </ul> 
                                    </div>
                                </div>

                                <div class="isiTab box span-9-5">
                                    <?php
                                    if (!empty($wilayah)) {
                                        $i = 0;
                                        foreach ($wilayah as $w) {
                                            echo '<div class="slider-right box span-12 data-display ' . ($i == 0 ? 'active' : '') . '" id="' . strtolower(str_replace(' ', '', $w['nama_wilayah'])) . '">'
                                                    . '<div class="box span-12" style="text-align:center; font-size:18px;">Wilayah '.$w['nama_wilayah'].'</div>';
                                            $masjid = querySelect('*', 'masjid', "id_wilayah='$w[id_wilayah]' and validasi=1 order by nama_masjid asc", NULL);
                                            if (!empty($masjid)) {
                                                foreach ($masjid as $m) {
                                                    echo '<div class="kotak-kanan box span-12">
                                                            <div class="radius box span-12">
                                                                    <div class="gambar box span-2">
                                                                            <img src="' . $m['foto'] . '">
                                                                    </div>
                                                                    <div class="box span-10">
                                                                            <div class="keterangan box span-5">
                                                                                    <div class="box span-12">
                                                                                            <table>
                                                                                                    <tr>
                                                                                                            <td>Nama masjid</td>
                                                                                                            <td>&nbsp;:&nbsp;</td>
                                                                                                            <td>' . $m['nama_masjid'] . '</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                            <td>Alamat</td>
                                                                                                            <td>&nbsp;:&nbsp;</td>
                                                                                                            <td>' . $m['alamat'] . '</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                            <td>No.Telepon</td>
                                                                                                            <td>&nbsp;:&nbsp;</td>
                                                                                                            <td>' . $m['no_telepon'] . '</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                            <td>Wilayah</td>
                                                                                                            <td>&nbsp;:&nbsp;</td>
                                                                                                            <td>' . $w['nama_wilayah'] . '</td>
                                                                                                    </tr>
                                                                                            </table>
                                                                                    </div>
                                                                                    <div class="box span-12">
                                                                                            <a class="lengkap lengkap-block lengkap-lg lengkap-inverse" href="masjid.php?id_masjid=' . $m['id_masjid'] . '">Selengkapnya</a>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="deskripsi box span-7">
                                                                                    <div class="box span-2 inherit">
                                                                                            Deskripsi : 
                                                                                    </div>
                                                                                    <div class="box span-10 inherit">';
                                                    if (strlen($m['deskripsi_masjid']) > 250) {
                                                        echo(substr(str_replace('<br />', "", $m['deskripsi_masjid']), 0, 250) . '........');
                                                    } else {
                                                        echo(str_replace('<br />', "", $m['deskripsi_masjid']));
                                                    }
                                                    echo '</div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>';
                                                }
                                            } else {
                                                echo '<div class="slider-right box span-12 data-display" id="' . strtolower(str_replace(' ', '', $w['nama_wilayah'])) . '">Belum ada data masjid di wilayah ' . $w['nama_wilayah'] . '</div>';
                                            }
                                            echo '</div>';
                                            ++$i;
                                        }
                                    } else {
                                        echo '<div class="slider-right box span-12 data-display active">Belum ada data masjid</div>';
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

        <script src="../js/jquery-2.1.0.min.js"></script>
        <script src="../js/main.js"></script>
        <script>
            $(document).ready(function () {
                $(".header").load("header.php");
                $(".footer").load("footer.php");
            });</script>
    </body>
</html>