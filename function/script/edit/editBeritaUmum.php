<?php

ob_start();
session_start();
require_once '../../connectDB.php';
include_once '../../ImageHandler.php';

if ($_POST['judulBerita'] != '' &&
        $_POST['sumber'] != '' &&
        $_POST['link'] != '' &&
        $_POST['isiBerita'] != '') {
    $judulBerita = str_replace('"', "''", $_POST['judulBerita']);
    $editor = $_POST['editor'];
    $sumber = $_POST['sumber'];
    $link = $_POST['link'];
    $date = date("Y-m-d H:i:s");
    $id_berita_umum = $_REQUEST['id_berita_umum'];
    $isiBerita = str_replace('"', "''", nl2br($_POST["isiBerita"]));

    echo $id_berita_umum . '<br>';
    echo $judulBerita . '<br>';
    echo $editor . '<br>';
    echo $sumber . '<br>';
    echo $link . '<br>';
    echo $isiBerita . '<br>';
    echo $date . '<br>';

    $getFoto = $_FILES["uploadgambarberita"]["name"];
    $cariFoto = querySelect('*', 'berita_umum', 'id_berita_umum=' . $id_berita_umum, null);
    $statusFoto = $cariFoto[0]['gambar'];
    
    if ($statusFoto == '' && $getFoto != '' || $statusFoto != '' && $getFoto != '') {
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
                $imageName = "BeritaUmum_" . $id_berita_umum . "." . $mime; 
                move_uploaded_file($_FILES["uploadgambarberita"]["tmp_name"], $targetfile . $imageName);

            }

            try {
                $gambarBerita = ImageHandler::getFotoBeritaUmum($imageName);
                echo "sukses upload";
            } catch (Exception $ex) {
                echo $ex;
            }
        }
    } else {
        $gambarBerita = $statusFoto;
    }

    $update_berita = queryUpdate('berita_umum', 'judul="' . $judulBerita . '", gambar="' . $gambarBerita . '", isi_berita="' . $isiBerita . '", editor="' . $editor . '" , sumber="' . $sumber . '", link="' . $link . '" , tanggal_upload="' . $date . '"', 'id_berita_umum=' . $id_berita_umum);
    var_dump($update_berita);
    if ($update_berita) {
        header('location:http://localhost/SIMasjid/view/AdminUtama/isiAturBeritaUmum.php?berita_id=' . $id_berita_umum . '&status=true');
    } else {
        echo 'something';
    }
    echo '<br>';
} else {
    header('location:http://localhost/SIMasjid/view/AdminUtama/isiAturBeritaUmum.php?berita_id=' . $id_berita_umum . '&status=false');
}
?>