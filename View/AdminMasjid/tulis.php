<!DOCTYPE html>
<?php
session_start();
require_once '../../function/connectDB.php';
?>
<html>
    <head>
        <title>Tulis Admin Masjid</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/AdminMasjid/style.css">
        <link rel="stylesheet" href="../css/AdminMasjid/sidebarMessage.css">
        <link rel="stylesheet" href="../css/AdminMasjid/tulis.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-full">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="side box span-1-8">

                    </div>
                    <form method='POST' action='../../function/script/add/addTulisPesanAM.php' enctype="multipart/form-data">
                        <div class="box span-10-3">
                            <div class="baris box span-12">
                                <div class="inherit box span-1">
                                    <table class="tabel">
                                        <tr>
                                            <td class="keterangan">
                                                Ke
                                            </td>
                                            <td class="titik">
                                                :
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="inherit box span-11">
                                    <div class="tab-cont box span-12">
                                        <ul class="tab">
                                            <li>
                                                <a href="#pAdminUtama">Admin utama</a>
                                            </li>
                                            <li>
                                                <a href="#pAdminMasjid">Admin masjid</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="isiTab box span-12">
                                <div class="box span-12 pesan-display active" id="pAdminUtama">
                                    <div class="baris box span-12">
                                        <div class="inherit box span-1">
                                            <table class="tabel">
                                                <tr>
                                                    <td class="keterangan">
                                                        Judul
                                                    </td>
                                                    <td class="titik">
                                                        :
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="judul inherit box span-11">
                                            <input class="form field" type="text" placeholder="Judul pesan" value="" name="judulPesanAU">
                                        </div>
                                    </div>
                                    <div class="isi box span-12">
                                        <div class="inherit box span-1">
                                            <table class="tabel">
                                                <tr>
                                                    <td class="keterangan">
                                                        Isi
                                                    </td>
                                                    <td class="titik">
                                                        :
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="box span-10">
                                            <textarea class="textarea" rows="20" cols="121" name="isiPesanAU" style="font-size: 12px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="baris box span-12">
                                        <div class="inherit box span-1">
                                            <table class="tabel">
                                                <tr>
                                                    <td class="keterangan">
                                                        File
                                                    </td>
                                                    <td class="titik">
                                                        :
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="button box inherit span-5">
                                            <input type="file" name="uploadfile1">
                                        </div>
                                        <div class="infoFile box inherit span-6">
                                            (Ukuran file kurang dari 2MB)
                                        </div>
                                    </div>
                                    <div class="baris box span-12">
                                        <div class="inherit box span-1">
                                            <table class="tabel">
                                                <tr>
                                                    <td class="keterangan">
                                                        Kirim
                                                    </td>
                                                    <td class="titik">
                                                        :
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="kirim inherit box span-11">
                                            <input type='submit' class="btn btn-block btn-lg btn-inverse" value='Kirim' name="adminmasjid_tulisPesankeadminutama_submit">
                                        </div>
                                    </div>
                                </div>
                                <div class="box span-12 pesan-display" id="pAdminMasjid">
                                    <div class="baris box span-12">
                                        <div class="inherit box span-1">
                                            <table class="tabel">
                                                <tr>
                                                    <td class="keterangan">
                                                        Masjid
                                                    </td>
                                                    <td class="titik">
                                                        :
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="inherit box span-6">
                                            <div class="combo inherit box span-3">
                                                <div class="styled-select">
                                                    <select name="wilayahMasjid" onchange="getMasjidByWilayah(this.value)">
                                                        <option>Pilih wilayah</option>
                                                        <?php include '../../function/script/select/wilayahMasjid.php' ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="combo inherit box span-3">
                                                <div class="styled-select">
                                                    <select id="tambahBeritaMasjid_selectMasjid" name="id_masjid">
                                                        <option>Pilih masjid</option>
                                                        onchange
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="baris box span-12">
                                        <div class="inherit box span-1">
                                            <table class="tabel">
                                                <tr>
                                                    <td class="keterangan">
                                                        Judul
                                                    </td>
                                                    <td class="titik">
                                                        :
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="judul inherit box span-11">
                                            <input class="form field" type="text" placeholder="Judul pesan" value="" name="judulPesan">
                                        </div>
                                    </div>
                                    <div class="isi box span-12">
                                        <div class="inherit box span-1">
                                            <table class="tabel">
                                                <tr>
                                                    <td class="keterangan">
                                                        Isi
                                                    </td>
                                                    <td class="titik">
                                                        :
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="box span-10">
                                            <textarea class="textarea" rows="20" cols="121" name="isiPesan" style="font-size: 12px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="baris box span-12">
                                        <div class="inherit box span-1">
                                            <table class="tabel">
                                                <tr>
                                                    <td class="keterangan">
                                                        File
                                                    </td>
                                                    <td class="titik">
                                                        :
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="button box inherit span-5">
                                            <input type="file" name="uploadfile2">
                                        </div>
                                        <div class="infoFile box inherit span-6">
                                            (Ukuran file kurang dari 2MB)
                                        </div>
                                    </div>
                                    <div class="baris box span-12">
                                        <div class="inherit box span-1">
                                            <table class="tabel">
                                                <tr>
                                                    <td class="keterangan">
                                                        Kirim
                                                    </td>
                                                    <td class="titik">
                                                        :
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="kirim inherit box span-11">
                                            <input type='submit' class="btn btn-block btn-lg btn-inverse" value='Kirim' name="adminmasjid_tulisPesankeadminmasjid_submit">
                                        </div>
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
                <div class="layer box span-12">
                </div>
                <div class="pop-up box span-3">
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
            <meta http-equiv="refresh" content="2;url=http://localhost/SIMasjid/view/AdminMasjid/inbox.php" />';
                    } else {
                        echo '<div id="login_popup1">
                <div class="layer box span-12">
                </div>
                <div class="pop-up box span-3">
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
            $(document).ready(function () {
                $(".header").load("header.php");
                $(".side").load("sidebarMessage.php");
            });
        </script>
    </body>
</html>