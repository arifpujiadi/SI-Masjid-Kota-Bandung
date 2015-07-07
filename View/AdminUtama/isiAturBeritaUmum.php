<!DOCTYPE html>
<?php
require_once '../../function/connectDB.php';
$id_berita_umum = $_REQUEST['berita_id'];
?>
<html>
    <head>
        <title>Ubah Berita Umum</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/AdminUtama/style.css">
        <link rel="stylesheet" href="../css/AdminUtama/sidebar.css">
        <link rel="stylesheet" href="../css/AdminUtama/tambahBeritaUmum.css">
    </head>
    <body>
        <?php
            $isi_berita_umum= querySelect('*','berita_umum','id_berita_umum='.$_GET['berita_id'],null);
        ?>
        <div class="wrapper">
            <div class="col-full">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="side box span-1-8">
                        
                    </div>
                    <form method='POST' action='../../function/script/edit/editBeritaUmum.php' enctype="multipart/form-data">
                        <div class="box span-10-3">
                            <div class="kotak-tengah box span-12">
                                <div class="kotak-judul box span-12">
                                    Ubah Berita Umum
                                </div>
                                <input hidden type="text" name="id_berita_umum" value="<?php echo $id_berita_umum ?>"/>
                                <div class="judul box span-12">
                                    <div class="padding box span-1-5">
                                        Judul
                                    </div>
                                    <div class="padding box span-0-5">
                                        :
                                    </div>
                                    <div class="box span-10">
                                        <input class="form field judul-berita" type="text" placeholder="Judul berita" value="<?php echo $isi_berita_umum[0]['judul']?>" name="judulBerita">
                                    </div>
                                </div>
                                <div class="judul box span-12">
                                    <div class="kolom box span-1-5">
                                        Gambar berita
                                    </div>
                                    <div class="kolom box span-0-5">
                                        :
                                    </div>
                                    <div class="button box span-5" style="font-size: 14px;">
                                        <input type="file" name="uploadgambarberita">
                                    </div>
                                    <div class="box span-3" style="font-size: 14px; padding-top: 4px;">
                                        (Ukuran file kurang dari 2MB)
                                    </div>
                                </div>
                                <div class="judul box span-12">
                                    <div class="padding box span-1-5">
                                        Editor
                                    </div>
                                    <div class="padding box span-0-5">
                                        :
                                    </div>
                                    <div class="box span-10">
                                        <input class="form field nama" type="text" placeholder="Editor" value="<?php echo $isi_berita_umum[0]['editor']?>" name="editor">
                                    </div>
                                </div>
                                <div class="judul box span-12">
                                    <div class="padding box span-1-5">
                                        Sumber
                                    </div>
                                    <div class="padding box span-0-5">
                                        :
                                    </div>
                                    <div class="box span-10">
                                        <input class="form field nama" type="text" placeholder="Sumber" value="<?php echo $isi_berita_umum[0]['sumber']?>" name="sumber">
                                    </div>
                                </div>
                                <div class="judul box span-12">
                                    <div class="padding box span-1-5">
                                        Link
                                    </div>
                                    <div class="padding box span-0-5">
                                        :
                                    </div>
                                    <div class="box span-10">
                                        <input class="form field judul-berita" type="text" placeholder="Link sumber" value="<?php echo $isi_berita_umum[0]['link']?>" name="link">
                                    </div>
                                </div>
                                <div class="judul box span-12">
                                    <div class="box span-1-5">
                                        Isi Berita
                                    </div>
                                    <div class="box span-0-5">
                                        :
                                    </div>
                                    <div class="box span-10">
                                        <textarea class="textarea" rows="13" cols="103" name="isiBerita" style="font-size: 12px;">
                                            <?php echo str_replace('<br />', "",$isi_berita_umum[0]['isi_berita']);?>
                                        </textarea>
                                    </div>
                                </div>
                                <div class="simpan box span-12">
                                    <input type='submit' class="btn btn-block btn-lg btn-inverse" value='Simpan' name="adminutama_ubahberitaumum_submit">
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
            <meta http-equiv="refresh" content="2;url=http://localhost/SIMasjid/view/AdminUtama/index.php" />';
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
                $(".side").load("sidebar.php");
            });
        </script>
    </body>
</html>