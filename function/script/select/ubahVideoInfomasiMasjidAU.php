<?php

require_once '../../connectDB.php';

$video = querySelect('*', 'video_informasi_masjid inner join masjid on masjid.id_masjid = video_informasi_masjid.id_masjid', 'video_informasi_masjid.id_masjid='.(int)$_GET['idWilayah'].' AND masjid.id_wilayah='.(int)$_GET['wilMasjid'].' ORDER BY tanggal_upload DESC', null);

$offset = (int) $_GET['offset'];
$masjidByWilayah = '';
$pagination = 0;

for ($i = 0; $i < count($video); $i++) {
    if ($i >= $offset) {
        if ($pagination < 5) {
            $masjidByWilayah .= '
                                <div class="baris box span-12">
                                        <div class="nomer center box span-1-5">
                                            ' . ($i + 1) . '
                                        </div>
                                        <div class="inherit center box span-2-5">
                                                <table class="tabel-keterangan middle">
                                                    <tr>
                                                        <td>
                                                            ' . $video[$i]['nama_masjid'] . '
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        <div class="inherit center box span-6">
                                                <table class="tabel-judul middle">
                                                    <tr>
                                                        <td>
                                                            ' . $video[$i]['judul'] . '
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        <div class="aksi box span-2-5">
                                            <div class="ubah box span-6">
                                                <a class="btn btn-block btn-lg btn-ubah-inverse" href="isiAturVideoInformasiMasjid.php?ubah=true&id_masjid=' . $video[$i]['id_masjid'] . '&id_video_masjid=' . $video[$i]['id_video_masjid'] . '">
                                                    <img src="../img/Notification/edit.png">
                                                </a>
                                            </div>
                                            <div class="hapus box span-6">
                                                <a id="hapus" class="btn btn-block btn-lg btn-hapus-inverse" href="aturVideoInformasiMasjid.php?delete=true&id_video_masjid='.$video[$i]['id_video_masjid'].'" onClick="return confirm_delete()">
                                                    <img src="../img/Notification/delete.png">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                
    ';
            $pagination++;
        } else {
            break;
        }
    }
}

        $masjidByWilayah .= '<div class="button box span-12">';
$masjidByWilayah .='<div class="panah-kiri box span-1">';
if($offset<=0){
    $masjidByWilayah.='&nbsp;';
} else if($offset>0){
    $masjidByWilayah.='<a class="panah_kiri" href="#" onclick="(getVideo('.$_GET['idWilayah'].','.($offset-5).'))">
                                            <img src="../img/Panah/Kiri-2.png">
                                        </a>';
}
$masjidByWilayah .='</div>'.'<div class="box span-10">&nbsp;</div>'.'<div class="panah-kanan box span-1" style="text-align:right;">';
$jml_array=count($video);

if($offset+5<$jml_array){
    $masjidByWilayah .='<a class="panah_kanan" href="#"  onclick="getVideo('.$_GET['idWilayah'].','.($offset+5).')">
                                            <img src="../img/Panah/Kanan-2.png">
                                        </a>';
}
$masjidByWilayah .='</div>'. '</div>';
echo $masjidByWilayah;

?>