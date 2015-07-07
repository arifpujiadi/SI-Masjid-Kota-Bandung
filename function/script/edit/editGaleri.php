<?php

session_start();
require_once '../../connectDB.php';
include_once '../../ImageHandler.php';

$id_masjid = $_POST['id_masjid'];
$status = false;
$dataGaleri = querySelect('*', 'galeri', 'id_masjid=' . $id_masjid, null);
$nDataFoto = count($dataGaleri);
$uploadGaleri = $_FILES['uploadgaleri'];
$nUpload = count($uploadGaleri['name']);
$listGaleri = NULL;
$dataMasjid = querySelect('*', 'masjid', 'id_masjid='.$id_masjid, null);
$nama_masjid = $dataMasjid[0]['nama_masjid'];
for ($i = 0; $i < $nUpload; $i++) {
    if (!empty($uploadGaleri['name'][$i])) {
        $listGaleri[] = array(
            'name' => $uploadGaleri['name'][$i],
            'type' => $uploadGaleri['type'][$i],
            'tmp_name' => $uploadGaleri['tmp_name'][$i],
            'error' => $uploadGaleri['error'][$i],
            'size' => $uploadGaleri['size'][$i],
        );
    }
}
$nFile = count($listGaleri);

echo 'Total Foto di DB: ' . $nDataFoto . '<br>';
echo 'Upload Foto: ' . $nFile . '<br>';
echo 'Jumlah Foto: ' . ($nDataFoto + $nFile) . '<br>';

if (isset($_POST['adminmasjid_simpanFoto_submit'])) {

    $insertGallery = null;
    if ($nDataFoto + $nFile < 19) {
        if ($nFile > 0) {

            $targetfile = "../../../View/img/Upload/galeri/";
            $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG");

            for ($i = 0; $i < $nFile; $i++) {
                $temp = explode(".", $listGaleri[$i]["name"]);
                $extension = end($temp);

                if (in_array($listGaleri[$i]['type'], array('image/gif', 'image/jpeg', 'image/jpg', 'image/JPG', 'image/pjpeg', 'image/x-png', 'image/png')) && ($listGaleri[$i]["size"] < 2048000) 
                        
                        && in_array($extension, $allowedExts)) {

                    if ($listGaleri[$i]["error"] > 0) {
                        echo "Return Code: " . $listGaleri[$i]["error"] . "<br>";
                    } else {
                        $mime = explode("/", $listGaleri[$i]["type"]);
                        $mime = $mime[1];
                        $imageName = $nama_masjid ."_". $id_masjid ."_". $listGaleri[$i]["name"] ;
                        move_uploaded_file($listGaleri[$i]["tmp_name"], $targetfile . $imageName);
                    }
                    try {
                        $finalImg = ImageHandler::getGalleryPicture($imageName);

                        $insertGallery = queryInsert('galeri (id_masjid, alamat_foto)', $id_masjid . ',"' . $finalImg . '"');

                        echo "sukses upload";
                    } catch (Exception $ex) {
                        echo $ex;
                    }
                }
            }
        }
        $updateFotoGaleri = null;

        if (isset($_POST['judulGaleri'])) {
            $judulGaleri = $_POST['judulGaleri'];
            $idGaleri = $_POST['idGaleri'];
            for ($j = 0; $j < count($judulGaleri); $j++) {
                $updateFotoGaleri = queryUpdate('galeri', 'judul_foto="' . $judulGaleri[$j] . '"', 'id_foto=' . $idGaleri[$j]);
            }
        }

        if (isset($_POST['hapusGaleri'])) {
            $hapusGaleri = $_POST['hapusGaleri'];
            $nHapusGaleri = count($hapusGaleri);
            for ($i = 0; $i < $nHapusGaleri; $i++) {
                queryDelete('galeri', "id_foto='" . $hapusGaleri[$i] . "'");
            }
        }

        if ($insertGallery = true && $updateFotoGaleri = true) {
            header('location:http://localhost/SIMasjid/view/AdminMasjid/galeri.php?status=true');
        } else if ($insertGallery = true && $updateFotoGaleri = null) {
            header('location:http://localhost/SIMasjid/view/AdminMasjid/galeri.php?status=true');
        } else if ($insertGallery = null && $updateFotoGaleri = true) {
            header('location:http://localhost/SIMasjid/view/AdminMasjid/galeri.php?status=true');
        } else if ($insertGallery = null && $updateFotoGaleri = null) {
            header('location:http://localhost/SIMasjid/view/AdminMasjid/galeri.php?status=false');
        }
    } else {
        header('location:http://localhost/SIMasjid/view/AdminMasjid/galeri.php?status=false');
    }
}
?>