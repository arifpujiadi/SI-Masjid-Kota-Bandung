<?php

ob_start();
session_start();
require_once '../../connectDB.php';

if (isset($_POST['adminmasjid_tulisPesankeadminutama_submit'])) {
    if ($_POST['judulPesanAU'] != '' &&
            $_POST['isiPesanAU'] != '') {
        $dari = $_SESSION['user'][3];
        $ke = '1';
        $judulPesan = str_replace('"', "''", $_POST['judulPesanAU']);
        $isiPesan = str_replace('"', "''", nl2br($_POST['isiPesanAU']));
        $date = date("Y-m-d H:i:s");
        $inbox = '0';
        $sent = '1';

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

        $insert_pesanInbox = queryInsert('pesan (id_user, ke, nama_dari, nama_ke, judul, isi_pesan, status, tanggal_upload)', $dari . ',' . $ke . ',"' . $nama_dari . '","' . $nama_ke . '","' . $judulPesan . '","' . $isiPesan . '",'.$inbox.',"' . $date . '"');
        $insert_pesanSent = queryInsert('pesan (id_user, ke, nama_dari, nama_ke, judul, isi_pesan, status, tanggal_upload)', $dari . ',' . $ke . ',"' . $nama_dari . '","' . $nama_ke . '","' . $judulPesan . '","' . $isiPesan . '",'.$sent.',"' . $date . '"');

        $dataPesan = querySelect('*', 'pesan', 'id_user=' . $dari . ' ORDER BY id_pesan DESC', null);
        $id_pesan = $dataPesan[0]['id_pesan'];

        if (isset($_FILES['uploadfile1'])) {
            $files = $_FILES['uploadfile1'];
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
        $updatePesan = queryUpdate('pesan', 'nama_file="' . $fileNameOri . '", alamat_file="' . $finalFile . '"', 'id_pesan=' . $id_pesan-1);

        if ($insert_pesanInbox && $insert_pesanSent) {
            header('location:http://localhost/SIMasjid/view/AdminMasjid/tulis.php?&status=true');
        }
        echo '<br>';
    } else {
        header('location:http://localhost/SIMasjid/view/AdminMasjid/tulis.php?&status=false');
    }
} else if (isset($_POST['adminmasjid_tulisPesankeadminmasjid_submit'])) {
    if ($_POST['wilayahMasjid'] != 'Pilih wilayah' &&
            $_POST['id_masjid'] != '' &&
            $_POST['judulPesan'] != '' &&
            $_POST['isiPesan'] != '') {
        $wilayahMasjid = $_POST['wilayahMasjid'];
        $dari = $_SESSION['user'][3];
        $ke = $_POST['id_masjid'];
        $judulPesan = str_replace('"', "''", $_POST['judulPesan']);
        $isiPesan = str_replace('"', "''", nl2br($_POST['isiPesan']));
        $date = date("Y-m-d H:i:s");
        $inbox = '0';
        $sent = '1';

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
        
        $insert_pesanInbox = queryInsert('pesan (id_user, ke, nama_dari, nama_ke, judul, isi_pesan, status, tanggal_upload)', $dari . ',' . $ke . ',"' . $nama_dari . '","' . $nama_ke . '","' . $judulPesan . '","' . $isiPesan . '",'.$inbox.',"' . $date . '"');
        $insert_pesanSent = queryInsert('pesan (id_user, ke, nama_dari, nama_ke, judul, isi_pesan, status, tanggal_upload)', $dari . ',' . $ke . ',"' . $nama_dari . '","' . $nama_ke . '","' . $judulPesan . '","' . $isiPesan . '",'.$sent.',"' . $date . '"');
        
        $dataPesan = querySelect('*', 'pesan', 'id_user=' . $dari . ' ORDER BY id_pesan DESC', null);
        $id_pesan = $dataPesan[0]['id_pesan'];

        if (isset($_FILES['uploadfile2'])) {
            $files = $_FILES['uploadfile2'];
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
        $updatePesan = queryUpdate('pesan', 'nama_file="' . $fileNameOri . '", alamat_file="' . $finalFile . '"', 'id_pesan=' . $id_pesan-1);

        if ($insert_pesanInbox && $insert_pesanSent) {
            header('location:http://localhost/SIMasjid/view/AdminMasjid/tulis.php?&status=true');
        }
        echo '<br>';
    } else {
        header('location:http://localhost/SIMasjid/view/AdminMasjid/tulis.php?&status=false');
    }
}
?>