<?php

session_start();
require_once '../../connectDB.php';

if (isset($_GET['adminutama_tambahvideomasjid_submit'])) {
    if ($_GET['id_masjid'] != 'Pilih masjid' &&
            $_GET['judulVideoMasjid'] != '' &&
            $_GET['id_masjid'] != '' &&
            $_GET['embedVideoMasjid'] != '') {
        $judulVideoMasjid = str_replace('"', "''",$_GET['judulVideoMasjid']);
        $id_masjid = $_GET['id_masjid'];
        $embedVideoMasjid = mysql_real_escape_string($_GET['embedVideoMasjid']);

        $str = explode(" ", $embedVideoMasjid);
        echo $str[3].'<br>';
        $str2 = explode("/", $str[3]);
        echo $str2[4].'<br>';
        
        $code = str_replace('\"', '', $str2[4]);
        echo $code.'<br>';

        $videoImg = "<img src=".mysql_real_escape_string("https://img.youtube.com/vi/" . $code . "/0.jpg").">";
        echo $videoImg.'<br>';

        $date = date("Y-m-d H:i:s");

        echo $judulVideoMasjid . '<br>';
        echo $id_masjid . '<br>';
        echo $date . '<br>';


        $insert_video = queryInsert('video_informasi_masjid', '"", '
                . ' "' . $id_masjid . '",'
                . ' "' . $_SESSION['user'][1] . '" ,'
                . ' "' . $judulVideoMasjid . '",'
                . ' "' . $embedVideoMasjid . '",'
                . ' "' . $videoImg . '",'
                . ' "' . $date . '"');

        if ($insert_video) {
            header('location:http://localhost/SIMasjid/view/AdminUtama/tambahVideo.php?status=true');
        }
        echo '<br>';
    } else {
        header('location:http://localhost/SIMasjid/view/AdminUtama/tambahVideo.php?&status=false');
    }
} else if (isset($_GET['adminutama_tambahvideoceramah_submit'])) {
    if ($_GET['judulVideoCeramah'] != '' &&
            $_GET['embedVideoCeramah'] != '') {
        $user = $_SESSION['user'][3];
        $judulVideoCeramah = str_replace('"', "''",$_GET['judulVideoCeramah']);
        $penceramah = $_GET['penceramah'];
        $embedVideoCeramah = mysql_real_escape_string($_GET['embedVideoCeramah']);
        
        
        $str = explode(" ", $embedVideoCeramah);
        echo $str[3].'<br>';
        $str2 = explode("/", $str[3]);
        echo $str2[4].'<br>';
        
        $code = str_replace('\"', '', $str2[4]);
        echo $code.'<br>';

        $videoImg = "<img src=".mysql_real_escape_string("https://img.youtube.com/vi/" . $code . "/0.jpg").">";
        echo $videoImg.'<br>';
        
        
        $date = date("Y-m-d H:i:s");

        echo $user . '<br>';
        echo $judulVideoCeramah . '<br>';
        echo $penceramah . '<br>';
        echo $embedVideoCeramah . '<br>';
        echo $date . '<br>';

        $insert_video = queryInsert('video_ceramah', '"", '
                . ' "' . $user . '",'
                . ' "' . $judulVideoCeramah . '",'
                . ' "' . $penceramah . '" ,'
                . ' "' . $embedVideoCeramah . '" ,'
                . ' "' . $videoImg . '",'
                . ' "' . $date . '"');

        if ($insert_video) {
            header('location:http://localhost/SIMasjid/view/AdminUtama/tambahVideo.php?status=true');
        }
        echo '<br>';
    } else {
        header('location:http://localhost/SIMasjid/view/AdminUtama/tambahVideo.php?&status=false');
    }
} else if (isset($_GET['adminutama_tambahvideomusik_submit'])) {
    if ($_GET['judulVideoMusik'] != '' &&
            $_GET['embedVideoMusik'] != '') {
        $user = $_SESSION['user'][3];
        $judulVideoMusik = str_replace('"', "''",$_GET['judulVideoMusik']);
        $penyanyi = $_GET['penyanyi'];
        $embedVideoMusik = mysql_real_escape_string($_GET['embedVideoMusik']);
        
        
        $str = explode(" ", $embedVideoMusik);
        echo $str[3].'<br>';
        $str2 = explode("/", $str[3]);
        echo $str2[4].'<br>';
        
        $code = str_replace('\"', '', $str2[4]);
        echo $code.'<br>';

        $videoImg = "<img src=".mysql_real_escape_string("https://img.youtube.com/vi/" . $code . "/0.jpg").">";
        echo $videoImg.'<br>';
        
        $date = date("Y-m-d H:i:s");

        echo $user . '<br>';
        echo $judulVideoMusik . '<br>';
        echo $penyanyi . '<br>';
        echo $embedVideoMusik . '<br>';
        echo $date . '<br>';

        $insert_video = queryInsert('video_musik', '"", '
                . ' "' . $user . '",'
                . ' "' . $judulVideoMusik . '",'
                . ' "' . $penyanyi . '",'
                . ' "' . $embedVideoMusik . '" ,'
                . ' "' . $videoImg . '",'
                . ' "' . $date . '"');

        if ($insert_video) {
            header('location:http://localhost/SIMasjid/view/AdminUtama/tambahVideo.php?status=true');
        }
        echo '<br>';
    } else {
        header('location:http://localhost/SIMasjid/view/AdminUtama/tambahVideo.php?&status=false');
    }
}
?>