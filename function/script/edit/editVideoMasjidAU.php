<?php

session_start();
require_once '../../connectDB.php';
if ($_GET['judulVideoMasjid'] != '' &&
        $_GET['wilayahMasjid'] != 'Pilih wilayah' &&
        $_GET['embedVideoMasjid'] != '') {
    $id_masjid = $_GET['id_masjid'];
    $id_video_masjid = $_GET['id_video_masjid'];
    $judulVideo = str_replace('"', "''", $_GET['judulVideoMasjid']);
    $embedVideoMasjid = mysql_real_escape_string($_GET['embedVideoMasjid']);

    $str = explode(" ", $embedVideoMasjid);
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
    echo $embedVideoMasjid . '<br>';
    echo $date . '<br>';

    $update_video = queryUpdate('video_informasi_masjid', 'id_masjid=' . $id_masjid . ', jenis_admin="' . $_SESSION['user'][1] . '", judul="' . $judulVideo . '", embed="' . $embedVideoMasjid . '", img="' . $videoImg . '", tanggal_upload="' . $date . '"', 'id_video_masjid=' . $id_video_masjid);
    if ($update_video) {
        header('location:http://localhost/SIMasjid/view/AdminUtama/isiAturVideoInformasiMasjid.php?ubah=true&id_masjid=' . $_GET['id_masjid'] . '&id_video_masjid=' . $_GET['id_video_masjid'] . '&status=true');
    }
} else {
    header('location:http://localhost/SIMasjid/view/AdminUtama/isiAturVideoInformasiMasjid.php?ubah=true&id_masjid=' . $_GET['id_masjid'] . '&id_video_masjid=' . $_GET['id_video_masjid'] . '&status=false');
}
?>