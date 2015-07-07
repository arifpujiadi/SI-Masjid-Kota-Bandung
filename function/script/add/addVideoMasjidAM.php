<?php

session_start();
require_once '../../connectDB.php';
if (    $_GET['judulVideo'] != '' &&
        $_GET['embed'] != '') {
    $id_masjid = $_GET['id_masjid'];
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
    echo $judulVideo . '<br>';
    echo $date . '<br>';

    $insert_video = queryInsert('video_informasi_masjid', '"", ' . $id_masjid . ' , '
            . ' "' . $_SESSION['user'][1] . '" ,'
            . ' "' . $judulVideo . '" ,'
            . ' "' . $embed . '",'
            . ' "' . $videoImg . '",'
            . ' "' . $date . '"');
    if ($insert_video) {
        header('location:http://localhost/SIMasjid/view/AdminMasjid/tambahVideoMasjid.php?status=true');
    }
} else {
    header('http://localhost/SIMasjid/view/AdminMasjid/tambahVideoMasjid.php?&status=false');
}
?>