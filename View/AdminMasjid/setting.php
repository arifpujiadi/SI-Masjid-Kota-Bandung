<?php
session_start();
require_once '../../function/connectDB.php';
$id_user = $_SESSION['user'][3];
$iduser = querySelect('*', 'user', 'id_user=' . $id_user, null);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Setting</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/AdminUtama/style.css">
        <link rel="stylesheet" href="../css/AdminUtama/sidebar.css">
        <link rel="stylesheet" href="../css/AdminMasjid/setting.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-full">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="side box span-1-8">

                    </div>
                    <form method='GET' action='../../function/script/edit/editSetting.php'>

                        <div class="box span-10-3">
                            <div class="kotak-atas box span-12">
                                <div class="kotak-judul box span-12">
                                    Setting
                                </div>
                            </div>
                            <input hidden type="text" name="user_id" value="<?php echo $iduser[0]['id_user'] ?>"/>
                            <div class="kotak-tengah box span-12">
                                <div class="jarak box span-12">
                                    <div class="padding box span-3">
                                        Username
                                    </div>
                                    <div class="padding box span-0-5">
                                        :
                                    </div>
                                    <div class="box span-3">
                                        <input class="form field id" type="text"  id="username" placeholder="Username admin" value="<?php echo $iduser[0]['username']; ?>" name="username">
                                    </div>
                                    <div class="kolom-field box span-4">
                                        <p id="avail-notif"></p>
                                    </div>
                                </div>
                                <div class="jarak box span-12">
                                    <div class="padding box span-3">
                                        Password
                                    </div>
                                    <div class="padding box span-0-5">
                                        :
                                    </div>
                                    <div class="box span-3">
                                        <input class="form field pass" type="password" placeholder="Password masih sama" value="" name="password" id="password">
                                    </div>
                                    <div class="kolom-field box span-4">
                                        <p id="password-notif"></p>
                                    </div>
                                </div>
                                <div class="jarak box span-12">
                                    <div class="padding box span-3">
                                        Konfirmasi password anda
                                    </div>
                                    <div class="padding box span-0-5">
                                        :
                                    </div>
                                    <div class="box span-3">
                                        <input class="form field pass" type="password" placeholder="Konfirmasi password" value="" id="confirmPassword">
                                    </div>
                                    <div class="box span-4 alert">
                                        <p id="confirm-notif"></p>
                                        <p id="alert-notif" style="color:red;"></p>
                                    </div>
                                </div>

                                <div class="simpan jarak-bawah box span-12">
                                    <input id="submit-button" type='submit' class="btn btn-block btn-lg btn-inverse" value='Ubah' name="adminutama_ubahsetting_submit">
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
            <meta http-equiv="refresh" content="1.5;url=http://localhost/SIMasjid/view/AdminMasjid/index.php" />';
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
        <script>
            var statUsername = false;
            $("#username").keyup(function () {
                if ($("#username").val().length > 1) {
                    $.post('../../function/script/add/addUser.php', {username: $(this).val()}, function (data) {
                        data = JSON.parse(data);
                        if (data.code === 400) {
                            $('#avail-notif').css('color', 'red');
                            $('#avail-notif').text('Username terpakai');
                            statUsername = false;

                        } else if (data.code === 200) {
                            $('#avail-notif').css('color', 'green');
                            $('#avail-notif').text('Username tersedia');
                            statUsername = true;
                        }
                        if ($('#username').val().length === 0) {
                            $('#avail-notif').text(" ");
                            statUsername = false;
                        }
                    });
                }
            });


            $("#password").keyup(function () {
                if ($("#password").val().length > 0 && $("#password").val().length < 8) {
                    $('#password-notif').css('color', 'red');
                    $('#password-notif').html('Password harus terdiri dari min. 8 karakter');
                } else {
                    var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
                    var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
                    var enoughRegex = new RegExp("(?=.{6,}).*", "g");

                    if (false == enoughRegex.test($(this).val())) {
                        $('#password-notif').html('Kurang');
                    } else if (strongRegex.test($(this).val())) {
                        $('#password-notif').css('color', 'green');
                        $('#password-notif').html('Kualitas Password Baik');
                    } else if (mediumRegex.test($(this).val())) {
                        $('#password-notif').css('color', '#aa7722');
                        $('#password-notif').html('Kualitas Password Cukup');
                    } else {
                        $('#password-notif').css('color', 'red');
                        $('#password-notif').html('Kualitas Password Kurang');
                    }
                    if ($('#password').val().length === 0) {
                        $('#password-notif').text('');
                    }
                }
            });

            $('#confirmPassword').keyup(function () {
                var pass = $('#password').val();
                var confirm = $('#confirmPassword').val();

                if ($('#password').val().length === 0) {

                } else {

                    if (pass != confirm) {
                        $('#confirm-notif').css('color', 'red');
                        $('#confirm-notif').text('Password tidak cocok');
                        $('#submit-button').attr('disabled', 'disabled');
                    } else {
                        $('#confirm-notif').css('color', 'green');
                        $('#confirm-notif').text('Password cocok');
                        $('#submit-button').removeAttr('disabled');
                    }
                }
                if ($('#confirmPassword').val().length === 0) {
                    $('#confirm-notif').text('');
                }

            });
        </script>
    </body>
</html>