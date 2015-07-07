<?php

session_start();
include_once '../../connectDB.php';

$id_user = $_GET['user_id'];
$dataUser = querySelect('*', 'user', 'id_user=' . $id_user, null);
if ($dataUser[0]['privilege'] == 0) {
    if ($_GET['password'] == '' || $_GET['password'] == null) {
        if ($_GET['username'] != '') {
            $id_user = $_GET['user_id'];
            $username = $_GET['username'];

            echo $id_user . '<br>';
            echo $username . '<br>';

            $update_user = queryUpdate('user', 'username="' . $username . '"', 'id_user=' . $id_user);

            var_dump($update_user);
            if ($update_user) {
                header('location:http://localhost/SIMasjid/view/AdminUtama/setting.php?status=true');
            }
        } else {
            header('location:http://localhost/SIMasjid/view/AdminUtama/setting.php?status=false');
        }
    } else {
        if ($_GET['username'] != '') {
            $id_user = $_GET['user_id'];
            $username = $_GET['username'];
            $password = $_GET['password'];

            echo $id_user . '<br>';
            echo $username . '<br>';
            echo $password . '<br>';

            $update_user = queryUpdate('user', 'password="' . md5($password) . '",username="' . $username . '"', 'id_user=' . $id_user);
            var_dump($update_user);
            if ($update_user) {
                header('location:http://localhost/SIMasjid/view/AdminUtama/setting.php?status=true');
            }
        } else {
            header('location:http://localhost/SIMasjid/view/AdminUtama/setting.php?status=false');
        }
    }
}else{
    if ($_GET['password'] == '' || $_GET['password'] == null) {
        if ($_GET['username'] != '') {
            $id_user = $_GET['user_id'];
            $username = $_GET['username'];

            echo $id_user . '<br>';
            echo $username . '<br>';

            $update_user = queryUpdate('user', 'username="' . $username . '"', 'id_user=' . $id_user);

            var_dump($update_user);
            if ($update_user) {
                header('location:http://localhost/SIMasjid/view/AdminMasjid/setting.php?status=true');
            }
        } else {
            header('location:http://localhost/SIMasjid/view/AdminMasjid/setting.php?status=false');
        }
    } else {
        if ($_GET['username'] != '') {
            $id_user = $_GET['user_id'];
            $username = $_GET['username'];
            $password = $_GET['password'];

            echo $id_user . '<br>';
            echo $username . '<br>';
            echo $password . '<br>';

            $update_user = queryUpdate('user', 'password="' . md5($password) . '",username="' . $username . '"', 'id_user=' . $id_user);
            var_dump($update_user);
            if ($update_user) {
                header('location:http://localhost/SIMasjid/view/AdminMasjid/setting.php?status=true');
            }
        } else {
            header('location:http://localhost/SIMasjid/view/AdminMasjid/setting.php?status=false');
        }
    }
}
?>