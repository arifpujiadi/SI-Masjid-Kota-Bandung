<?php

require_once '../../function/connectDB.php';

$masjid = querySelect('*', 'wilayah', null, null);

$wilayah = '';
for ($i = 0; $i < count($masjid); $i++) {
    if (!isset($tampungWilayah)) {
        $wilayah .= '
        <option class="option" value="' . $masjid[$i]['id_wilayah'] . '">' . $masjid[$i]['nama_wilayah'] . '</option>
    ';
    } else {
        if ($i == $tampungWilayah-1) {
            $wilayah .= '
        <option class="option" selected value="' . $masjid[$i]['id_wilayah'] . '">' . $masjid[$i]['nama_wilayah'] . '</option>
    ';
        } else {
            $wilayah .= '
        <option class="option" value="' . $masjid[$i]['id_wilayah'] . '">' . $masjid[$i]['nama_wilayah'] . '</option>
    ';
        }
    }
}


echo $wilayah;
?>