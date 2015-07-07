<?php
require_once '../../connectDB.php';

if(isset($_POST['nama'])) {
	$masjid = querySelect('id_masjid, nama_masjid',
		  'masjid',
		  "nama_masjid like '%".$_POST['nama']."%' AND validasi=1 ORDER BY nama_masjid ASC",
		  null);   


	$masjidByNama = array();
	for($i = 0; $i < count($masjid) ; $i++){
		$masjidByNama[] = array(
			'id' => $masjid[$i]['id_masjid'],
			'nama' => $masjid[$i]['nama_masjid']
		);
	}
	echo json_encode($masjidByNama);
}

if(isset($_POST['id'])) {
	$masjid = querySelect('masjid.nama_masjid, masjid.alamat, masjid.rt, masjid.rw, masjid.kecamatan, masjid.foto, masjid.latitude, masjid.longitude, wilayah.nama_wilayah',
	  'masjid left join wilayah on masjid.id_wilayah=wilayah.id_wilayah',
	  "masjid.id_masjid='$_POST[id]'",
	  null);   


	$lokasi = array();
	if(!empty($masjid)) {
		$alamat = $masjid[0]['alamat'].' RT/RW '.$masjid[0]['rt'].'/'.$masjid[0]['rw'].', Kec. '.$masjid[0]['kecamatan'];
		$lokasi = array(
			'keterangan' => 'Anda mencari Masjid <strong>'.$masjid[0]['nama_masjid'].'</strong>',
			'infoContent' => '<div style="overflow:hidden; overflow-y:hidden"><h4>'.$masjid[0]['nama_masjid'].'</h4><img src="'.$masjid[0]['foto'].'" width="300" height="300"><div style="font-style:italic">'.$alamat.'</div></div>',
			'lat' => $masjid[0]['latitude'],
			'lng' => $masjid[0]['longitude']
		);
	}
	echo json_encode($lokasi);
}
?>