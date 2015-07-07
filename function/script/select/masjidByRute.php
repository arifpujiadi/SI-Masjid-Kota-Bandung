<?php
require_once '../../connectDB.php';

if($_POST['wilayah'] && $_POST['masjid']) {
	$masjid = querySelect('masjid.nama_masjid, masjid.alamat, masjid.rt, masjid.rw, masjid.kecamatan, masjid.foto, masjid.latitude, masjid.longitude, wilayah.nama_wilayah',
	  'masjid left join wilayah on masjid.id_wilayah=wilayah.id_wilayah',
	  "masjid.id_wilayah='$_POST[wilayah]' and masjid.id_masjid='$_POST[masjid]' AND validasi=1", null);   


	$lokasi = array();
	if(!empty($masjid)) {
		$alamat = $masjid[0]['alamat'].' RT/RW '.$masjid[0]['rt'].'/'.$masjid[0]['rw'].', Kec. '.$masjid[0]['kecamatan'];
		$angkot = querySelect('angkot.jurusan, angkot.warna, angkot.foto_angkot, rute_angkot.nama_jalan',
			'masjid left join rute_angkot on masjid.id_masjid=rute_angkot.id_masjid left join angkot on angkot.id_angkot=rute_angkot.id_angkot',
			"masjid.id_wilayah='$_POST[wilayah]' and masjid.id_masjid='$_POST[masjid]'", null); 
		$rute = '';
		if(!empty($angkot)) {
			$nRute = count($angkot);
			for($i=0;$i<$nRute;$i++) {
				$rute .= '<li>Angkot <a href="'.$angkot[$i]['foto_angkot'].'" class="angkot" title="'.$angkot[$i]['jurusan'].'">'.$angkot[$i]['jurusan'].'</a> (<span style="font-style:italic">'.$angkot[$i]['warna'].'</span>). Turun di <strong>'.$angkot[$i]['nama_jalan'].'</strong></li>';
			}
		} else {
			$rute = 'Tidak ada rute angkot menuju Masjid <strong>'.$masjid[0]['nama_masjid'].'</strong> di wilayah <strong>'.$masjid[0]['nama_wilayah'].'</strong>';
		}
		$lokasi = array(
			'keterangan' => 'Daftar angkot yang menuju Masjid <strong>'.$masjid[0]['nama_masjid'].'</strong> di wilayah <strong>'.$masjid[0]['nama_wilayah'].'</strong>
				<ul class="keteranganRuteAngkot">'.$rute.'</ul>',
			'infoContent' => '<div style="overflow:hidden; overflow-y:hidden"><h4>'.$masjid[0]['nama_masjid'].'</h4><img src="'.$masjid[0]['foto'].'" width="300" height="300"><div style="font-style:italic">'.$alamat.'</div></div>',
			'lat' => $masjid[0]['latitude'],
			'lng' => $masjid[0]['longitude']
		);
	}
	echo json_encode($lokasi);
}
?>