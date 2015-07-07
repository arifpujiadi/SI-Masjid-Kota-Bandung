<!DOCTYPE html>
<?php
include '../../function/connectDB.php';
$kegiatan = querySelect('*', 'kegiatan order by id_kegiatan asc', NULL, NULL);
$fasilitas = querySelect('*', 'fasilitas order by id_fasilitas asc', NULL, NULL);
$masjid = querySelect('*', 'masjid left join wilayah on masjid.id_wilayah=wilayah.id_wilayah order by masjid.id_masjid asc', NULL, NULL);
?>
<html>
    <head>
        <title>Cari - Spesifikasi</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/PenggunaUmum/spesifikasi.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-full">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="box">
                        <div class="col-full">
                            <div class="box span-12">
                                <div class="kotak-kiri box span-4">
                                    <div class="box span-12">
                                        <div class="judul box span-12">
                                            Cari Kegiatan
                                        </div>
                                        <?php
                                        if (!empty($kegiatan)) {
                                            $nKegiatan = count($kegiatan);
                                            for ($i = 0; $i < $nKegiatan; $i++) {
                                                echo '<div class="check box span-12">
                                                        <div class="box span-1 center">
                                                                <input type="checkbox" name="kegiatan[]" class="kegiatan" value="' . $kegiatan[$i]['id_kegiatan'] . '">
                                                        </div>
                                                        <div class="box span-11">' . $kegiatan[$i]['nama'] . '</div>
                                                </div>';
                                            }
                                        }
                                        ?>

                                        <div class="judul box span-12">
                                            Cari Fasilitas
                                        </div>
                                        <?php
                                        if (!empty($fasilitas)) {
                                            $nFasilitas = count($fasilitas);
                                            for ($i = 0; $i < $nFasilitas; $i++) {
                                                echo '<div class="check box span-12">
                                                        <div class="box span-1 center">
                                                                <input type="checkbox" name="fasilitas[]" class="fasilitas" value="' . $fasilitas[$i]['id_fasilitas'] . '">
                                                        </div>
                                                        <div class="box span-11">' . $fasilitas[$i]['nama'] . '</div>
                                                </div>';
                                            }
                                        }
                                        ?>

                                        <div class="button box span-6">
                                            <a class="btn btn-block btn-lg btn-inverse" id="cariSpesifikasi">Cari</a>
                                        </div>
                                        <div class="button box span-6">
                                            <a class="btn btn-block btn-lg btn-inverse" id="resetSpesifikasi">Bersihkan</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="slider-right box span-8">
                                    <img src="../img/ajax-loader.jpg" class="ajaxLoader">
                                    <div id="listMasjid">
                                        <?php
                                        if (!empty($masjid)) {
                                            $nMasjid = count($masjid);
                                            for ($i = 0; $i < $nMasjid; $i++) {
                                                echo '<div class="kotak-kanan box span-12" ' . ($i == ($nMasjid - 1) ? 'style="margin-bottom:25px;"' : '') . '>
                                                        <div class="radius box span-12">
                                                                <div class="gambar box span-2">
                                                                        <img src="' . $masjid[$i]['foto'] . '">
                                                                </div>
                                                                <div class="box span-10">
                                                                        <div class="keterangan box span-5">
                                                                                <div class="box span-12">
                                                                                        <table>
                                                                                                <tr>
                                                                                                        <td>Nama masjid</td>
                                                                                                        <td>&nbsp;:&nbsp;</td>
                                                                                                        <td>' . $masjid[$i]['nama_masjid'] . '</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                        <td>Alamat</td>
                                                                                                        <td>&nbsp;:&nbsp;</td>
                                                                                                        <td>' . $masjid[$i]['alamat'] . '</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                        <td>No.Telepon</td>
                                                                                                        <td>&nbsp;:&nbsp;</td>
                                                                                                        <td>' . $masjid[$i]['no_telepon'] . '</td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                        <td>Wilayah</td>
                                                                                                        <td>&nbsp;:&nbsp;</td>
                                                                                                        <td>' . $masjid[$i]['nama_wilayah'] . '</td>
                                                                                                </tr>
                                                                                        </table>
                                                                                </div>
                                                                                <div class="box span-12">
                                                                                        <a class="lengkap lengkap-block lengkap-lg lengkap-inverse" href="masjid.php?id_masjid=' . $masjid[$i]['id_masjid'] . '">Selengkapnya</a>
                                                                                </div>
                                                                        </div>';
                                                $idMasjid = $masjid[$i]['id_masjid'];
                                                $kegiatan = querySelect('*', 'kegiatan join kegiatan_masjid on kegiatan.id_kegiatan=kegiatan_masjid.id_kegiatan', "kegiatan_masjid.id_masjid='$idMasjid'", NULL);
                                                if (!empty($kegiatan)) {
                                                    $nKegiatan = count($kegiatan);
                                                    $kegiatanMasjid = '';
                                                    for ($j = 0; $j < $nKegiatan; $j++) {
                                                        $kegiatanMasjid .= $kegiatan[$j]['nama'] . ($j < ($nKegiatan - 1) ? ', ' : '');
                                                    }
                                                } else {
                                                    $kegiatanMasjid = 'Belum ada kegiatan untuk masjid ' . $masjid[$i]['nama_masjid'];
                                                }
                                                $fasilitas = querySelect('*', 'fasilitas join fasilitas_masjid on fasilitas.id_fasilitas=fasilitas_masjid.id_fasilitas', "fasilitas_masjid.id_masjid='$idMasjid'", NULL);
                                                if (!empty($fasilitas)) {
                                                    $nFasilitas = count($fasilitas);
                                                    $fasilitasMasjid = '';
                                                    for ($j = 0; $j < $nFasilitas; $j++) {
                                                        $fasilitasMasjid .= $fasilitas[$j]['nama'] . ($j < ($nFasilitas - 1) ? ', ' : '');
                                                    }
                                                } else {
                                                    $fasilitasMasjid = 'Belum ada fasilitas untuk masjid ' . $masjid[$i]['nama_masjid'];
                                                }
                                                echo '<div class="deskripsi box span-7">
                                                                            <table>
                                                                                    <tr>
                                                                                            <td class="sub-deskripsi top">Kegiatan</td>
                                                                                            <td class="sub-deskripsi top">&nbsp;:&nbsp;</td>
                                                                                            <td class="isi">' . $kegiatanMasjid . '.</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                            <td class="sub-deskripsi top">Fasilitas</td>
                                                                                            <td class="sub-deskripsi top">&nbsp;:&nbsp;</td>
                                                                                            <td class="isi">' . $fasilitasMasjid . '.</td>
                                                                                    </tr>
                                                                            </table>
                                                                    </div>
                                                            </div>
                                                    </div>
                                            </div>';
                                            }
                                        } else {
                                            echo 'Data masjid belum tersedia';
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

                var listMasjid = $('#listMasjid').html();

                $('#listMasjid').hide();
                $('.ajaxLoader').fadeOut(function () {
                    $('#listMasjid').fadeIn();
                });

                $('#resetSpesifikasi').click(function () {
                    $('.kegiatan').each(function () {
                        $(this).prop('checked', false);
                    });
                    $('.fasilitas').each(function () {
                        $(this).prop('checked', false);
                    });
                });

                $('#cariSpesifikasi').click(function () {
                    var checkedSpesifikasi = 0;
                    $('.kegiatan').each(function () {
                        if ($(this).is(':checked')) {
                            ++checkedSpesifikasi;
                        }
                    });
                    $('.fasilitas').each(function () {
                        if ($(this).is(':checked')) {
                            ++checkedSpesifikasi;
                        }
                    });
                    if (checkedSpesifikasi > 0) {
                        var kegiatan = [];
                        var fasilitas = [];
                        var spesifikasi = [];

                        $('.kegiatan').each(function () {
                            if ($(this).is(':checked')) {
                                kegiatan.push($(this).val());
                            }
                        })
                        $('.fasilitas').each(function () {
                            if ($(this).is(':checked')) {
                                fasilitas.push($(this).val());
                            }
                        })
                        spesifikasi = {'kegiatan': kegiatan, 'fasilitas': fasilitas};
                        $('#listMasjid').fadeOut(function () {
                            $('.ajaxLoader').fadeIn(200);
                            $.post('../../function/script/select/masjidBySpesifikasi.php', {spesifikasi: spesifikasi}, function (data) {
                                if (data != '') {
                                    $('#listMasjid').html(data);
                                } else {
                                    alert('Data masjid ditemukan sesuai dengan kriteria');
                                }
                            });
                            $('.ajaxLoader').fadeOut(function () {
                                $('#listMasjid').fadeIn();
                            });
                        });
                    } else {
                        if (confirm('Tampilkan seluruh data masjid?')) {
                            $('#listMasjid').fadeOut(function () {
                                $('.ajaxLoader').fadeIn(200);
                                $('#listMasjid').html(listMasjid);
                                $('.ajaxLoader').fadeOut(function () {
                                    $('#listMasjid').fadeIn();
                                });
                            });
                        } else {
                            alert('Harap pilih satu Kegiatan/Fasilitas untuk melakukan pencarian Masjid!');
                        }
                    }
                })
            });
        </script>
    </body>
</html>