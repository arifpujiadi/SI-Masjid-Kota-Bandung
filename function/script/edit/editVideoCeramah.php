<?php

session_start();
require_once '../../connectDB.php';
if ($_GET['judulVideoCeramah'] != '' &&
        $_GET['penceramah'] != '' &&
        $_GET['embedVideoCeramah'] != '') {
    $id_video_ceramah = $_GET['id_video_ceramah'];
    $judulVideo = mysql_real_escape_string($_GET['judulVideoCeramah']);
    $penceramah = $_GET['penceramah'];
    $embedVideoCeramah = mysql_real_escape_string($_GET['embedVideoCeramah']);
    
    $str = explode(" ", $embedVideoCeramah);
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
    echo $embedVideoCeramah . '<br>';
    echo $date . '<br>';
    
    $update_video = queryUpdate('video_ceramah', 'judul="' . $judulVideo . '", penceramah="' . $penceramah . '", embed="' . $embedVideoCeramah . '", img="' . $videoImg . '", tanggal_upload="' . $date . '"', 'id_video_ceramah=' . $id_video_ceramah);
    if ($update_video) {
        header('location:http://localhost/SIMasjid/view/AdminUtama/isiAturVideoCeramah.php?ceramah_id=' . $_GET['id_video_ceramah'] . '&status=true');
    }
} else {
    header('location:http://localhost/SIMasjid/view/AdminUtama/isiAturVideoCeramah.php?ceramah_id=' . $_GET['id_video_ceramah'] . '&status=false');
}
?>