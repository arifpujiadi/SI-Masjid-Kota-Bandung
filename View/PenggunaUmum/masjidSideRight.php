<?php
include '../../function/connectDB.php';

$id_masjid = $_GET['id_masjid'];
$dataMasjid = querySelect('*', 'masjid', 'id_masjid=' . $id_masjid, null);
$beritaMasjid = querySelect('*', 'berita_masjid', 'id_masjid=' . $id_masjid . ' ORDER BY tanggal_upload DESC', null);
?>
<div class="box span-12">
    <div class="judul box span-12">
        Berita terbaru <?php echo $dataMasjid[0]['nama_masjid'] ?>
    </div>
    <div class="box span-12">
        <?php
        if (isset($_GET['offset'])) {
            $offset = (int) $_GET['offset'];
        } else {
            $offset = 0;
        }
        $pagination = 0;
        for ($i = 0; $i < count($beritaMasjid); $i++) {
            $date = $beritaMasjid[$i]['tanggal_upload'];
            $dateArray = explode(" ", $date);
            $tanggal = $dateArray[0];
            $jam = $dateArray[1];
            if ($i >= $offset) {
                if ($pagination < 5) {
                    ?>
                    <div class="baris box span-12">
                        <div class="judul-berita box span-12">
                            <?php echo $beritaMasjid[$i]['judul'] ?>
                        </div>
                        <div class="box span-12" style="font-size: 12px; color: #6C7A89;">
                            Tanggal upload : <?php echo $tanggal ?>, jam upload : <?php echo $jam ?>
                        </div>
                        <div class="button-berita box span-12">
                            <a class="btn-berita btn-berita-block btn-berita-lg btn-berita-inverse" href="masjidBerita.php?id_masjid=<?php echo $id_masjid ?>&id_berita=<?php echo $beritaMasjid[$i]['id_berita_masjid']; ?>">Selengkapnya</a>
                        </div>
                    </div>
                    <?php
                    $pagination++;
                } else {
                    break;
                }
            }
        }
        ?>
    </div>
</div>