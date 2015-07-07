<?php
require_once '../../function/connectDB.php';
session_start();
$id_masjid = $_SESSION['id_masjid_admin'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Galeri masjid</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/AdminMasjid/style.css">
        <link rel="stylesheet" href="../css/AdminMasjid/sidebar.css">
        <link rel="stylesheet" href="../css/AdminMasjid/galeri.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-full">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="side box span-1-8">

                    </div>
                    <form method='POST' action='../../function/script/edit/editGaleri.php' enctype="multipart/form-data">
                        <div class="box span-10-3">
                            <div class="kotak-tengah box span-12">
                                <input hidden type="text" name="id_masjid" value="<?php echo $id_masjid ?>"/>

                                <div class="tombol box span-12">
                                    <div class="browse box span-6">
                                        <div class="input-atas box span-12">
                                            <input type="file" style="font-size: 14px;" name="uploadgaleri[]" multiple="">
                                        </div>
                                        <div class="input-bawah box span-12" style="margin-top: 5px;">
                                            ( Ukuran setiap foto kurang dari 2MB ) 
                                        </div>
                                    </div>
                                    <div class="submit box span-6">
                                        <input id="submit-button" type='submit' class="btn btn-block btn-lg btn-inverse" value='Simpan foto' name="adminmasjid_simpanFoto_submit">
                                    </div>
                                </div>
                                <div class="foto kotak-luar box span-12">
                                    <?php 
                                    $dataFotoGaleri = querySelect('*', 'galeri', 'id_masjid='.$id_masjid, null);
                                    for($i=0; $i<count($dataFotoGaleri); $i++){
                                        
                                    ?>
                                    <div class="kotak-luar-foto box span-4">
                                        <div class="kotak-dalam-foto box span-12">
                                            <div class="gambar box span-12">
                                                <img src="<?php echo $dataFotoGaleri[$i]['alamat_foto']?>" style="box-shadow: 0px 0px 5px #000;">
                                            </div>
                                            <div class="box span-12">
                                                <input class="form field nama" type="text" placeholder="Keterangan judul foto" value="<?php echo $dataFotoGaleri[$i]['judul_foto']?>" name="judulGaleri[]">
                                                <input type="hidden" name="idGaleri[]" value="<?php echo $dataFotoGaleri[$i]['id_foto']; ?>">
                                            </div>
                                            <div class="check box span-12">
                                                <div class="check-box box span-1">
                                                    <input type="checkbox" name="hapusGaleri[]" value="<?php echo $dataFotoGaleri[$i]['id_foto']; ?>">
                                                </div>
                                                <div class="hapus box span-11">
                                                    <font style="color: #333;">Hapus foto</font>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>

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
            <meta http-equiv="refresh" content="2;url=http://localhost/SIMasjid/view/AdminMasjid/galeri.php" />';
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
                                    Data foto galeri melebihi kapasitas yaitu maksimal 18 foto, silahkan untuk kembali.
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
                $(".side").load("sidebar.php");
            });
        </script>
    </body>
</html>