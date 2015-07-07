<?php
require_once '../../function/connectDB.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ubah Video Informasi Masjid</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/AdminUtama/style.css">
        <link rel="stylesheet" href="../css/AdminUtama/sidebar.css">
        <link rel="stylesheet" href="../css/AdminUtama/tambahVideo.css">
    </head>
    <body>
        <?php
        $isi_video_masjid = querySelect('*', 'video_informasi_masjid', 'id_video_masjid=' . $_GET['id_video_masjid'], null);
        ?>
        <div class="wrapper">
            <div class="col-full">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="side box span-1-8">

                    </div>
                    <form method='GET' action='../../function/script/edit/editVideoMasjidAU.php'>
                        <div class="box span-10-3">
                            <div class="kotak-tengah box span-12">
                                <div class="kotak-judul box span-12">
                                    Ubah Video Ceramah
                                </div>
                                <input hidden type="text" name="id_video_masjid" value="<?php echo $_GET['id_video_masjid'] ?>"/>
                                <div class="judul box span-12">
                                    <div class="padding box span-1-5">
                                        Judul video
                                    </div>
                                    <div class="padding box span-0-5">
                                        :
                                    </div>
                                    <div class="box span-10">
                                        <input class="form field judul-video" type="text" placeholder="Judul video" value="<?php echo $isi_video_masjid[0]['judul']; ?>" name="judulVideoMasjid">
                                    </div>
                                </div>
                                <div class="judul box span-12">
                                    <div class="padding box span-1-5">
                                        Pilih masjid
                                    </div>
                                    <div class="padding box span-0-5">
                                        :
                                    </div>
                                    <div class="box span-2">
                                        <div class="styled-select">
                                            <select name="wilayahMasjid" onchange="getMasjidByWilayah(this.value)">
                                                <option>Pilih wilayah</option>
                                                <?php include '../../function/script/select/wilayahMasjid.php' ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="box span-8">
                                        <div class="styled-select">
                                            <select id="tambahBeritaMasjid_selectMasjid" name="id_masjid">
                                                <option>Pilih masjid</option>
                                                onchange
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="judul box span-12">
                                    <div class="box span-1-5">
                                        Embed youtube
                                    </div>
                                    <div class="box span-0-5">
                                        :
                                    </div>
                                    <div class="box span-10">
                                        <textarea class="textarea" rows="9" cols="103" name="embedVideoMasjid" style="font-size: 12px;"><?php echo $isi_video_masjid[0]['embed']; ?></textarea>
                                    </div>
                                </div>
                                <div class="simpan box span-12">
                                    <input type='submit' class="btn btn-block btn-lg btn-inverse" value='Simpan' name="adminutama_ubahvideomasjid_submit">
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