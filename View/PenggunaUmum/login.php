<?php

$content = '<div class="content row">
                    <div class="login box">
                        <div class="col">
                            <div class="masjid box span-12">
                                <div class="box span-3">
                                    &nbsp;
                                </div>
                                <div class="box span-6">
                                    <div class="box span-12" style="text-align:center; color:white; font-size:15px; margin-top:-10px;">Login untuk pengurus DKM</div>
                                    <div class="box span-12" style="padding-top:20px;">
                                        <div class="kiri box span-12">
                                        <form method="POST" action="../../function/function.php">
                                            <div class="keterangan box span-2-5">
                                                Username
                                            </div>
                                            <div class="keterangan box span-0-5 center">
                                                :
                                            </div>
                                            <div class="input box span-9">
                                                <input class="form-control login-field" type="text" placeholder="Masukan username admin" value="" name="username" id="login-username">
                                            </div>
                                        </div>
                                        <div class="kiri box span-12">
                                            <div class="keterangan box span-2-5">
                                                Password
                                            </div>
                                            <div class="keterangan box span-0-5 center">
                                                :
                                            </div>
                                            <div class="input box span-9">
                                                <input class="form-control login-field" type="password" placeholder="Masukan password" value="" name="password" id="login-password">
                                            </div>
                                        </div>
                                        <div class="kiri box span-12">
                                            <input class="btn btn-block btn-lg btn-inverse" type="submit" value="Login" name="login_submit" />
                                        </div>
                                        </form>
                                        <div class="buat box span-12 center">
                                            <a class="href-white" href="register.php">Buat akun masjid baru</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box span-3">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';

if (isset($_GET['e'])) {
    if ($_GET['e'] == '1') {
        $content = $content .'
            
            <div id="login_popup1">
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
                                    Username atau password tidak boleh kosong, silahkan untuk mencoba kembali.
                                </td>
                            </tr>
                        </table>
                        <div class="absolute btn-ok btn-block-ok btn-lg-ok btn-inverse-ok" onclick="getLogin_confirm(1);">Kembali</div>
                    </div>
                    
                </div>
                
            </div>
            ';
    } else if($_GET['e']=='2'){
        $content = $content .'
        
            <div id="login_popup2">
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
                                    Username atau password salah, silahkan untuk mencoba kembali.
                                </td>
                            </tr>
                        </table>
                        <div class="absolute btn-ok btn-block-ok btn-lg-ok btn-inverse-ok" onclick="getLogin_confirm(2);">Kembali</div>
                    </div>
                    
                </div>
                
            </div>
            ';
    }
}

include ('../template/template.php');
?>                    