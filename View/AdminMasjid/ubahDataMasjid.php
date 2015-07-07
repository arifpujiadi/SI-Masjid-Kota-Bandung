<?php
session_start();
require_once '../../function/connectDB.php';

$angkot = querySelect('*', 'angkot', null, null);
$id_masjid = $_SESSION['id_masjid_admin'];
$dataMasjid = querySelect('*', 'masjid', 'id_masjid=' . $id_masjid, null);
$tampungWilayah = $dataMasjid[0]['id_wilayah'];
$namaWilayah = querySelect('*', 'wilayah', 'id_wilayah =' . $tampungWilayah, null);
$dataFasilitas = querySelect('*', 'fasilitas', null, null);
$dataKegiatan = querySelect('*', 'kegiatan', null, null);
$date = $dataMasjid[0]['peresmian_bangunan'];

if ($date != '' || $date != null) {
    $dateArray = explode("/", $date);
    $tanggal = $dateArray[0];
    $bulan = $dateArray[1];
    $tahun = $dateArray[2];
} else {
    $tanggal = '';
    $bulan = '';
    $tahun = '';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ubah Data Masjid</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/AdminMasjid/style.css">
        <link rel="stylesheet" href="../css/AdminMasjid/ubahDataMasjid.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-full">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="side box span-1-8">

                    </div>
                    <form method='POST' action='../../function/script/edit/editDataMasjidAM.php' enctype="multipart/form-data">
                        <div class="box span-10-3">
                            <div class="slider box span-12">
                                
                                <div class="kotak-judul box span-12">
                                    Data Masjid
                                </div>
                                <input hidden type="text" name="id_masjid" value="<?php echo $_SESSION['id_masjid_admin'] ?>"/>
                                <div class="kotak-kiri box span-4-5">
                                    <div class="jarak-bawah box span-12">
                                        <div class="padding box span-3-5">
                                            Wilayah masjid
                                        </div>
                                        <div class="padding box span-0-5">
                                            :
                                        </div>
                                        <div class="box span-7-8">
                                            <div class="styled-select-wilayah">
                                                <select name="wilayahMasjid" value="">
                                                    <?php include '../../function/script/select/wilayahMasjid.php' ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box span-12">
                                        <div class="padding box span-3-5">
                                            Foto masjid
                                        </div>
                                        <div class="padding box span-0-5">
                                            :
                                        </div>
                                        <div class="box span-7-8">
                                            <input type="file" name="uploadfoto">
                                        </div>
                                    </div>
                                    <div class="box span-12" style="padding-bottom: 10px;">
                                        <div class="padding box span-3-5">
                                            &nbsp;
                                        </div>
                                        <div class="padding box span-0-5">
                                            &nbsp;
                                        </div>
                                        <div class="box span-7-8">
                                            ( Ukuran file kurang dari 2MB )
                                        </div>
                                    </div>
                                    <div class="box span-12" style="padding-bottom: 5px;">
                                        <div class="padding box span-3-5">
                                            Struktur organisasi
                                        </div>
                                        <div class="padding box span-0-5">
                                            :
                                        </div>
                                        <div class="box span-7-8">
                                            <input type="file" name="uploadStrukturOrganisasi">
                                        </div>
                                    </div>
                                    <div class="box span-12" style="padding-bottom: 10px;">
                                        <div class="padding box span-3-5">
                                            &nbsp;
                                        </div>
                                        <div class="padding box span-0-5">
                                            &nbsp;
                                        </div>
                                        <div class="box span-7-8">
                                            ( Ukuran file kurang dari 2MB )
                                        </div>
                                    </div>
                                    <div class="box span-12">
                                        <div class="padding box span-3-5">
                                            Nama masjid
                                        </div>
                                        <div class="padding box span-0-5">
                                            :
                                        </div>
                                        <div class="box span-7-8">
                                            <input class="form field nama" type="text" placeholder="Nama masjid" value="<?php echo $dataMasjid[0]['nama_masjid']; ?>" name="namaMasjid">
                                        </div>
                                    </div>
                                    <div class="box span-12">
                                        <div class="padding box span-3-5">
                                            Alamat
                                        </div>
                                        <div class="padding box span-0-5">
                                            :
                                        </div>
                                        <div class="box span-7-8">
                                            <input class="form field jalan" type="text" placeholder="Nama jalan" value="<?php echo $dataMasjid[0]['alamat']; ?>" name="alamat">
                                        </div>
                                    </div>
                                    <div class="box span-12">
                                        <div class="padding box span-3-5">
                                            Email
                                        </div>
                                        <div class="padding box span-0-5">
                                            :
                                        </div>
                                        <div class="box span-7-8">
                                            <input class="form field jalan" type="text" placeholder="Email" value="<?php echo $dataMasjid[0]['email']; ?>" name="email">
                                        </div>
                                    </div>
                                    <div class="box span-12">
                                        <div class="padding box span-3-5">
                                            RT
                                        </div>
                                        <div class="padding box span-0-5">
                                            :
                                        </div>
                                        <div class="box span-7-8">
                                            <input class="form field non-jeda" type="text" placeholder="RT" value="<?php echo $dataMasjid[0]['rt']; ?>" name="rt">
                                        </div>
                                    </div>
                                    <div class="box span-12">
                                        <div class="padding box span-3-5">
                                            RW
                                        </div>
                                        <div class="padding box span-0-5">
                                            :
                                        </div>
                                        <div class="box span-7-8">
                                            <input class="form field non-jeda" type="text" placeholder="RW" value="<?php echo $dataMasjid[0]['rw']; ?>" name="rw">
                                        </div>
                                    </div>
                                    <div class="box span-12">
                                        <div class="padding box span-3-5">
                                            Kecamatan
                                        </div>
                                        <div class="padding box span-0-5">
                                            :
                                        </div>
                                        <div class="box span-7-8">
                                            <input class="form field non-jeda" type="text" placeholder="Kecamatan" value="<?php echo $dataMasjid[0]['kecamatan']; ?>" name="kecamatan">
                                        </div>
                                    </div>
                                    <div class="jarak-bawah box span-12">
                                        <div class="padding box span-3-5">
                                            No.Telepon
                                        </div>
                                        <div class="padding box span-0-5">
                                            :
                                        </div>
                                        <div class="box span-7-8">
                                            <input class="form field non-jeda" type="text" placeholder="No.Telepon" value="<?php echo $dataMasjid[0]['no_telepon']; ?>" name="noTelp">
                                        </div>
                                    </div>
                                    <div class="jarak-bawah box span-12">
                                        <div class="padding box span-3-5">
                                            Peresmian bangunan
                                        </div>
                                        <div class="padding box span-0-5">
                                            :
                                        </div>
                                        <div class="box span-7-8">
                                            <div class="box span-4">
                                                <div class="styled-select-tanggal">
                                                    <select name="tanggal" value="">
                                                        <option class="option" value="">Tanggal</option>
                                                        <?php
                                                        for ($c = 1; $c <= 31; $c++) {
                                                            if ($c == $tanggal) {
                                                                echo '<option class="option" selected value="' . $c . '">' . $c . '</option>';
                                                            } else {
                                                                echo '<option class="option" value="' . $c . '">' . $c . '</option>';
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="box span-5">
                                                <div class="styled-select-bulan">
                                                    <select name="bulan">
                                                        <option class="option" value="">Bulan</option>

                                                        <?php
                                                        $_SESSION['bulan'] = array('1' => 'Januari', '2' => 'Februari', '3' => 'Maret', '4' => 'April', '5' => 'Mei', '6' => 'Juni', '7' => 'Juli', '8' => 'Agustus', '9' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');

                                                        for ($c = 1; $c <= 12; $c++) {
                                                            if ($c == $bulan) {
                                                                echo '<option class="option" selected value="' . $c . '">' . $_SESSION['bulan'][$c] . '</option>';
                                                            } else {
                                                                echo '<option class="option" value="' . $c . '">' . $_SESSION['bulan'][$c] . '</option>';
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="box span-2">
                                                <input class="form field tahun" type="text" placeholder="Tahun" value="<?= $tahun ?>" name="tahun"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box span-12">
                                        <div class="padding box span-3-5">
                                            Luas Tanah
                                        </div>
                                        <div class="padding box span-0-5">
                                            :
                                        </div>
                                        <div class="padding box span-0-5">
                                            ±
                                        </div>
                                        <div class="box span-3">
                                            <input class="form field jeda" type="text" placeholder="Luas" value="<?php echo $dataMasjid[0]['luas_tanah']; ?>" name="luasTanah">
                                        </div>
                                        <div class="padding box span-4 satuan">
                                            m²
                                        </div>
                                    </div>
                                    <div class="jarak-bawah box span-12">
                                        <div class="padding box span-3-5">
                                            Luas Bangunan
                                        </div>
                                        <div class="padding box span-0-5">
                                            :
                                        </div>
                                        <div class="padding box span-0-5">
                                            ±
                                        </div>
                                        <div class="box span-3">
                                            <input class="form field jeda" type="text" placeholder="Luas" value="<?php echo $dataMasjid[0]['luas_bangunan']; ?>" name="luasBangunan">
                                        </div>
                                        <div class="padding box span-4 satuan">
                                            m²
                                        </div>
                                    </div>
                                    <div class="box span-12">
                                        <div class="padding box span-3-5">
                                            Daya Tampung jamaah
                                        </div>
                                        <div class="padding box span-0-5">
                                            :
                                        </div>
                                        <div class="padding box span-0-5">
                                            ±
                                        </div>
                                        <div class="box span-3">
                                            <font style="padding-left: 10px;"><?php echo $dataMasjid[0]['daya_tampung_dalam_masjid'] + $dataMasjid[0]['daya_tampung_luar_masjid']; ?></font>
                                        </div>
                                        <div class="padding box span-4 satuan">
                                            orang
                                        </div>
                                    </div>
                                    <div class="box span-12">
                                        <div class="padding box span-3-5">
                                            Dalam masjid
                                        </div>
                                        <div class="padding box span-0-5">
                                            :
                                        </div>
                                        <div class="padding box span-0-5">
                                            ±
                                        </div>
                                        <div class="box span-3">
                                            <input class="form field jeda" type="text" placeholder="Jumlah" value="<?php echo $dataMasjid[0]['daya_tampung_dalam_masjid']; ?>" name="dayaTampungDalamMasjid">
                                        </div>
                                        <div class="padding box span-4 satuan">
                                            orang
                                        </div>
                                    </div>
                                    <div class="jarak-bawah box span-12">
                                        <div class="padding box span-3-5">
                                            Luar masjid
                                        </div>
                                        <div class="padding box span-0-5">
                                            :
                                        </div>
                                        <div class="padding box span-0-5">
                                            ±
                                        </div>
                                        <div class="box span-3">
                                            <input class="form field jeda" type="text" placeholder="Jumlah" value="<?php echo $dataMasjid[0]['daya_tampung_luar_masjid']; ?>" name="dayaTampungLuarMasjid">
                                        </div>
                                        <div class="padding box span-4 satuan">
                                            orang
                                        </div>
                                    </div>
                                    <div class="box span-12">
                                        <div class="padding box span-3-5">
                                            Lokasi masjid
                                        </div>
                                        <div class="padding box span-0-5">
                                            :
                                        </div>
                                        <div class="box span-7-8">
                                            <input class="form field jalan" type="text" placeholder="Latitude" value="<?php echo $dataMasjid[0]['latitude']; ?>" name="latitude">
                                        </div>
                                    </div>
                                    <div class="box span-12" style="padding-bottom: 5px;">
                                        <div class="padding box span-3-5">
                                            &nbsp;
                                        </div>
                                        <div class="padding box span-0-5">
                                            &nbsp;
                                        </div>
                                        <div class="box span-7-8">
                                            <input class="form field jalan" type="text" placeholder="Longitude" value="<?php echo $dataMasjid[0]['longitude']; ?>" name="longitude">
                                        </div>
                                    </div>
                                    <div class="box span-12" style="padding-bottom: 20px;">
                                        <div class="padding box span-3-5">
                                            &nbsp;
                                        </div>
                                        <div class="padding box span-0-5">
                                            &nbsp;
                                        </div>
                                        <div class="box span-7-8">
                                            ( <a class="href-black" href="http://www.latlong.net/" target="_blank">Cari latitude dan longitude</a> )
                                        </div>
                                    </div> 
                                </div>

                                <div class="kotak-kanan box span-7-5">
                                    <div class="jarak-bawah box span-12">
                                        <div class="box span-2-5">
                                            Deskripsi masjid
                                        </div>
                                        <div class="box span-0-5">
                                            :
                                        </div>
                                        <div class="box span-9">
                                            <textarea class="textarea" rows="6" cols="73" name="deskripsiMasjid" style="font-size: 12px;"><?php echo str_replace('<br />', "", $dataMasjid[0]['deskripsi_masjid']); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="jarak-bawah box span-12">
                                        <div class="box span-2-5">
                                            Keunikan
                                        </div>
                                        <div class="box span-0-5">
                                            :
                                        </div>
                                        <div class="box span-9">
                                            <textarea class="textarea" rows="6" cols="73" name="keunikan" style="font-size: 12px;"><?php echo str_replace('<br />', "", $dataMasjid[0]['keunikan']); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="jarak-bawah box span-12" style="padding-bottom: 10px;">
                                        <div class="box span-12" style="padding-bottom: 7px;">
                                            <div class="box span-2-5">
                                                Kegiatan masjid
                                            </div>
                                            <div class="box span-9-5">
                                                :
                                            </div>
                                        </div>
                                        <?php
                                        $result = querySelect('id_kegiatan', 'kegiatan_masjid', 'id_masjid=' . $id_masjid, null);
                                        $a = 0;
                                        $b = 1;

                                        foreach ($dataKegiatan as $newData) {
                                            ?>
                                            <div class="box span-3">
                                                <div class="box span-12">
                                                    <div class="checkbox box span-1-5" style="">
                                                        <?php
                                                        if (count($result) > 0) {
                                                            if ($result[$a]['id_kegiatan'] == $b) {
                                                                echo '<input type="checkbox" name="kegiatan[]" value="' . $newData['id_kegiatan'] . '" checked>';
                                                                if ($a < count($result) - 1) {
                                                                    $a++;
                                                                }
                                                            } else {
                                                                echo '<input type="checkbox" name="kegiatan[]" value="' . $newData['id_kegiatan'] . '">';
                                                            }
                                                        } else {
                                                            echo '<input type="checkbox" name="kegiatan[]" value="' . $newData['id_kegiatan'] . '">';
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="box span-10-5">
                                                        <?php echo $newData['nama']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $b++;
                                        }
                                        ?>
                                    </div>
                                    <div class="jarak-bawah box span-12" style="padding-bottom: 10px;">
                                        <div class="box span-12" style="padding-bottom: 7px;">
                                            <div class="box span-2-5">
                                                Fasilitas umum
                                            </div>
                                            <div class="box span-9-5">
                                                :
                                            </div>
                                        </div>
                                        <?php
                                        $result = querySelect('id_fasilitas', 'fasilitas_masjid', 'id_masjid=' . $id_masjid, null);
                                        $x = 0;
                                        $i = 1;

                                        foreach ($dataFasilitas as $newData) {
                                            ?>
                                            <div class="box span-3">
                                                <div class="box span-12">
                                                    <div class="checkbox box span-1-5" style="">
                                                        <?php
                                                        if (count($result) > 0) {
                                                            if ($result[$x]['id_fasilitas'] == $i) {
                                                                echo '<input type="checkbox" name="fasilitas[]" value="' . $newData['id_fasilitas'] . '" checked>';
                                                                if ($x < count($result) - 1) {
                                                                    $x++;
                                                                }
                                                            } else {
                                                                echo '<input type="checkbox" name="fasilitas[]" value="' . $newData['id_fasilitas'] . '">';
                                                            }
                                                        } else {
                                                            echo '<input type="checkbox" name="fasilitas[]" value="' . $newData['id_fasilitas'] . '">';
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="box span-10-5">
                                                        <?php echo $newData['nama']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $i++;
                                        }
                                        ?>

                                    </div>
                                    <div class="jarak-bawah-tambah box span-12" style="padding-bottom: 20px;">
                                        <div class="box span-12">
                                            <div class="padding box span-7">
                                                <b>File untuk masyarakat umum (Formulir pendaftaran, dll)</b>
                                            </div>
                                            <div class="padding box span-0-5">
                                                :
                                            </div>
                                        </div>
                                        <div class="box span-12 targetFile">
                                            <script>
                                                var num3 = 1;
                                            </script>
                                            <?php
                                            $listFile = querySelect("*", "file", "id_masjid=" . $id_masjid, null);
                                            if (count($listFile) > 0) {
                                                for ($i = 0; $i < count($listFile); $i++) {
                                                    ?>
                                                    <div class="tambah box span-12">
                                                        <div class="box span-8-5">
                                                            <label id="<?php echo $listFile[$i]['id_file']; ?>"><?php echo $listFile[$i]['nama_file']; ?></label>   
                                                        </div>
                                                        <div class="tambah box span-1" style="margin-left: 10px;">
                                                            <a id="btn-tambah-rute" class="btn-tambah btn-block-tambah btn-lg-tambah btn-ubah-inverse deleteFile<?php echo $i + 1; ?>" onclick="removeIni3(<?php echo $i + 1; ?>,<?php echo $listFile[$i]['id_file']; ?>)">
                                                                <img src="../img/Notification/delete.png">
                                                            </a>
                                                        </div>
                                                        <div class="keterangan box span-2">
                                                            hapus file
                                                        </div>
                                                    </div>
                                                    <script>
                                                        num3++;
                                                    </script>
                                                    <?php
                                                }
                                                ?>
                                                <div class="tambah box span-12">
                                                    <div class="box span-8-5">
                                                        <input type="file" style="font-size: 14px;" name="uploadfile[]">
                                                    </div>
                                                    <div class="tambah box span-1" style="margin-left: 10px;">
                                                        <a id="btn-tambah-rute" class="btn-tambah btn-block-tambah btn-lg-tambah btn-ubah-inverse deleteFile0" onclick="removeIni3(0,0)">
                                                            <img src="../img/Notification/delete.png">
                                                        </a>
                                                    </div>
                                                    <div class="keterangan box span-2">
                                                        hapus file
                                                    </div>
                                                </div>
                                                <?php
                                            } else {
                                                ?>
                                                <div class="tambah box span-12">
                                                    <div class="box span-8-5">
                                                        <input type="file" style="font-size: 14px;" name="uploadfile[]">
                                                    </div>
                                                    <div class="tambah box span-1" style="margin-left: 10px;">
                                                        <a id="btn-tambah-rute" class="btn-tambah btn-block-tambah btn-lg-tambah btn-ubah-inverse deleteFile0" onclick="removeIni3(0,0)">
                                                            <img src="../img/Notification/delete.png">
                                                        </a>
                                                    </div>
                                                    <div class="keterangan box span-2">
                                                        hapus file
                                                    </div>
                                                </div>

                                                <?php
                                            }
                                            ?>
                                        </div>
                                        <div>
                                            <div class="box span-2" style="margin-top: 5px;">
                                                <div class="tambah box span-4">
                                                    <a class="btn-tambah btn-block-tambah btn-lg-tambah btn-ubah-inverse addFile">
                                                        <img src="../img/Notification/insert.png">
                                                    </a>
                                                </div>
                                                <div class="keterangan box span-8">
                                                    tambah file
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tampung">
                                            
                                        </div>
                                    </div>
                                    <div class="jarak-bawah-tambah box span-12">
                                        <div class="padding box span-2-5">
                                            <b>Kegiatan rutin</b>
                                        </div>
                                        <div class="padding box span-9">
                                            :
                                        </div>
                                    </div>
                                    <div class="box span-12">
                                        <script>
                                            var num2 = 1;
                                        </script>
                                        <?php
                                        $listDataKegiatanRutin = querySelect('*', 'kegiatan_rutin', 'id_masjid=' . $id_masjid, null);
                                        ?>
                                        <div class="box span-12 targetKeg">
                                            <?php
                                            if (count($listDataKegiatanRutin) > 0) {
                                                for ($i = 0; $i < count($listDataKegiatanRutin); $i++) {
                                                    ?>
                                                    <div class="tambah box span-12">
                                                        <div class="box span-3">
                                                            <input class="form field kegiatan" type="text" placeholder="Kegiatan rutin" value="<?php echo $listDataKegiatanRutin[$i]['nama']; ?>" name="kegiatanRutin[]">
                                                        </div>
                                                        <div class="box span-1-8">
                                                            <input class="form field hari" type="text" placeholder="Hari" value="<?php echo $listDataKegiatanRutin[$i]['hari']; ?>" name="hari[]">
                                                        </div>
                                                        <div class="box span-1-8">
                                                            <input class="form field jam" type="text" placeholder="jam" value="<?php echo $listDataKegiatanRutin[$i]['jam_mulai']; ?>" name="jamAwal[]">
                                                        </div>
                                                        <div class="box span-0-5 padding">
                                                            s/d
                                                        </div>
                                                        <div class="box span-2">
                                                            <input class="form field jam" type="text" placeholder="jam" value="<?php echo $listDataKegiatanRutin[$i]['jam_selesai']; ?>" name="jamAkhir[]">
                                                        </div>
                                                        <div class="tambah box span-1">
                                                            <a id="btn-tambah-rute" class="btn-tambah btn-block-tambah btn-lg-tambah btn-ubah-inverse deleteKegiatan<?php echo $i + 1; ?>" onclick="removeIni2(<?php echo $i + 1; ?>)">
                                                                <img src="../img/Notification/delete.png">
                                                            </a>
                                                        </div>
                                                        <div class="keterangan box span-2">
                                                            hapus kegiatan
                                                        </div>
                                                    </div>
                                                    <script>
                                                        num2++;
                                                    </script>
                                                    <?php
                                                }
                                            } else {
                                                ?>
                                                <div class="tambah box span-12">
                                                    <div class="box span-3">
                                                        <input class="form field kegiatan" type="text" placeholder="Kegiatan rutin" value="" name="kegiatanRutin[]">
                                                    </div>
                                                    <div class="box span-1-8">
                                                        <input class="form field hari" type="text" placeholder="Hari" value="" name="hari[]">
                                                    </div>
                                                    <div class="box span-1-8">
                                                        <input class="form field jam" type="text" placeholder="jam" value="" name="jamAwal[]">
                                                    </div>
                                                    <div class="box span-0-5 padding">
                                                        s/d
                                                    </div>
                                                    <div class="box span-2">
                                                        <input class="form field jam" type="text" placeholder="jam" value="" name="jamAkhir[]">
                                                    </div>
                                                    <div class="tambah box span-1">
                                                        <a id="btn-tambah-rute" class="btn-tambah btn-block-tambah btn-lg-tambah btn-ubah-inverse deleteKegiatan0" onclick="removeIni2(0)">
                                                            <img src="../img/Notification/delete.png">
                                                        </a>
                                                    </div>
                                                    <div class="keterangan box span-2">
                                                        hapus kegiatan
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="jarak-bawah box span-12">
                                        <div class="box span-9">
                                            <div class="tambah box span-1">
                                                <a class="btn-tambah btn-block-tambah btn-lg-tambah btn-ubah-inverse addkegiatan">
                                                    <img src="../img/Notification/insert.png">
                                                </a>
                                            </div>
                                            <div class="keterangan box span-11">
                                                tambah kegiatan rutin
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jarak-bawah-tambah box span-12">
                                        <div class="box span-2-5">
                                            <b>Angkot yang lewat</b>
                                        </div>
                                        <div class="box span-9">
                                            :
                                        </div>
                                    </div>
                                    <div class="box span-12">
                                        <div class="box span-12 target">
                                            <script>
                                                var num = 1;
                                            </script>
                                            <?php
                                            $listAngkot = querySelect('*', 'rute_angkot', 'id_masjid=' . $id_masjid, null);
                                            if (count($listAngkot) > 0) {
                                                for ($j = 0; $j < count($listAngkot); $j++) {
                                                    ?>
                                                    <div class="tambah jarak-normal box span-12">
                                                        <div class="box span-4">
                                                            <div class="styled-select-angkot">
                                                                <select name="angkot[]">
                                                                    <option>Pilih angkot</option>
                                                                    <script>
                                                                        var idAngkot = new Array();
                                                                        var jurAngkot = new Array();
                                                                    </script>
                                                                    <?php
                                                                    for ($i = 0; $i < count($angkot); $i++) {
                                                                        if ($listAngkot[$j]['id_angkot']-1 == $i) {
                                                                            echo '<option class="option" value="' . $angkot[$i]['id_angkot'] . '" selected>' . $angkot[$i]['jurusan'] . '</option>';
                                                                        } else {
                                                                            echo '<option class="option" value="' . $angkot[$i]['id_angkot'] . '">' . $angkot[$i]['jurusan'] . '</option>';
                                                                        }
                                                                        echo '<script> idAngkot.push("' . $angkot[$i]['id_angkot'] . '"); jurAngkot.push("' . $angkot[$i]['jurusan'] . '"); </script>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="box span-4-5">
                                                            <input class="form field turun" type="text" placeholder="turun di jalan / tempat?" value="<?php echo $listAngkot[$j]['nama_jalan']; ?>" name="jalan[]">
                                                        </div>
                                                        <div class="tambah box span-1">
                                                            <a id="btn-tambah-rute" class="btn-tambah btn-block-tambah btn-lg-tambah btn-ubah-inverse deleteAngkot<?php echo $j + 1; ?>" onclick="removeIni(<?php echo $j + 1; ?>)">
                                                                <img src="../img/Notification/delete.png">
                                                            </a>
                                                        </div>
                                                        <div class="keterangan box span-2">
                                                            hapus angkot
                                                        </div>
                                                    </div>
                                                    <script>
                                                        num++;
                                                    </script>
                                                    <?php
                                                }
                                            } else {
                                                ?>
                                                <div class="tambah jarak-normal box span-12">
                                                    <div class="box span-4">
                                                        <div class="styled-select-angkot">
                                                            <select name="angkot[]">
                                                                <option>Pilih angkot</option>
                                                                <script>
                                                                    var idAngkot = new Array();
                                                                    var jurAngkot = new Array();
                                                                </script>
                                                                <?php
                                                                for ($i = 0; $i < count($angkot); $i++) {
                                                                    echo '<option class="option" value="' . $angkot[$i]['id_angkot'] . '">' . $angkot[$i]['jurusan'] . '</option>';
                                                                    echo '<script> idAngkot.push("' . $angkot[$i]['id_angkot'] . '"); jurAngkot.push("' . $angkot[$i]['jurusan'] . '"); </script>';
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="box span-4-5">
                                                        <input class="form field turun" type="text" placeholder="turun di jalan / tempat?" value="" name="jalan[]">
                                                    </div>
                                                    <div class="tambah box span-1">
                                                        <a id="btn-tambah-rute" class="btn-tambah btn-block-tambah btn-lg-tambah btn-ubah-inverse deleteAngkot0" onclick="removeIni(0)">
                                                            <img src="../img/Notification/delete.png">
                                                        </a>
                                                    </div>
                                                    <div class="keterangan box span-2">
                                                        hapus angkot
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="box span-12">
                                        <div class="box span-9">
                                            <div class="tambah box span-1">
                                                <a id="btn-tambah-rute" class="btn-tambah btn-block-tambah btn-lg-tambah btn-ubah-inverse addAngkot">
                                                    <img src="../img/Notification/insert.png">
                                                </a>
                                            </div>
                                            <div class="keterangan box span-11">
                                                tambah angkot
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simpan jarak-bawah box span-12">
                                        <input id="submit-button" type='submit' class="btn btn-block btn-lg btn-inverse" value='Simpan data' name="adminmasjid_ubahDataMasjid_submit">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                <?php
                if (isset($_GET['status'])) {
                    if ($_GET['status'] == 'true') {
                        echo '<div id="login_popup1">
                <div class="layer-ubahData box span-12">
                </div>
                <div class="pop-up-ubahData box span-3">
                    <div class="center box span-12">
                        <table class="tabel-sukses">
                            <tr>
                                <td class="center sukses">
                                    Sukses!
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <meta http-equiv="refresh" content="1.5;url=http://localhost/SIMasjid/view/AdminMasjid/index.php" />';
                    } else {
                        echo '<div id="login_popup1">
                <div class="layer-ubahData box span-12">
                </div>
                <div class="pop-up-ubahData box span-3">
                    <div class="center box span-12">
                        <table class="tabel">
                            <tr>
                                <td class="center perhatian">
                                    Perhatian!
                                </td>
                            </tr>
                            <tr>
                                <td class="center jarak-popup">
                                    Data tidak boleh ada yang kosong, silahkan untuk mencoba kembali.
                                </td>
                            </tr>
                        </table>
                        <div class="absolute btn-ok btn-block-ok btn-lg-ok btn-inverse-ok" onclick="getLogin_confirm(1);">Kembali</div>
                    </div>
                </div>
            </div>';
                    }
                }
                ?>
                <div class="footer row">

                </div>
            </div>
        </div>
        <script src="../js/custom.js"></script>
        <script src="../js/jquery-2.1.0.min.js"></script>
        <script src="../js/main.js"></script>
        <script>
            var optAngkot = new String();
            for (var i = 0; i < 25; i++) {
                optAngkot += '<option class="option" value="' + idAngkot[i] + '">' + jurAngkot[i] + '</option>';
            }
            $(document).ready(function () {
                $(".header").load("header.php");
                $(".side").load("sidebar.php");
                $(".addAngkot").on("click", function () {
                    $(".target").append('<div class="tambah jarak-normal box span-12">' +
                            '<div class="box span-4">' +
                            '   <div class="styled-select-angkot">' +
                            '       <select name="angkot[]" id="loadAngkot">' +
                            '           <option value="">Pilih angkot</option>' +
                            optAngkot +
                            '       </select>' +
                            '   </div>' +
                            '</div>' +
                            '<div class="box span-4-5">' +
                            '   <input class="form field turun" type="text" placeholder="turun di jalan / tempat?" value="" name="jalan[]">' +
                            '</div>' +
                            '<div class="tambah box span-1">' +
                            '   <a id="btn-tambah-rute" class="btn-tambah btn-block-tambah btn-lg-tambah btn-ubah-inverse deleteAngkot' + num + '" onclick="removeIni(' + num + ')">' +
                            '       <img src="../img/Notification/delete.png">' +
                            '   </a>' +
                            '</div>' +
                            '<div class="keterangan box span-2">' +
                            '   hapus angkot' +
                            '</div>' +
                            '</div>'
                            );
                    num++;
                });

                $(".addkegiatan").on("click", function () {
                    $(".targetKeg").append('<div class="tambah box span-12">' +
                            '<div class="box span-3">' +
                            '   <input class="form field kegiatan" type="text" placeholder="Kegiatan rutin" value="" name="kegiatanRutin[]">' +
                            '</div>' +
                            '<div class="box span-1-8">' +
                            '   <input class="form field hari" type="text" placeholder="Hari" value="" name="hari[]">' +
                            '</div>' +
                            '<div class="box span-1-8">' +
                            '   <input class="form field jam" type="text" placeholder="jam" value="" name="jamAwal[]">' +
                            '</div>' +
                            '<div class="box span-0-5 padding">' +
                            '   s/d' +
                            '</div>' +
                            '<div class="box span-2">' +
                            '   <input class="form field jam" type="text" placeholder="jam" value="" name="jamAkhir[]">' +
                            '</div>' +
                            '<div class="tambah box span-1">' +
                            '   <a id="btn-tambah-rute" class="btn-tambah btn-block-tambah btn-lg-tambah btn-ubah-inverse deleteKegiatan' + num2 + '" onclick="removeIni2(' + num2 + ')">' +
                            '       <img src="../img/Notification/delete.png">' +
                            '   </a>' +
                            '</div>' +
                            '<div class="keterangan box span-2">' +
                            '   hapus kegiatan' +
                            '</div>' +
                            '</div>');
                    num2++;
                });


                $(".addFile").on("click", function () {
                    $(".targetFile").append('<div class="tambah box span-12">' +
                            '<div class="box span-8-5">' +
                            '   <input type="file" style="font-size: 14px;" name="uploadfile[]">' +
                            '</div>' +
                            '<div class="tambah box span-1" style="margin-left: 10px;">' +
                            '   <a id="btn-tambah-rute" class="btn-tambah btn-block-tambah btn-lg-tambah btn-ubah-inverse deleteFile' + num3 + '" onclick="removeIni3(' + num3 + ',0)">' +
                            '       <img src="../img/Notification/delete.png">' +
                            '   </a>' +
                            '</div>' +
                            '<div class="keterangan box span-2">' +
                            '   hapus file' +
                            '</div>' +
                            '</div>');
                    num3++;
                });
            });

            function removeIni(x) {
                $(".deleteAngkot" + x).parent().parent().remove();
            }

            function removeIni2(x) {
                $(".deleteKegiatan" + x).parent().parent().remove();
            }
            
            function removeIni3(x, hps) {
                $(".tampung").append("<input type='hidden' value='"+hps+"' name='idFileHapus[]'>");
                $(".deleteFile" + x).parent().parent().remove();
            }
        </script>
    </body>
</html>