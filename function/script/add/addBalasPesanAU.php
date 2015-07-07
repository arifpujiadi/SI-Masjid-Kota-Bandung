<?php
ob_start(); 
session_start();
require_once '../../connectDB.php';
if ($_POST['judulPesan'] != '' &&
        $_POST['isiPesan'] != '') {

    $dari = $_SESSION['user'][3];
    $ke = $_REQUEST['dari'];
    $judulPesan = str_replace('"', "''",$_POST['judulPesan']);
    $isiPesan = str_replace('"', "''",nl2br($_POST['isiPesan']));
    $file = 'url';
    $date = date("Y-m-d H:i:s");
    $pesan_id = $_REQUEST['pesan_id'];

    if ($dari == 1) {
        $nama_dari = "Admin Utama";
    } else {
        $nama_masjid = querySelect('*', 'masjid', 'id_user =' . $dari, null);
        $nama_dari = $nama_masjid[0]['nama_masjid'];
    }

    if ($ke == 1) {
        $nama_ke = "Admin Utama";
    } else {
        $masjid = querySelect('*', 'masjid', 'id_user =' . $ke, null);
        $nama_ke = $masjid[0]['nama_masjid'];
    }

    echo $dari . '<br>';
    echo $ke . '<br>';
    echo $nama_dari . '<br>';
    echo $nama_ke . '<br>';
    echo $judulPesan . '<br>';
    echo $isiPesan . '<br>';
    echo $date . '<br>';

    $insert_pesan = queryInsert('pesan (id_user, ke, nama_dari, nama_ke, judul, isi_pesan, tanggal_upload)', $dari . ',' . $ke . ',"' . $nama_dari . '","' . $nama_ke . '","' . $judulPesan . '","' . $isiPesan . '","' . $date . '"');

    $dataPesan = querySelect('*', 'pesan', 'id_user=' . $dari . ' ORDER BY id_pesan DESC', null);
    $id_pesan = $dataPesan[0]['id_pesan'];
    
    if (isset($_FILES['uploadfile'])) {
        $files = $_FILES['uploadfile'];
        $nFile = count($files['name']);
        $targetDir = '../../../View/img/Upload/filePesan/';
        $temp = explode('.', $files['name']);
        $mime = end($temp);
        if (in_array($mime, array('pdf', 'zip')) && ($files['size'] >= 30000 && $files['size'] <= 8000000)) {
            $fileNameOri = $files['name'];
            $fileName = "FilePesan_" . $nama_dari . "_" . $dari . "_" . $id_pesan . "." . $mime;
            $finalFile = 'http://localhost/SIMasjid/View/img/Upload/filePesan/' . $fileName;
            if (move_uploaded_file($files['tmp_name'], $targetDir . $fileName)) {
                echo 'sukses upload ' . $fileName;
            } else {
                echo 'gagal upload ' . $fileName;
            }
        }
    }

    $updatePesan = queryUpdate('pesan', 'nama_file="' . $fileNameOri . '", alamat_file="' . $finalFile . '"', 'id_pesan=' . $id_pesan);

    if ($insert_pesan) {
        header('location:http://localhost/SIMasjid/view/AdminUtama/balasPesan.php?pesan_id='.$pesan_id.'&status=true');
    }
    echo '<br>';
} else {
    header('location:http://localhost/SIMasjid/view/AdminUtama/balasPesan.php?pesan_id='.$pesan_id.'&status=false');
}
?>