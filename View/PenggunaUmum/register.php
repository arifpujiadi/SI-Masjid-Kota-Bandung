<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <title>Register</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/PenggunaUmum/register.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-full">
                <div class="header row">

                </div>
                <div class="content row">
                    <form id="formRegister" method='POST' action='../../function/script/add/addRegister.php' enctype="multipart/form-data">
                        <div class="login box">
                            <div class="col">
                                <div class="judul box span-12">
                                    Buat Akun Masjid Untuk DKM Yang Ingin Bergabung
                                </div>
                                <div class="kotak-luar box span-12">
                                    <div class="baris box span-6">
                                        <div class="baris box span-12">
                                            <div class="kolom box span-4">
                                                Username
                                            </div>
                                            <div class="kolom box span-0-5">
                                                :
                                            </div>
                                            <div class="kolom-field box span-4">
                                                <input class="form field pass" type="text" id="username" placeholder="Username admin" value="" name="username" onkeyup="">
                                            </div>
                                            <div class="kolom-field box span-3" style="font-size: 14px;">
                                                <p id="avail-notif"></p>
                                                <p id="onclick-notif"></p>
                                            </div>
                                        </div>
                                        <div class="baris box span-12">
                                            <div class="kolom box span-4">
                                                Buat password
                                            </div>
                                            <div class="kolom box span-0-5">
                                                :
                                            </div>
                                            <div class="kolom-field box span-4">
                                                <input class="form field pass" type="password" placeholder="Password" value="" name="password" id="password" onkeyup="">
                                            </div>
                                            <div class="kolom-field box span-3" style="font-size: 14px; padding-top: 0;">
                                                <p id="password-notif"></p>
                                            </div>
                                        </div>
                                        <div class="baris box span-12">
                                            <div class="kolom box span-4">
                                                Konfirmasi password anda
                                            </div>
                                            <div class="kolom box span-0-5">
                                                :
                                            </div>
                                            <div class="kolom-field box span-4">
                                                <input class="form field pass" type="password" placeholder="Konfirmasi password" value="" id="confirmPassword">
                                            </div>
                                            <div class="kolom-field notif box span-3" style="font-size: 14px;">
                                                <p id="confirm-notif"></p>
                                                <p id="alert-notif" style="color:red;"></p>
                                            </div>
                                        </div>
                                        <div class="baris-upload box span-12">
                                            <div class="kolom box span-4">
                                                Scan sertifikat wakaf
                                            </div>
                                            <div class="kolom box span-0-5">
                                                :
                                            </div>
                                            <div class="button box span-7-5" style="font-size: 14px;">
                                                <input type="file" name="uploadsertifikat">
                                            </div>
                                        </div>
                                        <div class="baris box span-12" style="padding-top: 5px;">
                                            <div class="box span-4" style="margin-top: -10px;">
                                                <font style="font-size: 12px;">Halaman Pendaftaran pertama </font>(<font style="color:red; font-size: 12px;">Validasi</font>)
                                            </div>
                                            <div class="kolom box span-0-5">
                                                &nbsp;
                                            </div>
                                            <div class="box span-7-5" style="font-size: 14px;">
                                                ( Ukuran file kurang dari 2MB )
                                            </div>
                                        </div>
                                        <div class="baris-upload box span-12">
                                            <div class="kolom box span-4">
                                                Foto masjid 
                                            </div>
                                            <div class="kolom box span-0-5">
                                                :
                                            </div>
                                            <div class="button box span-7-5" style="font-size: 14px;">
                                                <input type="file" name="uploadfoto">
                                            </div>
                                        </div>
                                        <div class="baris box span-12" style="padding-top: 5px;">
                                            <div class="kolom box span-4">
                                                &nbsp;
                                            </div>
                                            <div class="kolom box span-0-5">
                                                &nbsp;
                                            </div>
                                            <div class="box span-7-5" style="font-size: 14px;">
                                                ( Ukuran file kurang dari 2MB )
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kanan box span-6">
                                        <div class="baris box span-12" >
                                            <div class="kolom box span-3">
                                                Wilayah masjid
                                            </div>
                                            <div class="kolom box span-0-5">
                                                :
                                            </div>
                                            <div class="button box span-2-5">
                                                <div class="styled-select">
                                                    <select name="wilayahMasjid" class="form">
                                                        <option value="">Pilih wilayah</option>
                                                        <?php include '../../function/script/select/wilayahMasjid.php' ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="baris box span-12">
                                            <div class="kolom box span-3">
                                                Nama masjid
                                            </div>
                                            <div class="kolom box span-0-5">
                                                :
                                            </div>
                                            <div class="kolom-field box span-8">
                                                <input class="form field id" type="text" placeholder="Nama masjid" value="" name="namaMasjid">
                                            </div>
                                        </div>
                                        <div class="baris box span-12">
                                            <div class="kolom box span-3">
                                                Alamat
                                            </div>
                                            <div class="kolom box span-0-5">
                                                :
                                            </div>
                                            <div class="kolom-field box span-8">
                                                <input class="form field id" type="text" placeholder="Alamat" value="" name="alamat">
                                            </div>
                                        </div>
                                        <div class="baris box span-12">
                                            <div class="kolom box span-3">
                                                Email
                                            </div>
                                            <div class="kolom box span-0-5">
                                                :
                                            </div>
                                            <div class="kolom-field box span-5">
                                                <input id="idEmail" class="form field id" type="text" placeholder="Email" name="email" onchange="">
                                            </div>
                                            <div class="valid-panjang inherit box span-3-3">
                                                <p id="emailAlert"></p>
                                            </div>
                                        </div>
                                        <div class="baris box span-12">
                                            <div class="kolom box span-3">
                                                RT
                                            </div>
                                            <div class="kolom box span-0-5">
                                                :
                                            </div>
                                            <div class="kolom-field box span-4">
                                                <input id="RT" class="form field kecil" type="text" placeholder="RT" value="" name="rt" onkeyup="">
                                            </div>
                                            <div class="valid-pendek inherit box span-4">
                                                <p id="RTAlert"></p>
                                            </div>
                                        </div>
                                        <div class="baris box span-12">
                                            <div class="kolom box span-3">
                                                RW
                                            </div>
                                            <div class="kolom box span-0-5">
                                                :
                                            </div>
                                            <div class="kolom-field box span-4">
                                                <input id="RW" class="form field kecil" type="text" placeholder="RW" value="" name="rw" onkeyup="">
                                            </div>
                                            <div class="valid-pendek inherit box span-4">
                                                <p id="RWAlert"></p>
                                            </div>
                                        </div>
                                        <div class="baris box span-12">
                                            <div class="kolom box span-3">
                                                Kecamatan
                                            </div>
                                            <div class="kolom box span-0-5">
                                                :
                                            </div>
                                            <div class="kolom-field box span-8">
                                                <input class="form field kecil" type="text" placeholder="Kecamatan" value="" name="kecamatan">
                                            </div>
                                        </div>
                                        <div class="baris box span-12">
                                            <div class="kolom box span-3">
                                                Nomer telepon
                                            </div>
                                            <div class="kolom box span-0-5">
                                                :
                                            </div>
                                            <div class="kolom-field box span-4">
                                                <input id="Telp" class="form field kecil" type="text" placeholder="Nomer telepon" value="" name="noTelp" onkeyup="">
                                            </div>
                                            <div class="valid-pendek inherit box span-4">
                                                <p id="TelpAlert"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="baris-buat box span-12">
                                    <div class="buat box span-12">
                                        <input id="submit-button" type='submit' class="btn btn-block btn-lg btn-inverse" value='Buat' name="penggunaumum_register_submit">
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
            <meta http-equiv="refresh" content="2;url=http://localhost/SIMasjid/view/PenggunaUmum/login.php" />';
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
        <script src="../js/jquery-2.1.0.min.js"></script>
        <script src="../js/custom.js"></script>
        <script src="../js/main.js"></script>
        <script src="../js/register.js"></script>
    </body>
</html>