<?php

session_start();

require_once '../../connectDB.php';

$id_masjid = $_POST['id_masjid'];
$updateValidasi = queryUpdate('masjid', 'validasi=1', 'id_masjid=' . $id_masjid);

if ($updateValidasi) {
    header('location:http://localhost/SIMasjid/view/AdminUtama/konfirmasiMasjid.php?status=true');
} else {
    header('location:http://localhost/SIMasjid/view/AdminUtama/konfirmasiMasjid.php?&status=false');
}
?>