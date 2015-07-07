<?php
include '../../function/connectDB.php';

$id_masjid = $_GET['id_masjid'];
$dataMasjid = querySelect('*', 'masjid', 'id_masjid=' . $id_masjid, null);
$wilayah = $dataMasjid[0]['id_wilayah'];
$namaWilayah = querySelect('*', 'wilayah', 'id_wilayah=' . $wilayah, null);
$date = $dataMasjid[0]['peresmian_bangunan'];

if ($date != '' || $date != null) {
    $dateArray = explode("/", $date);
    $tanggal = $dateArray[0];
    $bulan = $dateArray[1];
    $tahun = $dateArray[2];
} else {
    $tanggal = '';
    $bulan = '';
    $tahun = '';
}

$fileMasjid = querySelect('*', 'file', 'id_masjid=' . $id_masjid, null);
?>
<div class="box span-12">
    <div class="foto-masjid box span-12">
        <a href="<?php echo $dataMasjid[0]['foto'] ?>" target="_blank">
            <img class="img-masjid" src="<?php echo $dataMasjid[0]['foto'] ?>">
        </a>
    </div>
    <div class="judul box span-12">
        Data Teknis
    </div>
    <div class="border box span-12">
        <div class="jarak-data box span-12">
            <table>
                <tr>
                    <td class="sub-data">Alamat</td>
                    <td>:</td>
                    <td><?php echo $dataMasjid[0]['alamat'] ?></td>
                </tr>
                <tr>
                    <td>RT</td>
                    <td>:</td>
                    <td><?php echo $dataMasjid[0]['rt'] ?></td>
                </tr>
                <tr>
                    <td>RW</td>
                    <td>:</td>
                    <td><?php echo $dataMasjid[0]['rw'] ?></td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td>:</td>
                    <td><?php echo $dataMasjid[0]['kecamatan'] ?></td>
                </tr>
                <tr>
                    <td>No.Telepon</td>
                    <td>:</td>
                    <td><?php echo $dataMasjid[0]['no_telepon'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo $dataMasjid[0]['email'] ?></td>
                </tr>
            </table>
        </div>
        <div class="jarak-data box span-12">
            <table>
                <tr>
                    <td class="sub-data">Peresmian bangunan</td>
                    <td>:</td>
                    <td>
                        <?php
                        $namaBulan = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
                        if ($tanggal != '' && $bulan != '' && $tahun != '' || $tanggal != null && $bulan != null && $tahun != null) {
                            echo $tanggal . ' ' . $namaBulan[$bulan - 1] . ' ' . $tahun;
                        } else {
                            echo '';
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <div class="jarak-data box span-12">
            <table>
                <tr>
                    <td class="sub-data">Luas tanah</td>
                    <td>:</td>
                    <td>±&nbsp;</td>
                    <td><?php echo $dataMasjid[0]['luas_tanah'] ?></td>
                    <td>&nbsp;m²</td>
                </tr>
                <tr>
                    <td>Luas bangunan</td>
                    <td>:</td>
                    <td>±&nbsp;</td>
                    <td><?php echo $dataMasjid[0]['luas_bangunan'] ?></td>
                    <td>&nbsp;m²</td>
                </tr>
            </table>
        </div>
        <div class="jarak-data box span-12">
            <table>
                <tr>
                    <td class="sub-data">Daya Tampung jamaah</td>
                    <td>:</td>
                    <td>±&nbsp;</td>
                    <td><?php echo $dataMasjid[0]['daya_tampung_dalam_masjid'] + $dataMasjid[0]['daya_tampung_luar_masjid'] ?></td>
                    <td>&nbsp;orang</td>
                </tr>
                <tr>
                    <td>Dalam masjid</td>
                    <td>:</td>
                    <td>±&nbsp;</td>
                    <td><?php echo $dataMasjid[0]['daya_tampung_dalam_masjid'] ?></td>
                    <td>&nbsp;orang</td>
                </tr>
                <tr>
                    <td>Luar masjid</td>
                    <td>:</td>
                    <td>±&nbsp;</td>
                    <td><?php echo $dataMasjid[0]['daya_tampung_luar_masjid'] ?></td>
                    <td>&nbsp;orang</td>
                </tr>
            </table>
        </div>
        <div class="jarak-data box span-12">
            <table>
                <tr>
                    <td class="sub-data">Wilayah</td>
                    <td>:</td>
                    <td><?php echo $namaWilayah[0]['nama_wilayah'] ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="file box span-12">
    <div class="judulFile box span-12">
        File untuk umum :
    </div>
    <?php
    for ($i = 0; $i < count($fileMasjid); $i++) {
        ?>
        <div class="box span-12">
            <div class="box span-1" style="text-align: center;">
                <img class="gambar inherit" src="../img/Icon/Download.png">
            </div>
            <div class="list box span-11">
                <a class="href-black" href="<?php echo $fileMasjid[$i]['lokasi_file'] ?>">  
                    <?php
                    echo $fileMasjid[$i]['nama_file'];
                    ?>
                </a>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<div class="button box span-12">
    <a class="btn btn-block btn-lg btn-inverse" href="masjidGaleri.php?id_masjid=<?php echo $id_masjid ?>">Galeri</a>
</div>