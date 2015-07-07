<?php

require_once '../../connectDB.php';

$masjid = querySelect('*', 'masjid  INNER JOIN `user` ON masjid.id_user = `user`.id_user', 'id_wilayah = ' . $_GET['idWilayah'].' ORDER BY nama_masjid ASC', null);

$offset=(int)$_GET['offset'];
$masjidByWilayah = '';
$pagination=0;

for ($i = 0; $i < count($masjid); $i++) {
    if($i>=$offset){
        if($pagination<5){
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
        $pagination++;
    }else{
        break;
    }
    }
}

$masjidByWilayah .='<div class="button box span-12">';
$masjidByWilayah .='<div class="panah-kiri box span-1">';
if($offset<=0){
    $masjidByWilayah.='&nbsp;';
} else if($offset>0){
    $masjidByWilayah.='<a class="panah_kiri" href="#" onclick="(ubahAdminMasjidAU('.$_GET['idWilayah'].','.($offset-5).'))">
                                            <img src="../img/Panah/Kiri-2.png">
                                        </a>';
}
$masjidByWilayah .='</div>'.'<div class="box span-10">&nbsp;</div>'.'<div class="panah-kanan box span-1" style="text-align:right;">';
$jml_array=count($masjid);

if($offset+5<$jml_array){
    $masjidByWilayah .='<a class="panah_kanan" href="#"  onclick="ubahAdminMasjidAU('.$_GET['idWilayah'].','.($offset+5).')">
                                            <img src="../img/Panah/Kanan-2.png">
                                        </a>';
}
$masjidByWilayah .='</div>'. '</div>';
echo $masjidByWilayah;
?>