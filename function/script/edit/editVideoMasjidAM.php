<?php

session_start();
require_once '../../connectDB.php';
if ($_GET['judulVideo'] != '' &&
        $_GET['embed'] != '') {
    $id_masjid = $_GET['id_masjid'];
    $id_video_masjid = $_GET['id_video_masjid'];
    $judulVideo = str_replace('"', "''", $_GET['judulVideo']);
    $embed = mysql_real_escape_string($_GET['embed']);

    $str = explode(" ", $embed);
    echo $str[3] . '<br>';
    $str2 = explode("/", $str[3]);
    echo $str2[4] . '<br>';

    $code = str_replace('\"', '', $str2[4]);
    echo $code . '<br>';

    $videoImg = "<img src=" . mysql_real_escape_string("https://img.youtube.com/vi/" . $code . "/0.jpg") . ">";
    echo $videoImg . '<br>';

    $date = date("Y-m-d H:i:s");

    echo $id_masjid . '<br>';
    echo $id_video_masjid . '<br>';
    echo $judulVideo . '<br>';
    echo $embed . '<br>';
    echo $date . '<br>';

    $update_video = queryUpdate('video_informasi_masjid', 'id_masjid=' . $id_masjid . ', jenis_admin="' . $_SESSION['user'][1] . '", judul="' . $judulVideo . '", embed="' . $embed . '", img="' . $videoImg . '", tanggal_upload="' . $date . '"', 'id_video_masjid=' . $id_video_masjid);
    if ($update_video) {
        header('location:http://localhost/SIMasjid/view/AdminMasjid/isiAturVideoMasjid.php?video_id=' . $_GET['id_video_masjid'] . '&status=true');
    }
} else {
    header('location:http://localhost/SIMasjid/view/AdminMasjid/isiAturVideoMasjid.php?video_id=' . $_GET['id_video_masjid'] . '&status=false');
}
?>