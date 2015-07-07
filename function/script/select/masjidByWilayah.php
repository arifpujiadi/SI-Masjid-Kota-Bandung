<?php
require_once '../../connectDB.php';

if(isset($_GET['idWilayah'])) {
	$masjid = querySelect('*',
              'masjid',
              'id_wilayah = '.$_GET['idWilayah'].' AND validasi=1 ORDER BY nama_masjid ASC',
              null);   


	$masjidByWilayah = '';
	for($i = 0; $i < count($masjid) ; $i++){
		$pilih='<option class="option" value="">Pilih masjid</option>';
		$masjidByWilayah .= '
			<option class="option" value="'.$masjid[$i]['id_masjid'].'">'.$masjid[$i]['nama_masjid'].'</option>
		';  
	}
	echo $pilih;
	echo $masjidByWilayah;
}

if($_POST['wilayah'] && $_POST['masjid']) {
	$masjid = querySelect('masjid.nama_masjid, masjid.alamat, masjid.rt, masjid.rw, masjid.kecamatan, masjid.foto, masjid.latitude, masjid.longitude, wilayah.nama_wilayah',
	  'masjid left join wilayah on masjid.id_wilayah=wilayah.id_wilayah',
	  "masjid.id_wilayah='$_POST[wilayah]' and masjid.id_masjid='$_POST[masjid]'",
	  null);   


	$lokasi = array();
	if(!empty($masjid)) {
		$alamat = $masjid[0]['alamat'].' RT/RW '.$masjid[0]['rt'].'/'.$masjid[0]['rw'].', Kec. '.$masjid[0]['kecamatan'];
		$lokasi = array(
			'keterangan' => 'Anda mencari Masjid <strong>'.$masjid[0]['nama_masjid'].'</strong> di wilayah <strong>'.$masjid[0]['nama_wilayah'].'</strong>',
			'infoContent' => '<div style="overflow:hidden; overflow-y:hidden"><h4>'.$masjid[0]['nama_masjid'].'</h4><img src="'.$masjid[0]['foto'].'" width="300" height="300"><div style="font-style:italic">'.$alamat.'</div></div>',
			'lat' => $masjid[0]['latitude'],
			'lng' => $masjid[0]['longitude']
		);
	}
	echo json_encode($lokasi);
}
?>