<?php
session_start();
require_once 'connectDB.php';
if (isset($_POST['login_submit'])) {
    if ($_POST['password'] != '' && $_POST['username'] != '') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = getLogin($username, $password);
        if (sizeof($user) != 0) {
            $check = setSession($user);
            if ($check) {
                if ($_SESSION['user'][2] == 0) {
                    header('Location: ../view/AdminUtama/index.php');
                } else if ($_SESSION['user'][2] == 1) {
                    $id_masjid_admin = querySelect('*','masjid','id_user='.$_SESSION['user'][3],null);
                    var_dump($id_masjid_admin);
                    $_SESSION['id_masjid_admin']=$id_masjid_admin[0]['id_masjid'];
                    header('Location: ../view/AdminMasjid/index.php');
                }
            }
        } else {
            header('Location: ../view/penggunaUmum/login.php?e=2');
        }
    } else {
        header('Location: ../view/penggunaUmum/login.php?e=1');
    }
} else if (isset($_GET['logout'])) {
    getLogout();
} else if (isset($_GET['adminutama_tambahadmin_submit'])) {
    echo "tambah admin masjid";
}

function getLogin($username, $password) {
    $user = null;

    $user = querySelect('*', 'user', 'username = "' . $username . '" AND password = "' . md5($password) . '"', '0,1');
    if (sizeof($user) != 0) {

        $date = date_create();
        $date = date_timestamp_get($date);
        $session = md5($password . $date);
        $update = queryUpdate('user', 'session = "' . $session . '"', 'username = "' . $username . '" AND password = "' . md5($password) . '"');

        if (!$update) {
            $user = null;
        } else {
            $user = querySelect('*', 'user', 'session = "' . $session . '"', '0,1');
        }
    }
    return $user;
}

function setSession($user) {
    $_SESSION['user'] = array($user[0]['session'], $user[0]['username'], $user[0]['privilege'], $user[0]['id_user']);
    $user = null;
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}

function getLogout() {
    session_unset();
    session_destroy();
    header('Location: http://localhost/SIMasjid/view/PenggunaUmum/login.php');
}

?>