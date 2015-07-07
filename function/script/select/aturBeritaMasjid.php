<?php

require_once '../../connectDB.php';

$masjid = querySelect('*', 'masjid  INNER JOIN `user` ON masjid.id_user = `user`.id_user', 'id_wilayah = ' . $_GET['idWilayah'], null);

$masjidByWilayah = '';
for ($i = 0; $i < count($masjid); $i++) {
    $masjidByWilayah .= '
                                <div class="baris box span-12">
                                    <div class="nomer center box span-2">
                                        ' . ($i + 1) . '
                                    </div>
                                    <div class="isi center box span-2">
                                        ' . $masjid[$i]['username'] . '
                                    </div>
                                    <div class="masjid inherit center box span-6">
                                        ' . $masjid[$i]['nama_masjid'] . '
                                    </div>
                                    <div class="aksi box span-2">
                                        <div class="ubah box span-12">
                                            <a class="btn btn-block btn-lg btn-ubah-inverse" href="../AdminUtama/isiUbahAdminMasjid.php?id_masjid=' . $masjid[$i]["id_masjid"] . '">
                                                <img src="../img/Notification/edit.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
    ';
}
echo $masjidByWilayah;
?>