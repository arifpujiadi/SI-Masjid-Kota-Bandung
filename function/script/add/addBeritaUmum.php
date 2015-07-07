<?php
ob_start(); 
session_start();
require_once '../../connectDB.php';
include_once '../../ImageHandler.php';

if ($_POST['judulBerita'] != '' &&
        $_POST['sumber'] != '' &&
        $_POST['link'] != '' &&
        $_POST['isiBerita'] != '') {
    $user = $_SESSION['user'][3];
    $judulBerita = str_replace('"', "''",$_POST['judulBerita']);
    $editor = $_POST['editor'];
    $sumber = $_POST['sumber'];
    $link = $_POST['link'];
    $isiBerita = str_replace('"', "''",nl2br($_POST['isiBerita']));
    $date = date("Y-m-d H:i:s");

    echo $user . '<br>';
    echo $judulBerita . '<br>';
    echo $editor . '<br>';
    echo $sumber . '<br>';
    echo $link . '<br>';
    echo $isiBerita . '<br>';
    echo $date . '<br>';

    $insert_berita = queryInsert('berita_umum (id_user, judul, isi_berita, editor, sumber, link, tanggal_upload)',$user.',"'.$judulBerita.'","'.$isiBerita.'","'.$editor.'","'.$sumber.'","'.$link.'","'.$date.'"');
    
    $dataBerita = querySelect('*', 'berita_umum ORDER BY id_berita_umum DESC', null, null);
    $idberita = $dataBerita[0]['id_berita_umum'];

    $targetfile = "../../../View/img/Upload/beritaUmum/";
    $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG");
    $temp = explode(".", $_FILES["uploadgambarberita"]["name"]);
    $extension = end($temp);
    if ((($_FILES["uploadgambarberita"]["type"] == "image/gif") || ($_FILES["uploadgambarberita"]["type"] == "image/jpeg") || ($_FILES["uploadgambarberita"]["type"] == "image/jpg") || ($_FILES["uploadgambarberita"]["type"] == "image/JPG") || ($_FILES["uploadgambarberita"]["type"] == "image/pjpeg") || ($_FILES["uploadgambarberita"]["type"] == "image/x-png") || ($_FILES["uploadgambarberita"]["type"] == "image/png"))

            && ($_FILES["uploadgambarberita"]["size"] < 8000000) 
            && in_array($extension, $allowedExts)) {
        if ($_FILES["uploadgambarberita"]["error"] > 0) {
            echo "Return Code: " . $_FILES["uploadgambarberita"]["error"] . "<br>";
        } else {
            $mime = explode("/", $_FILES["uploadgambarberita"]["type"]);
            $mime = $mime[1];
            $imageName = "BeritaUmum_".$idberita. "." . $mime; 
            move_uploaded_file($_FILES["uploadgambarberita"]["tmp_name"], $targetfile . $imageName);

        }

        try {
            $gambarBerita = ImageHandler::getFotoBeritaUmum($imageName);
            echo "sukses upload";
        } catch (Exception $ex) {
            echo $ex;
        }
    }
    
    $updateBerita = queryUpdate('berita_umum', 'gambar="' . $gambarBerita . '"', 'id_berita_umum=' . $idberita);

        if ($insert_berita && $updateBerita) {
            header('location:http://localhost/SIMasjid/view/AdminUtama/tambahBeritaUmum.php?status=true');
        }
} else {
   header('location:http://localhost/SIMasjid/view/AdminUtama/tambahBeritaUmum.php?&status=false');
}
?>



