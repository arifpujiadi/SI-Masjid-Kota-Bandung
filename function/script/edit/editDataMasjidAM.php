<?php

include_once '../../connectDB.php';
include_once '../../ImageHandler.php';

if ($_POST['id_masjid'] != '' &&
        $_POST['wilayahMasjid'] != '' &&
        $_POST['namaMasjid'] != '' &&
        $_POST['alamat'] != '' &&
        $_POST['email'] != '' &&
        $_POST['rt'] != '' &&
        $_POST['rw'] != '' &&
        $_POST['kecamatan'] != '' &&
        $_POST['noTelp'] != '') {

    $id_masjid = $_POST['id_masjid'];
    $wilayah = $_POST['wilayahMasjid'];
    $nama_masjid = str_replace('"', "''", $_POST['namaMasjid']);
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $kecamatan = $_POST['kecamatan'];
    $no_tp = $_POST['noTelp'];
    $email = $_POST['email'];
    $tanggalPeresmian = $_POST['tanggal'] . '/' . $_POST['bulan'] . '/' . $_POST['tahun'];
    $luasTanah = $_POST['luasTanah'];
    $luasBangunan = $_POST['luasBangunan'];
    $dayaTampungDalam = $_POST['dayaTampungDalamMasjid'];
    $dayaTampungLuar = $_POST['dayaTampungLuarMasjid'];
    $deskripsi = str_replace('"', "''", nl2br($_POST['deskripsiMasjid']));
    $keunikan = str_replace('"', "''", nl2br($_POST['keunikan']));
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $deleteFasilitas = queryDelete('fasilitas_masjid', 'id_masjid=' . $id_masjid);

    if (isset($_POST['fasilitas'])) {
        $fasilitas = $_POST['fasilitas'];
        for ($i = 0; $i < count($fasilitas); $i++) {
            $insertFasilitas = queryInsert('fasilitas_masjid', $id_masjid . ',' . $fasilitas[$i]);
        }
    }

    $deleteKegiatan = queryDelete('kegiatan_masjid', 'id_masjid=' . $id_masjid);

    if (isset($_POST['kegiatan'])) {
        $kegiatan = $_POST['kegiatan'];
        for ($i = 0; $i < count($kegiatan); $i++) {
            $insertKegiatan = queryInsert('kegiatan_masjid', $id_masjid . ',' . $kegiatan[$i]);
        }
    }


    $getFoto = $_FILES["uploadfoto"]["name"];
    $cariFoto = querySelect('*', 'masjid', 'id_masjid=' . $id_masjid, null);
    $statusFoto = $cariFoto[0]['foto'];

    if ($statusFoto == '' && $getFoto != '' || $statusFoto != '' && $getFoto != '') {
        $targetfile = "../../../View/img/Upload/fotoProfil/";
        $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG");
        $temp = explode(".", $_FILES["uploadfoto"]["name"]);
        $extension = end($temp);
        if ((($_FILES["uploadfoto"]["type"] == "image/gif") || ($_FILES["uploadfoto"]["type"] == "image/jpeg") || ($_FILES["uploadfoto"]["type"] == "image/jpg") || ($_FILES["uploadfoto"]["type"] == "image/JPG") || ($_FILES["uploadfoto"]["type"] == "image/pjpeg") || ($_FILES["uploadfoto"]["type"] == "image/x-png") || ($_FILES["uploadfoto"]["type"] == "image/png"))

                && ($_FILES["uploadfoto"]["size"] < 8000000) 
                && in_array($extension, $allowedExts)) {
            if ($_FILES["uploadfoto"]["error"] > 0) {
                echo "Return Code: " . $_FILES["uploadfoto"]["error"] . "<br>";
            } else {
                $mime = explode("/", $_FILES["uploadfoto"]["type"]);
                $mime = $mime[1];
                $imageName = $nama_masjid . $id_masjid . "." . $mime; 
                move_uploaded_file($_FILES["uploadfoto"]["tmp_name"], $targetfile . $imageName);

            }

            try {
                $foto = ImageHandler::getProfilePicture($imageName);
                echo "sukses upload";
            } catch (Exception $ex) {
                echo $ex;
            }
        }
    } else {
        $foto = $statusFoto;
    }

    $getStruktur = $_FILES["uploadStrukturOrganisasi"]["name"];
    $cariStruktur = querySelect('*', 'masjid', 'id_masjid=' . $id_masjid, null);
    $statusStruktur = $cariStruktur[0]['struktur_organisasi'];

    if ($statusStruktur == '' && $getStruktur != '' || $statusStruktur != '' && $getStruktur != '') {
        $targetfile = "../../../View/img/Upload/strukturOrganisasi/";
        $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG");
        $temp = explode(".", $_FILES["uploadStrukturOrganisasi"]["name"]);
        $extension = end($temp);
        if ((($_FILES["uploadStrukturOrganisasi"]["type"] == "image/gif") || ($_FILES["uploadStrukturOrganisasi"]["type"] == "image/jpeg") || ($_FILES["uploadStrukturOrganisasi"]["type"] == "image/jpg") || ($_FILES["uploadStrukturOrganisasi"]["type"] == "image/JPG") || ($_FILES["uploadStrukturOrganisasi"]["type"] == "image/pjpeg") || ($_FILES["uploadStrukturOrganisasi"]["type"] == "image/x-png") || ($_FILES["uploadStrukturOrganisasi"]["type"] == "image/png"))
                
                && ($_FILES["uploadStrukturOrganisasi"]["size"] < 8000000)
                && in_array($extension, $allowedExts)) {
            if ($_FILES["uploadStrukturOrganisasi"]["error"] > 0) {
                echo "Return Code: " . $_FILES["uploadStrukturOrganisasi"]["error"] . "<br>";
            } else {
                $mime = explode("/", $_FILES["uploadStrukturOrganisasi"]["type"]);
                $mime = $mime[1];
                $imageName = $nama_masjid . $id_masjid . "." . $mime; 
                move_uploaded_file($_FILES["uploadStrukturOrganisasi"]["tmp_name"], $targetfile . $imageName);

            }

            try {
                $struktur = ImageHandler::getStrukturOrganisasi($imageName);
                echo "sukses upload";
            } catch (Exception $ex) {
                echo $ex;
            }
        }
    } else {
        $struktur = $statusStruktur;
    }

    if (isset($_FILES['uploadfile'])) {

        $files = $_FILES['uploadfile'];

        if (count($files) > 0) {
            $nFile = count($files['name']);
            for ($i = 0; $i < $nFile; $i++) {
                $targetDir = '../../../View/img/Upload/file/';
                $temp = explode('.', $files['name'][$i]);
                $mime = end($temp);
                if (in_array($mime, array('pdf', 'zip', 'rar', 'doc', 'docx', 'xls', 'xlsx')) && ($files['size'][$i] <= 9000000)) {
                    $fileNameOri = $files['name'][$i];
                    $temp2 = explode('.', $fileNameOri);
                    $fileName = $temp2[0]."_".$nama_masjid . $id_masjid . "_" . $i . "." . $mime;
                    $finalFile = 'http://localhost/SIMasjid/View/img/Upload/file/' . $fileName;
                    if (move_uploaded_file($files['tmp_name'][$i], $targetDir . $fileName)) {
                        $insertFile = queryInsert('file (id_masjid, nama_file, lokasi_file)', $id_masjid . ',"' . $fileNameOri . '","' . $finalFile . '"');
                        echo 'sukses upload ' . $fileName;
                    } else {
                        echo 'gagal upload ' . $fileName;
                    }
                }
            }
        }
    }


    if (isset($_POST['idFileHapus'])) {

        $listHapusFile = $_POST['idFileHapus'];
        


        for ($i = 0; $i < count($listHapusFile); $i++) {
            $tempFile = querySelect('*', 'file', 'id_file=' . $listHapusFile[$i], null);
            
            $temp2 = $tempFile[0]['lokasi_file'];
            echo 'temp2 ='.$temp2.'<br>';
            
             
            $urlFile = split('http://localhost/SIMasjid/', $temp2);
            echo 'url ='.$urlFile[1];
            unlink("../../../". $urlFile[1]);
            
            queryDelete("file", "id_file=" . $listHapusFile[$i]);
        }
    }

    $deleteKegiatanRutin = queryDelete('kegiatan_rutin', 'id_masjid=' . $id_masjid);

    if (isset($_POST['kegiatanRutin']) && isset($_POST['hari']) && isset($_POST['jamAwal']) && isset($_POST['jamAkhir'])) {
        $kegiatanRutin = $_POST['kegiatanRutin'];
        $hari = $_POST['hari'];
        $jamAwal = $_POST['jamAwal'];
        $jamAkhir = $_POST['jamAkhir'];
        for ($i = 0; $i < count($kegiatanRutin); $i++) {
            $insertKegiatanRutin = queryInsert('kegiatan_rutin (id_masjid, nama, hari, jam_mulai, jam_selesai)', $id_masjid . ',"' . $kegiatanRutin[$i] . '","' . $hari[$i] . '","' . $jamAwal[$i] . '","' . $jamAkhir[$i] . '"');
        }
    }

    $deleteAngkot = queryDelete('rute_angkot', 'id_masjid=' . $id_masjid);

    if (isset($_POST['angkot']) && isset($_POST['jalan'])) {

        $angkot = $_POST['angkot'];
        $jalan = $_POST['jalan'];

        for ($i = 0; $i < count($angkot); $i++) {
            $insertAngkot = queryInsert('rute_angkot (id_masjid, nama_jalan, id_angkot)', $id_masjid . ',"' . $jalan[$i] . '",' . $angkot[$i] . '');
        }
    }

    $update_masjid = queryUpdate('masjid', 'id_wilayah=' . $wilayah . ', foto="' . $foto . '", nama_masjid="' . $nama_masjid . '", alamat="' . $alamat . '", rt="' . $rt . '", rw="' . $rw . '", kecamatan="' . $kecamatan . '", no_telepon="' . $no_tp . '", email="' . $email . '", peresmian_bangunan="' . $tanggalPeresmian . '", luas_tanah="' . $luasTanah . '", luas_bangunan="' . $luasBangunan . '", daya_tampung_dalam_masjid="' . $dayaTampungDalam . '", daya_tampung_luar_masjid="' . $dayaTampungLuar . '", deskripsi_masjid="' . $deskripsi . '", keunikan="' . $keunikan . '", latitude="' . $latitude . '", longitude="' . $longitude . '", struktur_organisasi="' . $struktur . '"', 'id_masjid= "' . $id_masjid . '"');

    if ($update_masjid || $insertAngkot || $insertKegiatanRutin || $insertFile || $insertKegiatan || $insertFasilitas) {
        header('location:http://localhost/SIMasjid/view/AdminMasjid/ubahDataMasjid.php?status=true');
    } else {
        header('location:http://localhost/SIMasjid/view/AdminMasjid/ubahDataMasjid.php?status=false');
    }
} else {
    header('location:http://localhost/SIMasjid/view/AdminMasjid/ubahDataMasjid.php?status=false');
}
?>