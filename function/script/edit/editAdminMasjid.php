<?php
session_start();
include_once '../../connectDB.php';

if ($_GET['password'] == '' || $_GET['password'] == null) {
    if ($_GET['id_masjid'] != '' &&
            $_GET['id_user'] != '' &&
            $_GET['username'] != '' &&
            $_GET['wilayahMasjid'] != '' &&
            $_GET['namaMasjid'] != '' &&
            $_GET['alamat'] != '' &&
            $_GET['email'] != '' &&
            $_GET['rt'] != '' &&
            $_GET['rw'] != '' &&
            $_GET['kecamatan'] != '' &&
            $_GET['noTelp'] != '') {
        $id_masjid = $_GET['id_masjid'];
        $id_user = $_GET['id_user'];
        $username = $_GET['username'];
        $wilayah = $_GET['wilayahMasjid'];
        $nama_masjid = $_GET['namaMasjid'];
        $alamat = $_GET['alamat'];
        $email = $_GET['email'];
        $rt = $_GET['rt'];
        $rw = $_GET['rw'];
        $kecamatan = $_GET['kecamatan'];
        $no_tp = $_GET['noTelp'];


        echo $id_masjid . '<br>';
        echo $id_user . '<br>';
        echo $username . '<br>';
        echo $wilayah . '<br>';
        echo $nama_masjid . '<br>';
        echo $alamat . '<br>';
        echo $email . '<br>';
        echo $rt . '<br>';
        echo $rw . '<br>';
        echo $kecamatan . '<br>';
        echo $no_tp . '<br>';

        $update_user = queryUpdate('user', 'username="' . $username . '"', 'id_user=' . $id_user);


        $update_masjid = queryUpdate('masjid', 'id_wilayah=' . $wilayah . ', nama_masjid="' . $nama_masjid . '", alamat="' . $alamat . '", rt="' . $rt . '", rw="' . $rw . '", kecamatan="' . $kecamatan . '", no_telepon="' . $no_tp . '"', 'id_masjid=' . $id_masjid);
        var_dump($update_user);
        var_dump($update_masjid);
        if ($update_user && $update_masjid) {
            header('location:http://localhost/SImasjid/view/AdminUtama/isiUbahAdminMasjid.php?id_masjid=' . $_GET['id_masjid'] . '&status=true');
        }
    } else {
        header('location:http://localhost/SImasjid/view/AdminUtama/isiUbahAdminMasjid.php?id_masjid=' . $_GET['id_masjid'] . '&status=false');
    }
} else {
    if ($_GET['id_masjid'] != '' &&
            $_GET['id_user'] != '' &&
            $_GET['username'] != '' &&
            $_GET['password'] != '' &&
            $_GET['wilayahMasjid'] != '' &&
            $_GET['namaMasjid'] != '' &&
            $_GET['alamat'] != '' &&
            $_GET['email'] != '' &&
            $_GET['rt'] != '' &&
            $_GET['rw'] != '' &&
            $_GET['kecamatan'] != '' &&
            $_GET['noTelp'] != '') {
        $id_masjid = $_GET['id_masjid'];
        $id_user = $_GET['id_user'];
        $username = $_GET['username'];
        $password = $_GET['password'];
        $wilayah = $_GET['wilayahMasjid'];
        $nama_masjid = $_GET['namaMasjid'];
        $alamat = $_GET['alamat'];
        $email = $_GET['email'];
        $rt = $_GET['rt'];
        $rw = $_GET['rw'];
        $kecamatan = $_GET['kecamatan'];
        $no_tp = $_GET['noTelp'];

        echo $id_masjid . '<br>';
        echo $id_user . '<br>';
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


        $update_user = queryUpdate('user', 'password="' . md5($password) . '",username="' . $username . '"', 'id_user=' . $id_user);

        echo '<br>';

        $update_masjid = queryUpdate('masjid', 'id_wilayah=' . $wilayah . ', nama_masjid="' . $nama_masjid . '", alamat="' . $alamat . '", rt="' . $rt . '", rw="' . $rw . '", kecamatan="' . $kecamatan . '", no_telepon="' . $no_tp . '"', 'id_masjid=' . $id_masjid);
        var_dump($update_user);
        var_dump($update_masjid);
        if ($update_user && $update_masjid) {
            header('location:http://localhost/SIMasjid/view/AdminUtama/isiUbahAdminMasjid.php?id_masjid=' . $_GET['id_masjid'] . '&status=true');
        }
    } else {
        header('location:http://localhost/SIMasjid/view/AdminUtama/isiUbahAdminMasjid.php?id_masjid=' . $_GET['id_masjid'] . '&status=false');
    }
}
?>