<?php

session_start();
require_once '../../connectDB.php';
if ($_GET['judulVideoMusik'] != '' &&
        $_GET['penyanyi'] != '' &&
        $_GET['embedVideoMusik'] != '') {
    $id_video_musik = $_GET['id_video_musik'];
    $judulVideo = str_replace('"', "''",$_GET['judulVideoMusik']);
    $penyanyi = mysql_real_escape_string($_GET['penyanyi']);
    $embedVideoMusik = mysql_real_escape_string($_GET['embedVideoMusik']);
    
    $str = explode(" ", $embedVideoMusik);
    echo $str[3] . '<br>';
    $str2 = explode("/", $str[3]);
    echo $str2[4] . '<br>';

    $code = str_replace('\"', '', $str2[4]);
    echo $code . '<br>';

    $videoImg = "<img src=" . mysql_real_escape_string("https://img.youtube.com/vi/" . $code . "/0.jpg") . ">";
    echo $videoImg . '<br>';
    
    $date = date("Y-m-d H:i:s");

    echo $id_masjid . '<br>';
    echo $id_video_musik . '<br>';
    echo $judulVideo . '<br>';
    echo $embedVideoMusik . '<br>';
    echo $date . '<br>';
    
    $update_video = queryUpdate('video_musik', 'judul="' . $judulVideo . '", penyanyi="' . $penyanyi . '", embed="' . $embedVideoMusik . '", img="' . $videoImg . '", tanggal_upload="' . $date . '"', 'id_video_musik=' . $id_video_musik);
    if ($update_video) {
        header('location:http://localhost/SIMasjid/view/AdminUtama/isiAturVideoMusik.php?musik_id=' . $_GET['id_video_musik'] . '&status=true');
    }
} else {
    header('location:http://localhost/SIMasjid/view/AdminUtama/isiAturVideoMusik.php?musik_id=' . $_GET['id_video_musik'] . '&status=false');
}
?>