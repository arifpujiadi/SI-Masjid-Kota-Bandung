<!DOCTYPE html>
<?php
session_start();
require_once '../../function/connectDB.php';
$id_user = $_SESSION['user'][3];
?>
<html>
    <head>
        <title>Inbox Admin Utama</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/AdminUtama/style.css">
        <link rel="stylesheet" href="../css/AdminUtama/sidebarMessage.css">
        <link rel="stylesheet" href="../css/AdminUtama/inbox.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-full">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="side box span-1-8">

                    </div>
                    <form method='POST' action='../../function/script/edit/editInboxAU.php' enctype="multipart/form-data">
                        <div class="box span-10-3">
                            <div class="kotak-judul box span-12">
                                <div class="box span-0-5">
                                    <div class="check center box span-12">
                                        <input type="checkbox" class="clickAll" id="clickAll">
                                    </div>
                                </div>
                                <div class="hapus box span-11">
                                    <div class="gambar box span-0-5">
                                        <img class="trash" src="../img/Icon/Trash.png">
                                    </div>
                                    <div class="hapus-text box span-8">
                                        <input id="submit-button" type='submit' class="btn btn-block btn-lg btn-inverse" value='Hapus' name="adminmasjid_hapusinbox_submit">
                                    </div>
                                </div>
                            </div>
                            <div class="slider box span-12">
                                <?php
                                $_SESSION['pesanAU'] = querySelect('*', 'pesan', 'ke=' . $id_user . ' AND status=0 ORDER BY tanggal_upload DESC', null);
                                if (isset($_GET['offset'])) {
                                    $offset = (int) $_GET['offset'];
                                } else {
                                    $offset = 0;
                                }
                                $pagination = 0;
                                for ($i = 0; $i < count($_SESSION['pesanAU']); $i++) {
                                    if ($i >= $offset) {
                                        if ($pagination < 10) {
                                            ?>
                                            <div class="message box span-12">
                                                <div class="inherit box span-0-5">
                                                    <div class="checkbox center box span-12">
                                                        <input type="checkbox" name="msg[]" class="msg" value="<?php echo $_SESSION['pesanAU'][$i]['id_pesan']; ?>">
                                                    </div>
                                                </div>
                                                <a class="href-black" href="isiPesanInbox.php?pesan_id=<?php echo $_SESSION['pesanAU'][$i]['id_pesan']; ?>">
                                                    <div class="jarak box span-2-5">
                                                        Dari : <?php echo $_SESSION['pesanAU'][$i]['nama_dari'] ?>
                                                    </div>
                                                    <div class="jarak box span-6-5">
                                                        <?php echo $_SESSION['pesanAU'][$i]['judul'] ?>
                                                    </div>
                                                    <div class="jarak box span-2-5">
                                                        <?php echo $_SESSION['pesanAU'][$i]['tanggal_upload'] ?>
                                                    </div>
                                                </a>
                                            </div>
                                            <?php
                                            $pagination++;
                                        } else {
                                            break;
                                        }
                                    }
                                }
                                ?>

                            </div>
                            <div class="button box span-12">
                                <div class="panah-kiri box span-1">
                                    <?php
                                    $offset_arrow = $offset - 1;
                                    if ($offset_arrow <= 0) {
                                        ?>
                                        <a href="inbox.php?offset=<?php echo $offset - 10; ?>">
                                            &nbsp;
                                        </a>
                                        <?php
                                    } else if ($offset_arrow > 0) {
                                        ?>
                                        <a href="inbox.php?offset=<?php echo $offset - 10; ?>">
                                            <img class="panah" src="../img/Panah/Kiri-2.png">
                                        </a>

                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="box span-10">&nbsp;</div>
                                <?php
                                if ($offset_arrow + 10 < sizeof(sizeof($_SESSION['pesanAU']))) {
                                    ?>
                                    <div class="panah-kanan box span-1">
                                        <a href="inbox.php?offset=<?php echo $offset + 10; ?>">
                                            <img class="panah" src="../img/Panah/Kanan-2.png">
                                        </a>
                                    </div>
                                    <?php
                                }
                                ?>
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
            <meta http-equiv="refresh" content="1.5;url=http://localhost/SIMasjid/view/AdminUtama/inbox.php" />';
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
                                    Tidak ada pesan inbox yang dipilih, silahkan coba kembali.
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
            $('.clickAll').click(function () {
                if (document.getElementById("clickAll").checked) {
                    $('.msg').each(function () {
                        $(this).prop('checked', true);
                    });
                } else {
                    $('.msg').each(function () {
                        $(this).prop('checked', false);
                    });
                }
            });
        </script>
    </body>
</html>