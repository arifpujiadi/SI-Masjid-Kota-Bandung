<?php
session_start();
?>
<div class="header-top box">
    <div class="col-scrl">
        <div class="head box span-12">
            <div class="box span-1-8">
                <a href="index.php"><img src="../img/SIM/Logo.png"></a>
            </div>
            <div class="head-right box span-10-3">
                <div class="box span-5">
                    &nbsp;
                </div>
                <div class="welcome box span-5">
                    <div class="box span-12">
                        <img src="../img/AdminMasjid/Icon-2.png">
                        <table class="table">
                            <tr>
                                <td>
                                    <?php
                                    $_SESSION['user'][1];
                                    if ($_SESSION['user'][2] == 0) {
                                        echo "Admin Utama";
                                    } else {
                                        require_once '../../function/connectDB.php';
                                        $idmsjd = $_SESSION['user'][3];
                                        $nama_masjid = querySelect('*', 'masjid', 'id_user ='.$idmsjd, null);
                                        echo "Admin Masjid ".$nama_masjid[0]['nama_masjid'];
                                    }
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="notif box span-1">
                    <div class="box span-12">
                        <div class="box span-6">
                            <a href="inbox.php"><img src="../img/Notification/email.png"></a>
                        </div>
                        <div class="box span-6">
                            <a href="setting.php"><img src="../img/Notification/setting.png"></a>
                        </div>
                    </div>
                </div>
                <div class="logout box span-1">
                    <div class="box span-12">
                        <input type='submit' class="btn-out btn-block-out btn-lg-out btn-inverse-out" value='Logout' onclick="getLogout();">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
