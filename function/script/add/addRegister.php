<?php

session_start();

require_once '../../connectDB.php';
include_once '../../ImageHandler.php';

if ($_POST['username'] != '' &&
        $_POST['password'] != '' &&
        $_POST['wilayahMasjid'] != '' &&
        $_POST['namaMasjid'] != '' &&
        $_POST['alamat'] != '' &&
        $_POST['email'] != '' &&
        $_POST['rt'] != '' &&
        $_POST['rw'] != '' &&
        $_POST['kecamatan'] != '' &&
        $_POST['noTelp'] != '') {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $validasi = 0;
    $wilayah = $_POST['wilayahMasjid'];
    $nama_masjid = $_POST['namaMasjid'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $kecamatan = $_POST['kecamatan'];
    $no_tp = $_POST['noTelp'];

    echo $username . '<br>';
    echo $password . '<br>';
    echo $wilayah . '<br>';
    echo $nama_masjid . '<br>';
    echo $alamat . '<br>';
    echo $email . '<br>';
    echo $rt . '<br>';
    echo $rw . '<br>';
    echo $kecamatan . '<br>';
    echo $no_tp . '<br>';

    $insert_user = queryInsert('user (username, password, privilege)', '"' . $username . '","' . md5($password) . '",1');

    $query = 'SELECT * FROM user WHERE username="' . $username . '" AND password="' . md5($password) . '"';
    $sql = mysql_query($query);
    var_dump($sql);

    if ($sql) {
        $result = mysql_fetch_assoc($sql);
        $insert_masjid = queryInsert('masjid (id_user, id_wilayah, validasi, nama_masjid, alamat, rt, rw, kecamatan, no_telepon,email)', $result['id_user'] . ',' . $wilayah . ',' . $validasi . ',"' . $nama_masjid . '","' . $alamat . '","' . $rt . '","' . $rw . '","' . $kecamatan . '","' . $no_tp . '","' . $email . '"');

        $selectMasjid = querySelect('*', 'masjid', 'id_user=' . $result['id_user'], null);
        $id_masjid = $selectMasjid[0]['id_masjid'];
        var_dump($selectMasjid);

        $targetfile = "../../../View/img/Upload/fotoProfil/";
        $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG");
        $temp = explode(".", $_FILES["uploadfoto"]["name"]);
        $extension = end($temp);
        if ((($_FILES["uploadfoto"]["type"] == "image/gif") || ($_FILES["uploadfoto"]["type"] == "image/jpeg") || ($_FILES["uploadfoto"]["type"] == "image/jpg") || ($_FILES["uploadfoto"]["type"] == "image/JPG") || ($_FILES["uploadfoto"]["type"] == "image/pjpeg") || ($_FILES["uploadfoto"]["type"] == "image/x-png") || ($_FILES["uploadfoto"]["type"] == "image/png"))

                && ($_FILES["uploadfoto"]["size"] < 2048000)
                && in_array($extension, $allowedExts)) {
            if ($_FILES["uploadfoto"]["error"] > 0) {
                echo "Return Code: " . $_FILES["uploadfoto"]["error"] . "<br>";
            } else {
                $mime = explode("/", $_FILES["uploadfoto"]["type"]);
                $mime = $mime[1];
                $imageName = $nama_masjid . $id_masjid . "." . $mime;
                move_uploaded_file($_FILES["uploadfoto"]["tmp_name"], $targetfile . $imageName);

            }
            try {
                $foto = ImageHandler::getProfilePicture($imageName);
                echo "sukses upload";
            } catch (Exception $ex) {
                echo $ex;
            }
        }



        $targetfile = "../../../View/img/Upload/sertifikat/";
        $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG");
        $temp = explode(".", $_FILES["uploadsertifikat"]["name"]);
        $extension = end($temp);
        if ((($_FILES["uploadsertifikat"]["type"] == "image/gif") || ($_FILES["uploadsertifikat"]["type"] == "image/jpeg") || ($_FILES["uploadsertifikat"]["type"] == "image/jpg") || ($_FILES["uploadsertifikat"]["type"] == "image/JPG") || ($_FILES["uploadsertifikat"]["type"] == "image/pjpeg") || ($_FILES["uploadsertifikat"]["type"] == "image/x-png") || ($_FILES["uploadsertifikat"]["type"] == "image/png"))

                && ($_FILES["uploadsertifikat"]["size"] < 2048000)
                && in_array($extension, $allowedExts)) {
            if ($_FILES["uploadsertifikat"]["error"] > 0) {
                echo "Return Code: " . $_FILES["uploadsertifikat"]["error"] . "<br>";
            } else {
                $mime = explode("/", $_FILES["uploadsertifikat"]["type"]);
                $mime = $mime[1];
                $imageName = $nama_masjid . $id_masjid . "." . $mime; 
                move_uploaded_file($_FILES["uploadsertifikat"]["tmp_name"], $targetfile . $imageName);

            }
            try {
                $sertifikat = ImageHandler::getSertifikat($imageName);
                echo "sukses upload";
            } catch (Exception $ex) {
                echo $ex;
            }
        }

        $insert_masjid = queryUpdate('masjid', 'foto="' . $foto . '", sertifikat="' . $sertifikat . '"', 'id_masjid=' . $id_masjid);


        if ($insert_user && $insert_masjid) {
            header('location:http://localhost/SIMasjid/view/PenggunaUmum/register.php?status=true');
        }
    }
    echo '<br>';

} else {
    header('location:http://localhost/SIMasjid/view/PenggunaUmum/register.php?&status=false');
}
?>