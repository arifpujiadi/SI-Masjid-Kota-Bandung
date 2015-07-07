<?php
require_once '../../connectDB.php';

if(isset($_POST['spesifikasi'])) {
	$kegiatan = $fasilitas = '';
	$nKegiatanPost = $nFasilitasPost = 0;
	$masjid = NULL;
	if(isset($_POST['spesifikasi']['kegiatan'])) {
		$kegiatanPost = $_POST['spesifikasi']['kegiatan'];
		$nKegiatanPost = count($kegiatanPost);
		$filter0 = querySelect(
			'distinct masjid.*, wilayah.*',
			'masjid join wilayah on masjid.id_wilayah=wilayah.id_wilayah join kegiatan_masjid on masjid.id_masjid=kegiatan_masjid.id_masjid',
			"kegiatan_masjid.id_kegiatan='$kegiatanPost[0]' order by masjid.id_masjid asc", NULL);
		if(!empty($filter0)) {
			foreach($filter0 as $f) {
				$filter[$f['id_masjid']] = $f;
			}
			if($nKegiatanPost > 1) {
                            for($i=1;$i<$nKegiatanPost;$i++) {
                                foreach($filter as $f) {
                                        $filterMasjid = querySelect(
                                                'distinct masjid.*, wilayah.*',
                                                'masjid join wilayah on masjid.id_wilayah=wilayah.id_wilayah join kegiatan_masjid on masjid.id_masjid=kegiatan_masjid.id_masjid',
                                                "kegiatan_masjid.id_kegiatan='$kegiatanPost[$i]' and masjid.id_masjid='$f[id_masjid]' order by masjid.id_masjid asc", NULL);
                                        if(!empty($filterMasjid)) {
                                                foreach($filterMasjid as $fm) {
                                                        $masjid[$f['id_masjid']] = $fm;
                                                }
                                        } else {
                                                unset($filter[$f['id_masjid']]);
                                                unset($masjid[$f['id_masjid']]);
                                        }
                                }
                            }
			} else {
				foreach($filter as $f) {
					$masjid[$f['id_masjid']] = $f;
				}
			}
		}
	}
	if(isset($_POST['spesifikasi']['fasilitas'])) {
		$fasilitasPost = $_POST['spesifikasi']['fasilitas'];
		$nFasilitasPost = count($fasilitasPost);
		if($nKegiatanPost > 0 && !empty($masjid)) {
			for($i=0;$i<$nFasilitasPost;$i++) {
				foreach($masjid as $m) {
					$filterMasjid = querySelect(
						'distinct masjid.*, wilayah.*',
						'masjid join wilayah on masjid.id_wilayah=wilayah.id_wilayah join fasilitas_masjid on masjid.id_masjid=fasilitas_masjid.id_masjid',
						"fasilitas_masjid.id_fasilitas='$fasilitasPost[$i]' and masjid.id_masjid='$m[id_masjid]' order by masjid.id_masjid asc", NULL);
					if(!empty($filterMasjid)) {
						foreach($filterMasjid as $fm) {
							$masjid[$m['id_masjid']] = $fm;
						}
					} else {
						unset($masjid[$m['id_masjid']]);
					}
				}
			}
		} else {
			if($nKegiatanPost == 0) {
				$filter0 = querySelect(
					'distinct masjid.*, wilayah.*',
					'masjid join wilayah on masjid.id_wilayah=wilayah.id_wilayah join fasilitas_masjid on masjid.id_masjid=fasilitas_masjid.id_masjid',
					"fasilitas_masjid.id_fasilitas='$fasilitasPost[0]' order by masjid.id_masjid asc", NULL);
				if(!empty($filter0)) {
					foreach($filter0 as $f) {
						$filter[$f['id_masjid']] = $f;
					}
					if($nFasilitasPost > 1) {
						for($i=1;$i<$nFasilitasPost;$i++) {
							foreach($filter as $f) {
								$filterMasjid = querySelect(
									'distinct masjid.*, wilayah.*',
									'masjid join wilayah on masjid.id_wilayah=wilayah.id_wilayah join fasilitas_masjid on masjid.id_masjid=fasilitas_masjid.id_masjid',
									"fasilitas_masjid.id_fasilitas='$fasilitasPost[$i]' and masjid.id_masjid='$f[id_masjid]' order by masjid.id_masjid asc", NULL);
								if(!empty($filterMasjid)) {
									foreach($filterMasjid as $fm) {
										$masjid[$f['id_masjid']] = $fm;
									}
								} else {
									unset($filter[$f['id_masjid']]);
									unset($masjid[$f['id_masjid']]);
								}
							}
						}
					} else {
						foreach($filter as $f) {
							$masjid[$f['id_masjid']] = $f;
						}
					}
				}
			}
		}
	}
	
	$dataMasjid = '';
	if(!empty($masjid)) {
		$nMasjid = count($masjid);
		$i = 0;
		foreach($masjid as $m) {
			$dataMasjid .= '<div class="kotak-kanan box span-12" '.($i == ($nMasjid-1) ? 'style="margin-bottom:25px;"' : '').'>
				<div class="radius box span-12">
					<div class="gambar box span-2">
						<img src="'.$m['foto'].'">
					</div>
					<div class="box span-10">
						<div class="keterangan box span-5">
							<div class="box span-12">
								<table>
									<tr>
										<td>Nama masjid</td>
										<td>&nbsp;:&nbsp;</td>
										<td>'.$m['nama_masjid'].'</td>
									</tr>
									<tr>
										<td>Alamat</td>
										<td>&nbsp;:&nbsp;</td>
										<td>'.$m['alamat'].'</td>
									</tr>
									<tr>
										<td>No.Telepon</td>
										<td>&nbsp;:&nbsp;</td>
										<td>'.$m['no_telepon'].'</td>
									</tr>
									<tr>
										<td>Wilayah</td>
										<td>&nbsp;:&nbsp;</td>
										<td>'.$m['nama_wilayah'].'</td>
									</tr>
								</table>
							</div>
							<div class="box span-12">
								<a class="lengkap lengkap-block lengkap-lg lengkap-inverse" href="masjid.php?id_masjid='.$m['id_masjid'].'">Selengkapnya</a>
							</div>
						</div>';
			$kegiatan = querySelect('*', 'kegiatan join kegiatan_masjid on kegiatan.id_kegiatan=kegiatan_masjid.id_kegiatan', "kegiatan_masjid.id_masjid='$m[id_masjid]'", NULL);
			if(!empty($kegiatan)) {
				$nKegiatan = count($kegiatan);
				$kegiatanMasjid = '';
				for($j=0;$j<$nKegiatan;$j++) {
					$kegiatanMasjid .= $kegiatan[$j]['nama'].($j < ($nKegiatan-1) ? ', ' : '');
				}
			} else {
				$kegiatanMasjid = 'Belum ada kegiatan untuk masjid '.$m['nama_masjid'];
			}
			$fasilitas = querySelect('*', 'fasilitas join fasilitas_masjid on fasilitas.id_fasilitas=fasilitas_masjid.id_fasilitas', "fasilitas_masjid.id_masjid='$m[id_masjid]'", NULL);
			if(!empty($fasilitas)) {
				$nFasilitas = count($fasilitas);
				$fasilitasMasjid = '';
				for($j=0;$j<$nFasilitas;$j++) {
					$fasilitasMasjid .= $fasilitas[$j]['nama'].($j < ($nFasilitas-1) ? ', ' : '');
				}
			} else {
				$fasilitasMasjid = 'Belum ada fasilitas untuk masjid '.$m['nama_masjid'];
			}
			$dataMasjid .= '<div class="deskripsi box span-7">
							<table>
								<tr>
									<td class="sub-deskripsi top">Kegiatan</td>
									<td class="sub-deskripsi top">&nbsp;:&nbsp;</td>
									<td class="isi">'.$kegiatanMasjid.'.</td>
								</tr>
								<tr>
									<td class="sub-deskripsi top">Fasilitas</td>
									<td class="sub-deskripsi top">&nbsp;:&nbsp;</td>
									<td class="isi">'.$fasilitasMasjid.'.</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>';
			++$i;
		}
	}
	echo $dataMasjid;
}
?>