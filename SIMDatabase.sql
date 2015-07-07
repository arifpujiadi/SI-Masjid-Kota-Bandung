-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2015 at 12:54 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simasjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `angkot`
--

CREATE TABLE IF NOT EXISTS `angkot` (
`id_angkot` int(6) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `foto_angkot` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `angkot`
--

INSERT INTO `angkot` (`id_angkot`, `jurusan`, `warna`, `foto_angkot`) VALUES
(1, 'Abd. Muis - Cicaheum', 'Hijau - Kuning', 'http://localhost/SIMasjid/View/img/Angkot/angkot_1.JPG'),
(2, 'Abd. Muis - Dago', 'Hjau - Oranye', 'http://localhost/SIMasjid/View/img/Angkot/angkot_2.JPG'),
(3, 'Abd. Muis - Ledeng', 'Hijau - Biru', 'http://localhost/SIMasjid/View/img/Angkot/angkot_3.JPG'),
(4, 'Elang - Abd. Muis', 'Oranye - Strip putih - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_4.JPG'),
(5, 'Cicaheum - Ledeng', 'Hijau - Hitam', 'http://localhost/SIMasjid/View/img/Angkot/angkot_5.JPG'),
(6, 'Cicaheum - Ciroyom', 'Hijau - Strip oranye - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_6.JPG'),
(7, 'Cicaheum - Ciwastra', 'Coklat - Strip putih - Coklat', 'http://localhost/SIMasjid/View/img/Angkot/angkot_7.JPG'),
(8, 'Cicaheum - Cibaduyut', 'Merah - Strip putih - Merah', 'http://localhost/SIMasjid/View/img/Angkot/angkot_8.JPG'),
(9, 'St. Hall - Dago', 'Hijau - Strip oranye - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_9.JPG'),
(10, 'St. Hall - Sd. Serang', 'Hijau - Strip kuning - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_10.JPG'),
(11, 'St. Hall - Ciumbuleuit ', 'Hijau - Biru', 'http://localhost/SIMasjid/View/img/Angkot/angkot_11.JPG'),
(12, 'St. Hall - Gede Bage', 'Hijau muda - Strip oranye - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_12.JPG'),
(13, 'St. Hall - Sarijadi', 'Biru muda - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_13.JPG'),
(14, 'St. Hall - Gunung batu', 'Biru muda - Strip oranye - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_14.JPG'),
(15, 'Ledeng - Margahayu', 'Biru - Strip kuning - Biru', 'http://localhost/SIMasjid/View/img/Angkot/angkot_15.JPG'),
(16, 'Dago - Riung bandung', 'Putih - Strip kuning - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_16.JPG'),
(17, 'Dago - Pasar caringin', 'Oranye - Putih - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_17.JPG'),
(18, 'Panghegar - Dipati ukur', 'Putih - Kuning - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_18.JPG'),
(19, 'Ciroyom - Sarijadi', 'Hijau - Strip putih - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_19.JPG'),
(20, 'Ciroyom - Bumi asri', 'Hijau - Strip putih - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_20.JPG'),
(21, 'Ciroyom - Cikudapateuh', 'Kuning - Strip putih - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_21.JPG'),
(22, 'Sederhana - Cipagalo', 'Biru - Strip putih - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_22.JPG'),
(23, 'Sederhana - Cijerah', 'Hijau - Oranye - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_23.JPG'),
(24, 'Sederhana - Cimindi', 'Biru muda - Strip biru - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_24.JPG'),
(25, 'Ciwastra - Ujung berung', 'Putih', 'http://localhost/SIMasjid/View/img/Angkot/angkot_25.JPG'),
(26, 'Tegal lega - Cisitu', 'Ungu - Strip putih - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_26.JPG'),
(27, 'Ciwastra - Cijerah', 'Abu abu - Strip putih - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_27.JPG'),
(28, 'Elang - Gedebage - Ujung berung', 'Biru muda - Kuning - Hjau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_28.JPG'),
(29, 'Abd. Muis - Mengger', 'Oranye - Strip putih - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_29.JPG'),
(30, 'Cicadas - Elang', 'Merah - Strip putih - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_30.JPG'),
(31, 'Ciroyom - Antapani', 'Putih - Strip oranye - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_31.JPG'),
(32, 'Cicadas - Cibiru', 'Hijau - Strip biru - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_32.JPG'),
(33, 'Sekemirung - Panyileukan', 'Merah muda - Strip putih - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_33.JPG'),
(34, 'Sadang serang - Caringin', 'Biru muda - Strip kuning - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_34.JPG'),
(35, 'Cibaduyut - Karangsetra', 'Kuning - Strip putih - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_35.JPG'),
(36, 'Cibogo - Elang', 'Biru muda - Strip biru - Hijau', 'http://localhost/SIMasjid/View/img/Angkot/angkot_36.JPG'),
(37, 'Gegerkalong - Sukamulya', 'Hijau muda', 'http://localhost/SIMasjid/View/img/Angkot/angkot_37.JPG'),
(38, 'Gegerkalong - Sarijadi', 'Kuning', 'http://localhost/SIMasjid/View/img/Angkot/angkot_38.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `berita_masjid`
--

CREATE TABLE IF NOT EXISTS `berita_masjid` (
`id_berita_masjid` int(6) NOT NULL,
  `id_masjid` int(6) NOT NULL,
  `jenis_admin` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `isi_berita` text NOT NULL,
  `nama_file` varchar(200) DEFAULT NULL,
  `alamat_file` varchar(200) DEFAULT NULL,
  `tanggal_upload` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `berita_masjid`
--

INSERT INTO `berita_masjid` (`id_berita_masjid`, `id_masjid`, `jenis_admin`, `judul`, `gambar`, `isi_berita`, `nama_file`, `alamat_file`, `tanggal_upload`) VALUES
(1, 2, 'Masjid Raya Cipaganti', 'Pemenang Raya Cipaganti Fair', 'http://localhost/SIMasjid/View/img/Upload/beritaMasjid/_FBM_Raya Cipaganti_2_1.jpeg', 'Berdasarkan penilain tim juri Raya Cipaganti Fair, berikut adalah daftar pemenang rangkain lomba Raya Cipaganti Fair Kementerian Keuangan. Kami mengucapkan selamat kepada para juara, semoga kegiatan ini bisa semakin memompa semangat kita untuk terus berkontibrusi dalam mensyiarkan Islam sesuai kapasitas kita masing-masing.<br />\r\n<br />\r\nKami juga mengucapkan terima kasih kepada seluruh peserta yang telah berkontribusi memeriahkan rangkain acara Raya Cipaganti Fair. Tak lupa, Kami juga memohon maaf yang sebesar-besarnya atas banyaknya kekurangan dalam penyelenggaraan acara ini, semoga di tahun yang akan datang kegiatan Raya Cipaganti Fair bisa berjalan dengan lebih semarak, lebih lancar dan lebih baik lagi.<br />\r\n<br />\r\nPara pemenang lomba diharapkan kehadirannya dalam acara tarhib Ramadhan sekaligus penutupan Raya Cipaganti Fair dan penyerahan piala kepada para pemenang lomba yang Insya Allah akan dilaksanakan pada hari Kamis, 28 Juli 2011 di Masjid Raya Cipaganti, Kantor Pusat Kementerian Keuangan. Bagi yang berhalangan harap menghubungi contact person lomba 081282929008', 'Daftar Pemenang Raya Cipaganti Fair.pdf', 'http://localhost/SIMasjid/View/img/Upload/fileBerita/FileBerita_Raya Cipaganti_2_1.pdf', '2015-05-04 09:42:33'),
(2, 3, 'Masjid Istiqamah', ' Bakti Sosial Peduli Banjir Yayasan Masjid Istiqamah', 'http://localhost/SIMasjid/View/img/Upload/beritaMasjid/_FBM_Istiqamah_3_2.jpeg', ' Sebagai wujud kepedulian kepada sesama atas musibah banjir yang menimpa sebagian warga Bandung, Yayasan Masjid Istiqamah mengadakan kegiatan bakti sosial bagi warga yang dilanda banjir .<br />\r\n            Salah satu lokasi yang dikunjungi untuk menjadi tujuan penyaluran bantuan adalah daerah Dayeuh Kolot. Penyaluran bantuan di area ini dilaksanakan pada tanggal 5 Mei 2015.<br />\r\n              Sampai hari ini air masih menggenangi rumah rumah warga. Pelayanan yang diberikan dalam bakti sosial ini berupa bantuan sembako, air mineral, susu, biskuit, peralatan mandi, minyak  kayu putih dan lainnya.<br />\r\n<br />\r\n       Team utusan Yayasan Masjid Istiqamah berangkat dari Masjid Istiqamah sekitar pukul 09.15. Ada 4 buah mobil yang membawa team dari Masjid Istiqamah beserta bantuan logistik yang diamanahkan warga jamaah kepada Yayasan Masjid Istiqamah  untuk disalurkan. Alhamdulillah amanah akhirnya tertunaikan dan team kembali ke Masjid pada pukul sekitar jam 15.20.', '', '', '2015-05-04 09:53:47'),
(3, 5, 'Masjid Agung Bandung', 'Pengumuman Kajian Berbahasa Melayu / Indonesia Di Masjid Nabawi Musim Haji Tahun 1436 H / 2015 M', 'http://localhost/SIMasjid/View/img/Upload/beritaMasjid/_FBM_Agung Bandung_5_3.jpeg', 'Alhamdulillah, dengan izin Allah pada tahun ini kita bisa menemui kembali musim haji.<br />\r\n<br />\r\nSebagaimana tahun kemarin, Insya Allaah akan ada ceramah/kajian berbahasa Melayu di Masjid Nabawi. Kajian ini merupakan salah satu bentuk pelayanan Kerajaan Saudi Arabia kepada para jamaah haji.<br />\r\n<br />\r\nDan pada musim haji tahun ini kajian berbahasa Melayu akan diisi oleh:<br />\r\n<br />\r\n1. Ustadz Firanda Andirja, MA<br />\r\n2. Ustadz Abdullah Roy, MA<br />\r\n<br />\r\nKeduanya adalah mahasiswa pasca sarjana di Universitas Islam Madinah, Kuliah Dakwah, Jurusan Aqidah.<br />\r\n<br />\r\nKajian berbahasa Melayu musim haji tahun 1436 H/2015 M sudah dimulai sejak hari Ahad, 5 Dzulqoâ€™dah 1435 / 31 Agustus 2015 M, dengan jadwal sebagai berikut:<br />\r\n<br />\r\n1. Ustadz Abdullah Roy, MA<br />\r\nTempat: Pintu Badr (Pintu 19 sekitar 20 meter ke depan sebelah kiri)<br />\r\n<br />\r\nWaktu: Setiap Hari Setelah Shalat Shubuh (kajian berlangsung kurang lebih satu jam ditambah sesi tanya jawab)<br />\r\n<br />\r\n2. Ustadz Firanda Andirja, MA<br />\r\n(Jadwal menyusul setelah kedatangan beliau dari Indonesia)<br />\r\n<br />\r\nDemikian semoga pengumuman ini bisa disampaikan kepada para jamaah haji yang akan berangkat tahun ini, sehingga bisa mengambil manfaat lebih banyak selama di Madinah dan meraih pahala menuntut ilmu di Masjid Nabawi.', '', '', '2015-05-04 10:20:08'),
(4, 2, 'Masjid Raya Cipaganti', 'Pendaftaran Sekolah Pra Nikah dan Kursus Bahasa Arab Raya Cipaganti Telah Dibuka', 'http://localhost/SIMasjid/View/img/Upload/beritaMasjid/_FBM_Raya Cipaganti_2_4.jpeg', 'Bidang Dakwah Raya Cipaganti terus berupaya memenuhi kebutuhan jemaah lewat program-program unggulannya. Salah satunya, yakni program Sekolah Pra Nikah (SPN). Bagi jemaah yang membutuhkan pengetahuan untuk menjalani rumah tangga, dapat mengikuti SPN Angkatan 24. Di sini peserta bisa belajar langsung perihal ilmu-ilmu masa pra-nikah dan pasca nikah.<br />\r\n<br />\r\nMateri yang dibawakan cukup lengkap. Di antaranya, Taâ€™aruf, Motivasi Menikah, Mengenal Karakter Diri dan Pasangan, Problematika Rumah Tangga, Seks dan Kesehatan Alat Reproduksi, Fiqih Thaharah, Manajemen keuangan, dan Menikah Menurut Hukum Negara dan Syariat Islam. Pendaftaran kelas SPN sendiri sudah dibuka, dan akan dimulai pada 10 Mei mendatang.<br />\r\n<br />\r\nâ€œJadi yang nikah maupun yang belum sudah punya bekal yang matang dan bisa diaplikasikan walaupun teori dengan prakteknya beda banget,â€ tutur Yeni Fikriyah selaku Support System Bidang Dakwah, Kamis (30/4).<br />\r\n<br />\r\nBidang Dakwah pun memiliki program-program lain. Salah satunya, Kursus Bahasa Arab yang kini telah mencapai Angkatan ke-22. Kursus ini ditujukan bagi mereka yang ingin menguasai Bahasa Arab untuk memperdalam pemahaman Al-Quran atau sekadar ingin bisa bercakap-cakap. Pendaftarannya telah dibuka dari 24 April lalu sampai dengan 27 Mei yang akan datang.<br />\r\n<br />\r\nAda 3 level dalam Kursus Bahasa Arab Salman. Tujuannya, untuk mengetahui sejauh mana kemampuan para peserta.<br />\r\n<br />\r\nâ€œYa setidaknya disini kami berharap para peserta bisa berbahasa arab walaupun cuma bilang selamat pagi dan siang. Namun kalau diterapkan secara terus menerus mudah-mudahan bisa terbiasa bercakap bahasa arab,â€ harap Yeni.<br />\r\n<br />\r\nUntuk pendaftaran SPN dan Kursus Bahasa Arab, Anda bisa menghubungi Contact Person sekretariat Bidang Dakwah di nomor 081394643729. ', '', '', '2015-05-04 10:31:27'),
(5, 3, 'Masjid Istiqamah', 'MABIT Bersama Ustadz Ahmad Rofiqi', 'http://localhost/SIMasjid/View/img/Upload/beritaMasjid/_FBM_Istiqamah_3_5.jpeg', 'Malam Bina Iman dan Taqwa (MABIT) Ashabul Quran pada Jumat (1/5) dihadiri oleh Ustadz Ahmad Rofiqi,Lc.. MABIT bertema â€œKeseimbangan Ruhiyah para Pejuang Dakwahâ€.MABIT ini rutin dilaksanakan setiap hari Jumâ€™at di minggu pertama setiap bulannya. MABIT terbuka untuk umum, khususnya bagi para penerima beasiswa Istiqamah.', '', '', '2015-05-04 10:36:52'),
(6, 40, 'Masjid Al Ukhuwwah', 'Masjid Al Ukhuwwah mengadakan lomba dakwah dengan tema ''''wanita surga''''', 'http://localhost/SIMasjid/View/img/Upload/beritaMasjid/_FBM_Al Ukhuwwah_40_6.jpeg', 'Masjid Al Ukhuwwah mengadakan lomba dakwah dengan tema ''''wanita surga'''' dalam rangka hari kartini. Peserta adalah para siswa dan siswi SMP (Sekolah Menengah Pertama) yang berada di kota bandung yang berusia 7-10 tahun.<br />\r\n<br />\r\nPara peserta harus menyiapkan segera isi dakwah sesuai tema lomba karena TOTAL HADIAH JUTAAN RUPIAH menanti! Buktikan bahwa generasi muda berbakat dan bertalenta dalam berdakwah.<br />\r\n<br />\r\nHADIAH LOMBA<br />\r\nJuara I 	: Rp.1.000.000,00 (satu juta)<br />\r\nJuara II 	: Rp.500.000,00 (lima ratus ribu)<br />\r\nJuara III 	: Rp.250.000,00 (dua ratus lima puluh ribu)<br />\r\n<br />\r\nKETENTUAN LOMBA<br />\r\nPeserta mendaftarkan diri sebelum hari lomba dimulai dengan biaya administrasi sebesar Rp.50.000. Dakwah akan dinilai oleh juri, dan keputusan dari juri tidak dapat diganggu gugat.<br />\r\n<br />\r\nJADWAL<br />\r\nHari 	: 	Rabu<br />\r\nTanggal : 	16 April 2014<br />\r\nJam 	: 	09.00 - 12.00<br />\r\nTempat 	: 	Masjid Al Ukhuwwah', 'Formulir pendaftaran lomba.pdf', 'http://localhost/SIMasjid/View/img/Upload/fileBerita/FileBerita_Al Ukhuwwah_40_6.pdf', '2015-05-28 09:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `berita_umum`
--

CREATE TABLE IF NOT EXISTS `berita_umum` (
`id_berita_umum` int(6) NOT NULL,
  `id_user` int(6) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `isi_berita` text NOT NULL,
  `editor` varchar(200) DEFAULT NULL,
  `sumber` varchar(200) DEFAULT NULL,
  `link` varchar(500) NOT NULL,
  `tanggal_upload` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `berita_umum`
--

INSERT INTO `berita_umum` (`id_berita_umum`, `id_user`, `judul`, `gambar`, `isi_berita`, `editor`, `sumber`, `link`, `tanggal_upload`) VALUES
(1, 1, 'Resensi Buku : Sejarah Para Penguasa Islam, Karya Imam As Suyuthi', 'http://localhost/SIMasjid/View/img/Upload/beritaUmum/_FBU_BeritaUmum_1.jpeg', '                                            Zaman terus berputar , peristiwa sejarah akan berulang, tempat dan situasinya yang berbeda. Putaran zaman mempergilirkan antaran kebaikan dan keburukan. Dan kondisi suatu zaman akan sangat dipengaruhi oleh siapa yang menjadi pemimpinnya saat itu. Hal ini dapat kita saksikan pada perjalanan umat Islam dari semenjak masa kenabian, masa khulafaâ€™urrasyidin serta masa kedinastian Bani Umayyah dan Bani Abbasiyah.<br />\r\n<br />\r\nKekhilafahan mengalami masa keemasan pada masa-masa khulafaâ€™urrasyidin terutama pada masa Khalifah Abu bakar, Umar dan setengah dari masa kekhilafahan Utsman bin Affan. Setelah berakhirnya masa khulafaâ€™urrasyidin, kekhilafahan berpindah secara turun temurun, adakalanya berada di tangan orang yang zhalim dan durhaka.<br />\r\n<br />\r\nNamun bagaimanapun kondisi mereka  tetap lebih baik dibanding dengan masa pasca kejatuhan khilafah.<br />\r\n<br />\r\nImam As-Suyuthi, seorang ulama besar yang hidup antara tahun 849-911 H, mengungkap perikehidupan para khalifah (penguasa) berdasarkan periwayatan yang terpercaya dan komentar-komentar para ulama yang langsung menjadi pelaku sejarah. Karya beliau  merupakan warisan yang sangat berharga karena kaya dengan pelajaran yang mendalam dan menjadi rujukan sepanjang zaman bagi umat yang ingin memahami sejarah para penguasa pendahulunya.<br />\r\n<br />\r\nJudul: Tarikh Khulafa<br />\r\n<br />\r\nPenulis: Imam As-Suyuthi<br />\r\n<br />\r\nCover:Hard Cover<br />\r\n<br />\r\nIsi:593 hlm<br />\r\n<br />\r\nUkuran:16 X 24.5 cm<br />\r\n<br />\r\nBerat:1000 gr<br />\r\n<br />\r\nHarga:Rp 100.000,00 (Belum termasuk ongkos kirim)<br />\r\n<br />\r\nUntuk pemesanan hubungi atau sms/email dengan dituliskan nama, alamat dan jumlah pemesanan ke: 085811922988 email : marketing@eramuslim.com                                          ', '-', 'Eramuslim', 'http://www.eramuslim.com/resensi-buku/resensi-buku-sejarah-para-penguasa-islam-karya-imam-as-suyuthi.htm#.VUGHZJMZz7A', '2015-04-30 03:47:51'),
(2, 1, 'Zionis-Israel Akhirnya Bolehkan Bahan Bangunan Masuk Gaza', 'http://localhost/SIMasjid/View/img/Upload/beritaUmum/_FBU_BeritaUmum_2.jpeg', 'Zionis-Israel akhirnya mengizinkan 14 ribu ton bahan bangunan masuk ke dalam wilayah perang Gaza. Kementerian Pertahanan menyebut ini pengiriman tunggal terbesar sejak berakhirnya konflik Juli-Agustus di wilayah tersebut. Seperti diberitakan Al Arabiya Kamis (30/4), Badan Koordinasi Kebijakan Pemerintah Zionis-Israel di Wilayah Palestina COGAT mengatakan, 354 truk melewati selatan jalur Gaza. Truk tersebut bertuliskan â€˜Bahan Bangunanâ€™.<br />\r\n<br />\r\nDi bawah blokade Zionis di Gaza delapan tahun ini, masuknya semen dan besi sebagian besar telah dilarang. Negara Yahudi takut bahan tersebut bisa digunakan oleh militan Palestina untuk membuat senjata dan membangun serangan terowongan. Tapi, masyarakat internasional memperingatkan konflik lain akan menjulang bila tanpa rekonstruksi serius di wilayah pesisir. Di wilayah tersebut, Zionis-Israel membom dan menghancurkan lebih dari 100 ribu rumah selama perang 50 hari.<br />\r\n<br />\r\nBerdasarkan data dari PBB, 100 ribu warga Gaza merupakan tunawisma sejak perang musim panas lalu. Perang tersebut juga menewaskan sekitar 2.200 warga Palestina dan 73 orang Zionis-Israel.', '-', 'Eramuslim', 'http://www.eramuslim.com/berita/palestina/zionis-israel-akhirnya-bolehkan-bahan-bangunan-masuk-gaza.htm#.VUGJI5MZz7A', '2015-04-30 03:47:20'),
(3, 1, 'Tentara Israel Kawal Penyerbuan Pemukim Yahudi ke Al-Khalil', 'http://localhost/SIMasjid/View/img/Upload/beritaUmum/_FBU_BeritaUmum_3.jpeg', 'RATUSAN pemukim Yahudi menyerbu Desa Yatta, Al-Khalil di bawah perlindungan dari tentara Israel. Sementara itu, bentrokan pun terjadi di wilayah Tariq ibn Ziyad, yang merupakan perbatasan antara kawasan tentara Israel dengan pinggiran kota Al-Khalil.<br />\r\n<br />\r\nWarga setempat mengatakan kepada PIC bahwa ratusan pemukim Yahudi menyerbu kota Yatta untuk melakukan ritual Talmud dalam provokasi terang-terangan kepada warga Palestina. Peristiwa tersebut membuat panik kalangan perempuan dan anak-anak.<br />\r\n<br />\r\nTentara Israel menutup akses masuk ke kota tersebut sejak Rabu (29/4/2015) dalam rangka untuk membuka jalan bagi pemukim Yahudi yang akan melaksanakan pawai.<br />\r\n<br />\r\nSementara itu, tentara Israel menembakkan gas air mata di sebuah sekolah menengah di Tariq ibn Ziyad, Al-Khalil, di mana bentrokan itu berlangsung. ', 'Hanisa Rila', 'Islampost', 'https://www.islampos.com/tentara-israel-kawal-penyerbuan-pemukim-yahudi-ke-al-khalil-180529/', '2015-04-30 03:51:57'),
(4, 1, 'Gadis Filipina: Ketenangan Suara Adzan Mendamaikan Hati, Saya Pilih Islam', 'http://localhost/SIMasjid/View/img/Upload/beritaUmum/_FBU_BeritaUmum_4.jpeg', '                                            PERJALANANNYA dimulai saat ia bekerja di Saudi, namun awal mula mendapatkan hidayah setelah mendengar dan merasakan ketenangan saat adzan berkumandang di sebuah masjid dekat rumahnya di Manila.<br />\r\n<br />\r\nAisha Canlas, gadis Katolik asal Filipina bercerita tentang awal mula ia mengucapkan syahadat dan akhirnya memeluk Islam. Berikut kisahnya disarikan dari Onislam.net.<br />\r\n<br />\r\nâ€œSaya selalu memejamkan mata dan merasakan ketenangan dan kedamaian dalam hati meski saya tidak tahu arti kata-kata dalam azan itu,â€ kenang Canlas.<br />\r\n<br />\r\nâ€œNamun saat itu saya tidak terpikir untuk mencari tahu tentang Islam, apalagi memeluknya. Saya hanya suka mendengar suara adzan.â€<br />\r\n<br />\r\nCanlas kemudian memutuskan bekerja di Arab Saudi agar bisa memberikan masa depan yang lebih baik untuk keluarganya.<br />\r\n<br />\r\nâ€œSebelum saya datang ke sini (Riyadh), saya adalah seorang Katolik karena orang tua saya juga Katolik. Namun saya mulai belajar tentang budaya dan negara Saudi secara keseluruhan di sini, mulai dari bahasa hingga tentu saja agamanya. Saya penasaran tentang Islam.â€<br />\r\n<br />\r\nSampai kemudian Canlas menemukan sebuah madrasah di lingkungan dia bekerja. Dia memutuskan untuk ikut mendaftarkan diri di madrasah itu dan mulai mengikuti pelajarannya bersama dua temannya tepat pada 15 Januari 2008.<br />\r\n<br />\r\nâ€œWaktu pertama masuk, saya jadi pusat perhatian. Selain karena anak baru, saya satu-satunya non-Muslim. Saya mendengarkan penjelasan tentang Islam, Al-Quran, Rasulullah dan Allah SWT.â€<br />\r\n<br />\r\nSejak saat itu, Canlas semakin memahami Islam dan mulai berpikir untuk menjadi bagiannya. Namun sebelum benar-benar menjadi Muslim, Canlas minta izin kepada ibunya di Filipina.<br />\r\n<br />\r\nâ€œAlhmadulillah, ibu tidak keberatan. Ibu hanya takut jika saya sudah jadi Muslim, saya akan melupakan orang tua dan saudara.â€<br />\r\n<br />\r\nCanlas mengatakan kepada ibunya bahwa Islam mengajarkan umatnya untuk selalu menghormati orang tua, terutama ibu.<br />\r\n<br />\r\nPada 24 Januari 2008 Canlas benar-benar mengucapkan syahadat di hadapan guru dan siswa-siswa madrasah lainnya. Canlas tak mampu mengungkapkan perasaannya saat mengucapkan kalimat syahadat.<br />\r\n<br />\r\nâ€œYang saya tahu, setelah bersyahadat hati saya seperti terlepas dari berbagai beban yang sangat berat. Akhirnya, saya menemukan kedamaian yang saya cari selama hidup saya. Menjadi Muslim sungguh berbeda.â€<br />\r\n<br />\r\nCanlas patut berbahagia, karena tidak lama setelah menjadi mualaf, dia berkesempatan menunaikan umrah pada 5 Maret 2008. Canlas mengatakan umrah tersebut merupakan pengalaman yang spesial dan tak terlupakan.                                        ', 'Ratna Nera', 'Islampos', 'https://www.islampos.com/gadis-filipina-ketenangan-suara-adzan-mendamaikan-hati-saya-pilih-islam-179726/', '2015-04-30 03:55:08'),
(5, 1, 'Gubernur Jawa Barat Aher Khutbah Jumâ€™at dengan 3 Bahasa di Hadapan Para Kepala Negara Peserta KAA', 'http://localhost/SIMasjid/View/img/Upload/beritaUmum/_FBU_BeritaUmum_5.jpeg', 'Sejumlah pemimpin negara hadiri Peringatan Konferensi Asia Afrika (KAA) di Bandung, dan menunaikan solat Jumâ€™at, di Masjid Raya Bandung, Jumâ€™at (24/4/2015) siang.<br />\r\n<br />\r\nBertindak sebagai khotib dalam solat Jumâ€™at itu adalah Gubernur Jawa Barat Ahmad Heryawan, yang membacakan materi khotbahnya dalam tiga bahasa, yaitu Indonesia, Inggris, dan Arab.<br />\r\n<br />\r\nInti Khutbahnya, bahwa Konferensi Asia Afrika yang mengakangkat tema penolakan atas segala bentuk kolonialisme dan imperialisme telah berhasil dengan baik. Saat ini seluruh negara Asia Afrika telah berhasil mengusir penjajah dan meraih kemerdekannya.<br />\r\n<br />\r\nKecuali satu negara yaitu Palestina yang hingga kini masih terus berjuang untuk mendapatkan kemerdekaannya.<br />\r\n<br />\r\nâ€œAdalah kewajiban kemanusiaan bagi bangsa-bangsa Asia Afrika untuk terus mendorong dan membantu kemerdekaan bangsa Palestina,â€ katanya..<br />\r\n<br />\r\nMaka saat ini dan masa-masa ke depan, solidaritas tersebut harus terus digaungkan dan digelorakan dalam kerja sama untuk membangun bangsa-bangsa Asia Afrika menjadi bangsa yang kuat, maju, aman sejahtera, beribadah serta bertakwa kepada Allah Subhanahu wa Taâ€™ala.<br />\r\n<br />\r\nKarena sejatinya penghambaan kepada Allah Subhanahu wa Taâ€™ala akan terlaksana (tanpa banyak gangguan, red nm) manakala ada kesejahteraan dan rasa aman. <br />\r\n<br />\r\nPRESIDEN Joko Widodo (Jokowi) bersama sejumlah Wakil Presiden Jusuf Kalla dan sejumlah pemimpin negara yang hadir dalam Peringatan Konferensi Asia Afrika (KAA) di Bandung, menunaikan solat Jumâ€™at, di Masjid Raya Bandung, Jumâ€™at (24/4/2015) siang.<br />\r\n<br />\r\nPresiden Jokowi bersama Perdana Menteri (PM) Malaysia Najib Razak dan sejumlah delegasi peserta KTT Asia Afrika berjalan kaki sejauh 800 meter menuju masjid yang terletak kawasan Alun-Alun kota Bandung itu.<br />\r\n<br />\r\nBertindak sebagai khotib dalam solat Jumâ€™at itu adalah Gubernur Jawa Barat Ahmad Heryawan, yang membacakan materi khotbahnya dalam tiga bahasa, yaitu Indonesia, Inggris, dan Arab.<br />\r\n<br />\r\nDalam khotbahnya, Ahmad Heryawan atau yang akrab dipanggil Aher mengharapkan agar dengan peringatan ke-60 KAA ini negara-negara peserta KAA bisa semakin kompak satu sama lainnya.<br />\r\n<br />\r\nâ€œSolidaritas 60 tahun lalu telah terbukti menjadi bangsa yang merdeka. Maka ke depan harus digaungkan dan digelorakan untuk menjadi bangsa yang kuat iman dan bertaqwa pada Allah SWT,â€ ujar Aher.<br />\r\n<br />\r\nBangsa Asia Afrika yang beragama Islam, kata Aher, wajib menjunjung tinggi ikatan persaudaraan di antara sesama muslim yakni yakni semangat kebersamaan sesama insan manusia yakni Ukhuwah Insaniah dan Islamiyah.<br />\r\n<br />\r\nâ€œHarus bersatu jangan pecah-belah, ini saatnya kita hadirkan kekuatan, kepada Palestina terus berjuang untuk kemerdekaan, kewajiban kemanusiaan terus dorong kemerdekaan Palestina, digaungkan digelorakan jadi bangsa kuat,â€ ujar dia.', 'Ajijah', 'Hanimunkar', 'http://www.nahimunkar.com/gubernur-jawa-barat-aher-khutbah-jumat-dengan-3-bahasa-di-hadapan-para-kepala-negara-peserta-kaa/', '2015-04-30 04:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
`id_fasilitas` int(6) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama`) VALUES
(1, 'Gedung serba guna '),
(2, 'Kantin'),
(3, 'Klinik'),
(4, 'Koperasi'),
(5, 'Kursus'),
(6, 'Parkir kendaraan'),
(7, 'Perpustakaan'),
(8, 'TK'),
(9, 'Wifi');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_masjid`
--

CREATE TABLE IF NOT EXISTS `fasilitas_masjid` (
  `id_masjid` int(6) NOT NULL,
  `id_fasilitas` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas_masjid`
--

INSERT INTO `fasilitas_masjid` (`id_masjid`, `id_fasilitas`) VALUES
(3, 1),
(3, 3),
(3, 4),
(3, 5),
(3, 7),
(3, 8),
(3, 9),
(4, 1),
(4, 6),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 6),
(5, 9),
(7, 3),
(7, 4),
(7, 5),
(7, 6),
(10, 1),
(10, 5),
(10, 6),
(10, 7),
(11, 2),
(11, 3),
(11, 4),
(11, 5),
(11, 6),
(11, 7),
(2, 1),
(2, 3),
(2, 4),
(2, 5),
(2, 8),
(8, 1),
(8, 3),
(8, 4),
(8, 6),
(6, 3),
(6, 5),
(6, 6),
(13, 5),
(13, 6),
(13, 8),
(14, 5),
(14, 8),
(14, 9),
(16, 2),
(16, 5),
(16, 6),
(16, 7),
(16, 9),
(15, 6),
(15, 7),
(15, 9),
(17, 2),
(17, 3),
(17, 5),
(17, 6),
(20, 1),
(20, 2),
(20, 5),
(20, 6),
(21, 2),
(21, 3),
(21, 4),
(22, 5),
(22, 7),
(22, 9),
(23, 1),
(23, 2),
(23, 4),
(23, 6),
(25, 5),
(25, 8),
(24, 2),
(24, 4),
(24, 5),
(26, 1),
(26, 2),
(26, 6),
(27, 5),
(27, 6),
(27, 8),
(28, 2),
(28, 5),
(28, 6),
(28, 7),
(12, 4),
(29, 3),
(29, 5),
(29, 6),
(29, 7),
(29, 9),
(30, 2),
(30, 6),
(30, 9),
(31, 2),
(31, 4),
(31, 5),
(31, 6),
(18, 5),
(18, 9),
(9, 1),
(9, 2),
(9, 4),
(9, 7),
(9, 9),
(32, 5),
(32, 8),
(33, 1),
(33, 2),
(33, 5),
(33, 6),
(34, 1),
(34, 5),
(34, 6),
(35, 2),
(35, 6),
(35, 7),
(35, 9),
(36, 3),
(36, 4),
(36, 8),
(37, 4),
(37, 5),
(37, 6),
(37, 8),
(38, 1),
(38, 3),
(38, 6),
(38, 9),
(39, 1),
(39, 6),
(39, 7),
(40, 1),
(40, 2),
(40, 6);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
`id_file` int(6) NOT NULL,
  `id_masjid` int(6) NOT NULL,
  `nama_file` varchar(200) NOT NULL,
  `lokasi_file` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id_file`, `id_masjid`, `nama_file`, `lokasi_file`) VALUES
(1, 40, 'Permohonan peminjaman sarana dan prasarana.pdf', 'http://localhost/SIMasjid/View/img/Upload/file/Permohonan peminjaman sarana dan prasarana_Al Ukhuwwah40_0.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
`id_foto` int(6) NOT NULL,
  `id_masjid` int(6) NOT NULL,
  `judul_foto` varchar(200) DEFAULT NULL,
  `alamat_foto` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_foto`, `id_masjid`, `judul_foto`, `alamat_foto`) VALUES
(2, 2, 'Depan masjid', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_77.JPG'),
(4, 2, 'Gerbang pintu masuk', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_59.JPG'),
(5, 2, 'Pintu masuk utama', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_61.JPG'),
(6, 2, 'Kaligrafi pintu depan', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_65.JPG'),
(7, 2, 'Peresmian', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_68.JPG'),
(8, 2, 'Halaman depan', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_69.JPG'),
(9, 2, 'Pintu masuk', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_1.JPG'),
(10, 2, 'Bedug', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_4.JPG'),
(11, 2, 'Kaligrafi bedug', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_7.JPG'),
(12, 2, 'Balkon depan', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_16.JPG'),
(13, 2, 'Balkon depan', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_18.JPG'),
(14, 2, 'Tulisan pembangunan pertama', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_23.JPG'),
(15, 2, 'Bedug', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_25.JPG'),
(16, 2, 'Tiang penyangga', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_38.JPG'),
(17, 2, 'Hadist', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_39.JPG'),
(18, 2, 'Asmaul husnah', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_41.JPG'),
(19, 2, 'Dalam masjid', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_44.JPG'),
(20, 2, 'Lampu utama', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Raya Cipaganti_2_G_35.JPG'),
(21, 5, 'Taman bunga masjid', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Agung Bandung_5_140055_alunalun6.jpg'),
(22, 5, 'Ujung menara', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Agung Bandung_5_1010130b.jpg'),
(23, 5, 'Depan masjid', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Agung Bandung_5_20100820132141_masjidrayabandung2.jpg'),
(24, 5, 'Depan masjid malam', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Agung Bandung_5_a29tcGFzMl85LmpwZw==.jpg'),
(25, 5, 'Halaman depan', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Agung Bandung_5_ada.jpg'),
(26, 5, 'Menara masjid', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Agung Bandung_5_DSC00275.JPG'),
(27, 5, 'Pintu utama masjid', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Agung Bandung_5_hqdefault.jpg'),
(28, 5, 'Dalam masjid', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Agung Bandung_5_Masjid-raya-bandung-mihrab.jpg'),
(29, 5, 'Halaman depan', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Agung Bandung_5_taman-alun-alun-bandung-islamedia.jpg'),
(30, 5, 'Seluruh masjid', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Agung Bandung_5_wpid-img_175296654871791.jpeg'),
(31, 5, 'Halaman tampak atas ', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Agung Bandung_5_alun2.jpg'),
(32, 5, 'Halaman depan', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Agung Bandung_5_ALUN-ALUN-BANDUNG1.jpg'),
(33, 5, 'Sekitar masjid', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Agung Bandung_5_Alun-Alun-Kota-Bandung.jpg'),
(34, 5, 'Masjid tampak atas', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Agung Bandung_5_ini-wajah-baru-alun-alun-bandung-dari-ketinggian-keren-kan.jpg'),
(35, 40, 'depan Masjid', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Al Ukhuwwah_40_G_01.JPG'),
(36, 40, 'menara', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Al Ukhuwwah_40_G_02.JPG'),
(37, 40, '', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Al Ukhuwwah_40_G_03.JPG'),
(38, 40, '', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Al Ukhuwwah_40_G_04.JPG'),
(39, 40, '', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Al Ukhuwwah_40_G_05.JPG'),
(40, 40, '', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Al Ukhuwwah_40_G_06.JPG'),
(41, 40, '', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Al Ukhuwwah_40_G_07.JPG'),
(42, 40, '', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Al Ukhuwwah_40_G_08.JPG'),
(43, 40, '', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Al Ukhuwwah_40_G_09.JPG'),
(44, 40, '', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Al Ukhuwwah_40_G_10.JPG'),
(45, 40, '', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Al Ukhuwwah_40_G_11.JPG'),
(46, 40, '', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Al Ukhuwwah_40_G_12.JPG'),
(47, 40, '', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Al Ukhuwwah_40_G_13.JPG'),
(48, 40, '', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Al Ukhuwwah_40_G_14.JPG'),
(49, 40, '', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Al Ukhuwwah_40_G_15.JPG'),
(50, 40, '', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Al Ukhuwwah_40_G_16.JPG'),
(51, 40, '', 'http://localhost/SIMasjid/View/img/Upload/galeri/GP_Al Ukhuwwah_40_G_17.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
`id_kegiatan` int(6) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama`) VALUES
(1, 'Bakti sosial'),
(2, 'Haji'),
(3, 'Kultum'),
(4, 'Majlis taklim'),
(5, 'Pengajian'),
(6, 'Santunan');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_masjid`
--

CREATE TABLE IF NOT EXISTS `kegiatan_masjid` (
  `id_masjid` int(6) NOT NULL,
  `id_kegiatan` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_masjid`
--

INSERT INTO `kegiatan_masjid` (`id_masjid`, `id_kegiatan`) VALUES
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(4, 1),
(4, 5),
(4, 6),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(5, 6),
(7, 1),
(7, 3),
(7, 6),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(10, 5),
(11, 1),
(11, 2),
(11, 3),
(11, 4),
(11, 5),
(11, 6),
(2, 1),
(2, 2),
(2, 4),
(2, 6),
(8, 1),
(8, 2),
(8, 3),
(8, 4),
(8, 5),
(6, 1),
(6, 3),
(6, 4),
(6, 6),
(13, 1),
(13, 3),
(13, 6),
(14, 2),
(14, 3),
(14, 5),
(16, 1),
(16, 3),
(16, 4),
(16, 5),
(15, 1),
(15, 6),
(17, 1),
(17, 3),
(17, 6),
(20, 1),
(20, 3),
(20, 4),
(21, 1),
(21, 3),
(21, 4),
(22, 3),
(22, 5),
(22, 6),
(23, 3),
(23, 4),
(23, 5),
(25, 1),
(25, 3),
(25, 4),
(25, 5),
(24, 1),
(24, 2),
(24, 5),
(24, 6),
(26, 3),
(26, 4),
(26, 5),
(27, 3),
(27, 5),
(27, 6),
(28, 1),
(28, 5),
(28, 6),
(12, 3),
(12, 4),
(12, 5),
(29, 2),
(29, 3),
(29, 5),
(29, 6),
(30, 1),
(30, 5),
(30, 6),
(31, 2),
(31, 4),
(31, 5),
(31, 6),
(18, 1),
(18, 3),
(18, 5),
(18, 6),
(9, 1),
(9, 2),
(9, 3),
(9, 5),
(9, 6),
(32, 3),
(32, 4),
(32, 6),
(33, 1),
(33, 5),
(33, 6),
(34, 1),
(34, 5),
(35, 1),
(35, 3),
(35, 5),
(35, 6),
(36, 2),
(36, 3),
(36, 4),
(37, 3),
(37, 4),
(37, 5),
(38, 3),
(38, 5),
(38, 6),
(39, 3),
(39, 4),
(39, 6),
(40, 1),
(40, 2),
(40, 3),
(40, 5);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_rutin`
--

CREATE TABLE IF NOT EXISTS `kegiatan_rutin` (
`id_kegiatan_rutin` int(6) NOT NULL,
  `id_masjid` int(6) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `hari` varchar(200) NOT NULL,
  `jam_mulai` varchar(10) DEFAULT NULL,
  `jam_selesai` varchar(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `kegiatan_rutin`
--

INSERT INTO `kegiatan_rutin` (`id_kegiatan_rutin`, `id_masjid`, `nama`, `hari`, `jam_mulai`, `jam_selesai`) VALUES
(34, 3, 'Takhasus', 'Senin', '09.00', '11.00'),
(35, 3, 'Tafsier', 'Selasa', '08.00', '9.30'),
(36, 3, 'Tafsinu Al Quran', 'Kamis', '09.00', '11.15'),
(37, 3, 'Hadist', 'Jumat', '08.00', '09.30'),
(40, 4, '', '', '', ''),
(41, 5, '', '', '', ''),
(43, 7, '', '', '', ''),
(48, 10, '', '', '', ''),
(52, 11, '', '', '', ''),
(70, 2, 'TKA / TPA', 'Senin - Sabtu', '07.30', '11.00'),
(71, 2, 'MDA', 'Setiap hari', '18.00', '19.00'),
(72, 2, 'Masjlis taklim', 'Senin & Kamis', '09.00', '11.00'),
(75, 8, '', '', '', ''),
(81, 6, '', '', '', ''),
(83, 13, '', '', '', ''),
(84, 14, '', '', '', ''),
(85, 16, '', '', '', ''),
(86, 15, '', '', '', ''),
(87, 17, '', '', '', ''),
(91, 19, '', '', '', ''),
(97, 20, '', '', '', ''),
(98, 21, '', '', '', ''),
(100, 22, '', '', '', ''),
(101, 23, '', '', '', ''),
(102, 25, '', '', '', ''),
(103, 24, '', '', '', ''),
(105, 26, '', '', '', ''),
(106, 27, '', '', '', ''),
(108, 28, '', '', '', ''),
(109, 12, '', '', '', ''),
(111, 29, '', '', '', ''),
(112, 30, '', '', '', ''),
(113, 31, '', '', '', ''),
(114, 18, '', '', '', ''),
(118, 9, '', '', '', ''),
(120, 32, '', '', '', ''),
(121, 33, '', '', '', ''),
(122, 34, '', '', '', ''),
(123, 35, '', '', '', ''),
(124, 36, '', '', '', ''),
(125, 37, '', '', '', ''),
(127, 38, '', '', '', ''),
(128, 39, '', '', '', ''),
(129, 40, 'Kultum Ba''da Dzuhur', 'Senin s/d Kamis', '12.00', '12.300'),
(130, 40, 'Masjelis Ta''lim Muslimah', 'Selasa', '10.00', '11.00');

-- --------------------------------------------------------

--
-- Table structure for table `masjid`
--

CREATE TABLE IF NOT EXISTS `masjid` (
`id_masjid` int(6) NOT NULL,
  `id_user` int(6) NOT NULL,
  `id_wilayah` int(6) NOT NULL,
  `validasi` int(6) NOT NULL,
  `sertifikat` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nama_masjid` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `peresmian_bangunan` varchar(200) DEFAULT NULL,
  `luas_tanah` int(10) DEFAULT NULL,
  `luas_bangunan` int(10) DEFAULT NULL,
  `daya_tampung_dalam_masjid` int(10) DEFAULT NULL,
  `daya_tampung_luar_masjid` int(10) DEFAULT NULL,
  `deskripsi_masjid` text NOT NULL,
  `keunikan` text,
  `struktur_organisasi` varchar(200) DEFAULT NULL,
  `latitude` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `masjid`
--

INSERT INTO `masjid` (`id_masjid`, `id_user`, `id_wilayah`, `validasi`, `sertifikat`, `foto`, `nama_masjid`, `alamat`, `rt`, `rw`, `kecamatan`, `no_telepon`, `email`, `peresmian_bangunan`, `luas_tanah`, `luas_bangunan`, `daya_tampung_dalam_masjid`, `daya_tampung_luar_masjid`, `deskripsi_masjid`, `keunikan`, `struktur_organisasi`, `latitude`, `longitude`) VALUES
(2, 2, 1, 1, 'http://localhost/SIMasjid/View/img/Upload/sertifikat/_S_Raya Cipaganti2.jpeg', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Raya Cipaganti2.jpeg', 'Raya Cipaganti', 'Jl. Cipaganti No.85', '02', '09', 'Sukajadi', '2030124', 'RayaCipaganti@gmail.com', '27/2/1934', 2675, 650, 1000, 500, 'Berdirinya Masjid Kaum Cipaganti berawal dari kebutuhan untuk melaksanakan peribadatan di kawasan perumahan Cipaganti khususnya di kawasan Bandung Utara. Bahkan masjid ini merupakan masjid pertama yang didirikan pada pemukiman orang Eropa tempo dulu. Menurut cerita, masjid ini sering digunakan sebagai tempat atau pusat kegiatan umat Islam dan juga balai nikah atau istilah sundanya balai nyuncung bagi warga muslim di keresidenan Bojonegara dan sekitarnya. Yang akan melangsungkan akad nikahnya harus datang ke masjid ini. Bahkan masjid ini pernah dipakai sebagai markas pejuang dalam menentang penjajah, sehingga memiliki nilai sejarah tinggi dan juga gaya arsitektur yang cukup unik yang memberikan khazanah bentuk keragaman arsitektur masjid - masjid di Jawa.<br />\r\n<br />\r\nSeiring dengan perkembangan zaman dan perubahan umat Islam yang cukup besar, namun dengan tidak mengurangi nilai-nilai seni dan indetitas aslinya seperti halnya pertama kali didirikan, Masjid Kaum Cipaganti mengalami renovasi dan pengembangan yang terjadi pada tahun 1979 - 1988 yaitu penambahan ruang utama masjid yang terdapat di sebelah sisi utara dan sisi selatan. Adapun pengembangan ini dilakukan karena kebutuhan masyarakat serta jama''ah yang terus meningkat terutama pada waktu sembahyang Jum''at dan Iedul.', 'Merupakan masjid cagar budaya kelas A, merupakan masjid yang dilindungi oleh Disbudpar.', 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_SO_Raya Cipaganti2.jpeg', '-6.894628', '107.602280'),
(3, 3, 2, 1, 'http://localhost/SIMasjid/View/img/Upload/sertifikat/_S_Istiqamah3.jpeg', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Istiqamah3.jpeg', 'Istiqamah', 'Jl. Citarum No.1', '08', '08', 'Bandung Wetan', '4213165', 'Istiqamah@gmail.com', '5/10/1968', 5212, 0, 2000, 1000, 'Visi terwujudnya yayasan istiqamah badung adalah sebagai pusat ibadah dan Da''wah yang sesuai dengan Al-Quran dan As-Sunnah, terta terbangunnya generasi yang beriman dan bertaqwa, cerdas, berakhlakul karimah, menguasai ilmu dan teknologi menuju masyarakat islami.', 'Masjid Istiqamah tidak luput dari sejarah, marupakan masjid jamaah yang terbuka untuk umum.', 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_SO_Istiqamah3.jpeg', '-6.904729', '107.621730'),
(4, 4, 3, 1, 'http://localhost/SIMasjid/View/img/Upload/sertifikat/_S_Baitusy Syuhada4.jpeg', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Baitusy Syuhada4.jpeg', 'Baitusy Syuhada', 'Jl. Caringin', '01', '04', 'Babakan Ciparay', '561189', 'BSyuhada@gmail.com', '27/8/2010', 600, 450, 200, 100, 'Masjid Baitusy Syuhada merupakan sebuah masjid yang terletak di Bandung, Indonesia. Masjid ini dibangun pada tahun 2009 dan selesai pada tahun 2010. Bentuk masjid sekilas hanya seperti kubus besar laiknya bentuk bangunan Kubah di Arab Saudi. Dengan konsep ini, dari luar terlihat garis-garis hitam di sekujur dinding masjid. Masjid Baitusy Syuhada diresmikan pada 17 Ramadan 1431 Hijriah tepatnya 27 Agustus 2010 silam. ', 'Bangunannya unik, megah, dan kokoh. Beberapa bulan setelah dibangun, masjid yang memiliki arsitektur memukau ini langsung menyabet penghargaan bergengsi tingkat dunia.', 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_SO_Baitusy Syuhada4.jpeg', '-6.944610', '107.582124'),
(5, 5, 4, 1, 'http://localhost/SIMasjid/View/img/Upload/sertifikat/_S_Agung Bandung5.jpeg', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Agung Bandung5.jpeg', 'Agung Bandung', 'Jl. Dalem Kaum No. 14', '04', '02', 'Regol', '4240275', 'Agung@gmail.com', '4/6/ 2003', 23448, 9, 8000, 5000, 'Masjid Raya Bandung Provinsi Jawa Barat, yang dulu dikenal dengan nama Masjid Agung Bandung adalah masjid yang berada di Kota Bandung, Jawa Barat, Indonesia. Status masjid ini adalah sebagai masjid provinsi bagi Jawa Barat. Masjid ini pertama dibangun tahun 1810, dan sejak didirikannya, Masjid Agung telah mengalami delapan kali perombakan pada abad ke-19, kemudian lima kali pada abad 20 sampai akhirnya direnovasi lagi pada tahun 2001 sampai sampai peresmian Masjid Raya Bandung 4 Juni 2003 yang diresmikan oleh Gubernur Jabar saat itu, H.R. Nuriana. Masjid baru ini, yang bercorak Arab, menggantikan Masjid Agung yang lama, yang bercorak khas Sunda.<br />\r\n<br />\r\nMasjid Raya Bandung, seperti yang kita lihat sekarang, terdapat dua menara kembar di sisi kiri dan kanan masjid setinggi 81 meter yang selalu dibuka untuk umum setiap hari Sabtu dan Minggu. Atap masjid diganti dari atap joglo menjadi satu kubah besar pada atap tengah dan yang lebih kecil pada atap kiri-kanan masjid serta dinding masjid terbuat dari batu alam kualitas tinggi. Kini luas tanah keseluruhan masjid adalah 23.448 mÂ² dengan luas bangunan 8.575 mÂ² dan dapat menampung sekitar 13.000 jamaah.', 'Masjid baru ini, yang bercorak Arab, menggantikan Masjid Agung yang lama, yang bercorak khas Sunda. erdapat dua menara kembar di sisi kiri dan kanan masjid setinggi 81 meter yang selalu dibuka untuk umum setiap hari Sabtu dan Minggu. ', 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_SO_Agung Bandung5.jpeg', '-6.921754', '107.606366'),
(6, 6, 6, 1, 'http://localhost/SIMasjid/View/img/Upload/sertifikat/_S_Sabilul Muttaqin6.jpeg', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Sabilul Muttaqin6.jpeg', 'Sabilul Muttaqin', 'Jl. Sari Jati 2 No. 6', '07', '03', 'Margacinta', '7531044', 'SMuttaqin@gmail.com', '27/8/2010', 0, 0, 0, 0, 'Masjid Sabilul Muttaqin merupakan sebuah masjid yang terletak di Bandung, Indonesia. Masjid ini dibangun pada tahun 2009 dan selesai pada tahun 2010. Bentuk masjid sekilas hanya seperti kubus besar laiknya bentuk bangunan Kubah di Arab Saudi. Dengan konsep ini, dari luar terlihat garis-garis hitam di sekujur dinding masjid.<br />\r\n<br />\r\nMasjid Al-Irsyad diresmikan pada 17 Ramadan 1431 Hijriah tepatnya 27 Agustus 2010 silam. Bangunannya unik, megah, dan kokoh. Beberapa bulan setelah dibangun, masjid yang memiliki arsitektur memukau ini langsung menyabet penghargaan bergengsi tingkat dunia.', 'Dilihat dari kejauhan, akan menghadirkan lafaz Arab yang terbaca sebagai dua kalimat tauhid, Laailaha Ilallah Muhammad Rasulullah, yang artinya Tiada Tuhan selain Allah dan Muhammad adalah utusan Allah. Kekuatan desain Masjid Al-Irsyad tampak pada embedding teks kaligrafi Arab dengan jenis tulisan khat kufi. Bentuknya, dua kalimah tauhid yang melekat pada tiga sisi bangunan dalam bentuk susunan batu bata, yang dirancang sebagai kaligrafi tiga dimensi raksasa.', '', '-6.914612', '107.666865'),
(7, 7, 5, 1, 'http://localhost/SIMasjid/View/img/Upload/sertifikat/_S_Al Ittihad7.jpeg', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Al Ittihad7.jpeg', 'Al Ittihad', 'Jl.Sukagalih', '03', '07', 'Ujungberung', '61606566', 'al.Ittihad.pi@gmail.com', '//', 0, 0, 0, 0, 'Masjid Al Ittihad Jawa Barat didirikan pertama kali pada tahun 1950. Masjid Al Ittihad dibangun bersamaan dengan dipindahkannya pusat kota Bandung dari Krapyak, sekitar sepuluh kilometer selatan kota Bandung ke pusat kota sekarang. Masjid ini pada awalnya dibangun dengan bentuk bangunan panggung tradisional yang sederhana, bertiang kayu, berdinding anyaman bambu, beratap rumbia dan dilengkapi sebuah kolam besar sebagai tempat mengambil air wudhlu.<br />\r\n<br />\r\nSetahun setelah kebakaran, pada tahun 1826 dilakukan perombakkan terhadap bangunan masjid dengan mengganti dinding bilik bambu serta atapnya dengan bahan dari kayu. Perombakan dilakukan lagi tahun 1850 seiring pembangunan Jalan Groote Postweg (kini Jalan Asia Afrika). Masjid kecil tersebut mengalami perombakkan dan perluasan atas instruksi Bupati R.A Wiranatakusumah IV atap masjid diganti dengan genteng sedangkan didingnya diganti dengan tembok batu-bata.', 'Masjid Al Ittihad yang kini kita lihat merupakan hasil rancangan 4 orang perancang kondang dari Bandung masing masing adalah Ir. H. Keulman, Ir. H. Arie Atmadibrata, Ir. H. Nuâ€™man dan Prof. Dr. Slamet Wirasonjaya', 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_SO_Al Ittihad7.jpeg', '-6.892399', '107.592390'),
(8, 8, 1, 1, 'http://localhost/SIMasjid/View/img/Upload/sertifikat/_S_Al Furqan8.jpeg', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Al Furqan8.jpeg', 'Al Furqan', 'Jl. Dr. Setiabudhi No. 229', '07', '06', 'Sukasari', '2015169 ', 'islamiccenter@gmail.com', '//', 0, 0, 0, 0, 'Mesjid Al Furqan UPI merupakan institusi yang paling strategis dalam membina dan menggerakkan potensi umat Islam untuk mewujudkan Sumber Daya Manusia (SDM) yang tangguh dan berkualitas. Sebagai pusat pembinaan umat, eksistensi mesjid Al Furqan kini dihadapkan pada berbagai perubahan dan tantangan yang terus bergulir di lingkungan masyarakat. Isu globalisasi dan masyarakat informasi merupakan fenomena yang tidak dapat diabaikan begitu saja. Semakin dominannya sektor informasi dalam kehidupan masyarakat, tentu akan memberikan banyak implikasi termasuk peluang dan tantangan kepada umat Islam dalam bersosialisasi dan beraktualisasi di masyarakat luas. Sekaitan dengan peluang dan tantangan itu, peran sentral mesjid Al Furqan makin dituntut agar mampu menampung dan mengikuti segala perkembangan yang terjadi di dalam masyarakat dan lingkungannya melalui berbagai kegiatan dakwah yang dikemas secara lebih profesional.', 'Sebagai mesjid kampus, dalam sejarah perkembangannya, mesjid Al Furqan merupakan salah satu pilar utama dalam mengembangkan kampus UPI yang religius, ilmiah, dan edukatif. Namun demikian,  DKM Mesjid Al Furqan tidak akan mandeg dalam menanggapi perkembangan kehidupan umat Islam dan perkembangan masyarakat. DKM Al Furqan terus melakukan revitalisasi pelaksanaan manajemen dalam mengokohkan kehidupan beragama sivitas akademik dan karyawan UPI dan bembinaan umat.', 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_SO_Al Furqan8.jpeg', '-6.863142', '107.593328'),
(9, 9, 2, 1, 'http://localhost/SIMasjid/View/img/Upload/sertifikat/_S_Salman ITB9.jpeg', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Salman ITB9.jpeg', 'Salman ITB', 'Jl. Ganesha No.7', '03', '04', 'Coblong', '2530708', 'salman@gmail.com', '19/4/1960', 10632, 525, 1400, 100, 'Masjid Salman merupakan masjid kampus yang menjadi laboratorium ruhani bagi masyarakat kampus<br />\r\nITB. Wadah pembinaan insan, pengembangan masyarakat, dan pembangunan peradaban yang<br />\r\nIslami. Berbagai rangkaian program dan kegiatan telah diselenggarakan dan ditujukan untuk setiap kelompok usia, pendidikan, profesi, maupun kegiatan sosial masyarakat pada umumnya, dengan fokus pembinaan pada penciptaan kader-kader yang tangguh dan unggul dari mahasiswa ITB khususnya, maupun masyarakat kota Bandung umumnya hinggakepada Bangsa Indonesia pada akhirnya.<br />\r\n<br />\r\nSebagai bagian dari strategi guna menjalankan program dakwah Islam dan pelayanan umat, maka<br />\r\ndibentuk pula lembaga-lembaga profesional beserta program-program unggulannya. Diantaranya,<br />\r\nLembaga Pengembangan Manajemen dan Ekonomi Syariah (LPES) dengan pelatihan Ekonomi<br />\r\nSyariah, Lembaga Muslimah Salman (LMS) dengan program Sekolah Pra Nikah dan Parenting Class,<br />\r\ndan Lembaga Kaderisasi (LK) membina kader inti mahasiswa yang difasilitasi asrama putra dan putri.', 'Sebagai lembaga yang fokus pada bidang dakwah, Salman juga membentuk Lembaga Pengembangan Dakwah (LPD) dengan salah satu program unggulannya adalah Rumah Al Quran. Untuk menjangkau objek dakwah dari berbagai kalangan dan strata, dibentuklah Lembaga Media yang menghasilkan produk-produk media massa berupa buletin dakwah, buku seputar ibadah, dan situs internet (www.cybermosque.com). Selain itu, sebagai sarana penunjang dakwah, YPM Salman ITB juga memiliki perpustakaan dan laboratorium komputer.', '', '-6.893691', '107.611207'),
(10, 10, 2, 1, 'http://localhost/SIMasjid/View/img/Upload/sertifikat/_S_Pusdai10.jpeg', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Pusdai10.jpeg', 'Pusdai', 'Jl. Diponegoro No.63', '02', '05', 'Cibeunying Kaler', '7217531', 'islamicCenter@gmail.com', '7/9/1997', 0, 0, 0, 0, 'Pusdai adalah lembaga dakwah di bawah naungan pemerintah Provinsi Jawa Barat. Pusdai singkatan dari Pusat Dakwah Islam dan dikenal dengan sebutan Pusdai Jabar.<br />\r\n<br />\r\nPusdai secara fisik adalah bangunan masjid â€“Masjid Pusdai Jabar. Namun sebagai lembaga, Pusdai adalah lembaga dakwah atas fasilitas Pemerintah Provinsi Jawa Barat untuk menjadi sentral pemrograman, pembinaan, dan pengembangan syiar Islam di wilayah Jawa Barat. Lembaga ini -â€“bersama Masjid At-Taâ€™wun Puncak Bogor dan Gedung Bale Asri-â€“ berada di bawah kendali Yayasan Darma Asri (d/h Yayasan Dharma Bhakti), sebuah yayasan yang berada di bawah naungan Pemprov Jabar.<br />\r\n<br />\r\nDalam struktur organisasi, Pusdai dipimpin oleh seorang Direktur (kini dijabat oleh Drs. H. Zaenal Abidin, M.Ag) yang membawahkan empat bidang: Bidang Kajian Informasi dan Kemasyarakatan (KIK), Bidang Administrasi dan Keuangan (Adkeu), Bidang Pelayanan Ibadah dan Haji (PIH), serta Bidang Pendidikan dan Dakwah (Dikda).<br />\r\n<br />\r\nMasjid Pusdai adalah bangunan utama di Kompleks Pusdai. Di sekeliling masjid terdapat berbagai ruang â€“termasuk ruang seminar, perpustakaan, dan sebagainyaâ€“ sebagai kantor pengurus dan aktivis Pusdai.', 'Salah satu sarana unik yang ada di sini adalah galeri AI Qurâ€™an Mushaf Sundawi yang berada di bagian timur bangunan. Al Qurâ€™an ini dibuat dengan tulisan yang diperkaya dengan motif-motif Islami khas Sunda, seperti misalnya motif batik Sunda dan motif tanaman-tanaman khas Jawa Barat.', '', '-6.900339', '107.625865'),
(11, 11, 1, 1, 'http://localhost/SIMasjid/View/img/Upload/sertifikat/_S_Daarut Tauhiid11.jpeg', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Daarut Tauhiid11.jpeg', 'Daarut Tauhiid', 'Jl. Gegerkalong Girang No.38', '04', '06', 'Sukasari', '70832901 ', 'daarutTauhid@gmail.com', '4/9/1990', 0, 0, 0, 0, 'Secara legal-formal Daarut Tauhiid berdiri sejak tanggal 4 September 1990, sesuai tanggal penerbitan Akta Notaris Wiratni Ahmadi, SH., tentang pendirian Yayasan Daarut Tauhiid. Dalam hal ini dapat difahami bahwa Yayasan Daarut Tauhiid merupakan badan hukum pengelola Pesantren Daarut Tauhiid.<br />\r\n<br />\r\nSebagaimana pesantren lain pada umumnya inti aktivitas di Daarut Tauhiid adalah di bidang pendidikan, dakwah & sosial. Namun sebagai sebuah pesantren, maka pada pesantren Daarut Tauhiid terdapat beberapa keunikan atau ke-khas-an dibandingkan Pesantren lain pada umumnya. Salah satu diantaranya adalah tingginya intensitas aktivitas [usaha] ekonomi di dalam lingkungan Pesantren Daarut Tauhiid. Tingginya intensitas aktivitas [usaha] ekonomi tersebut dapat dirasakan baik sejak awal masa pendirian maupun hingga saat ini. ', 'Setidaknya ada 2 faktor atau kondisi yang dapat digunakan untuk menjelaskan keunikan di atas, yaitu semangat wirausaha dan prinsip kemandirian. Semangat wirausaha merupakan sebuah keniscayaan yang melekat pada diri KH. Abdullah Gymnastiar [Aa Gym] selaku pendiri dan pemimpin sentral di Pesantren Daarut Tauhiid. Di sejumlah literasi kita dapat menemukan cerita perjalanan hidup beliau yang diantaranya diliputi dengan terjadinya proses tumbuh kembang jiwa wirausaha pada diri beliau. Jiwa itulah yang kemudian menjelma menjadi sebuah semangat wirausaha yang mewarnai corak Pesantren Daarut Tauhiid yang beliau pimpin secara langsung. Di sisi lain, dapat kita pahami pula bahwa semangat kemandirian adalah sebuah cita-cita dan idealisme para pendiri Pesantren Daarut Tauhiid agar tumbuh kembang Pesantren Daarut Tauhiid dan keseluruhan aktivitasnya didasarkan kepada kemampuan diri, bukan atas ketergantungan kepada bantuan atau sokongan dari pihak lain. Sehingga diharapkan akan muncul independensi dan keleluasan dalam berkreasi. Tentu pada idealisme tersebut tidak dinafikan adanya peluang kemitraan dan kerjasama dengan sebanyak-banyaknya pihak. Dalam hal ini maka semangat wirausaha dan semangat kemandirian adalah sebuah paket yang saling menunjang satu sama lain. Kemandirian dapat terwujud karena adaya aktivitas wirausaha. ', '', '-6.863162', '107.589300'),
(12, 12, 2, 1, 'http://localhost/SIMasjid/View/img/Upload/sertifikat/_S_Al Islam12.jpeg', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Al Islam12.jpeg', 'Al Islam', 'Jl. Kebon Kembang', '02', '04', 'Bandung wetan', '7326483', 'alIslam@gmail.com', '6/5/1996', 0, 0, 0, 0, 'Masjid Al Islam merupakan sebuah masjid yang terletak di Bandung, Indonesia. Masjid ini dibangun pada tahun 1994 dan selesai pada tahun 1996. Saat ini berkembang menjadi pusat pengembangan ibadah agama Islamk di Jl. Kebon Kembang. Bangunan Masjid tersebut, terdiri atas 3 lantai yang terbuat dari batu granit.', '', '', '-6.899167325565874', '107.60732780867751'),
(13, 13, 1, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Ar Rohmat13.jpeg', 'Ar Rohmat', 'Jl. Cijerokaso No. 34', '03', '10', 'Sukasari', '222002270', 'ArRohmat@gmail.com', '9/4/1962', 125, 90, 50, 70, 'Berawal dari niat yang tulus Bapak KH. E. Rachmat (Alm) beserta istri Ibu Hj. Maemunah yang telah mewakafkan tanahnya untuk mendirikan Pesantren lengkap dengan Lembaga Pendidikan untuk mewujudkan cita-cita tersebut maka dibangunlah gedung sekolah dan pesantren oleh Hj. Maemunah (istri Alm. KH. E. Rachmat) dengan dukungan putra â€“ putri dengan nama YAYASAN AR ROHMAT', '', '', '-6.871323', '107.578475'),
(14, 14, 1, 1, 'http://localhost/SIMasjid/View/img/Upload/sertifikat/_S_Al Muhajirin14.jpeg', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Al Muhajirin14.jpeg', 'Al Muhajirin', 'Jl. Cibarunai Blok 13', '02', '08', 'Sukasari', '2019702', 'AlMuhajirin@gmail.com', '6/3/1983', 1100, 275, 150, 50, 'Al-Muhajirin Islamic adalah lembaga pendidikan Islam yang telah berdiri sejak tahun 1993. Semua santri diwajibkan tinggal di asrama dengan program pembinaan berupa pembiasaan shalat berjamaah, shalat dhuha, puasa sunat, dzikir pagi dan sore, kajian kitab kuning, percakapan bahasa Arab dan Inggris, tahsin dan tahfidz al-Qurâ€™an.', '', 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_SO_Al Muhajirin14.jpeg', '-6.917464', '107.619123'),
(15, 15, 1, 1, 'http://localhost/SIMasjid/View/img/Upload/sertifikat/_S_Al Mubarokah15.jpeg', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Al Mubarokah15.jpeg', 'Al Mubarokah', 'Jl. Sarimanis No. 10', '07', '07', 'Sukasari', '081931302661', 'AlMubarokah@gmail.com', '8/8/1994 ', 200, 150, 200, 50, 'Masjid Al Mubarokah merupakan sebuah masjid yang terletak di Bandung, Indonesia. Masjid ini dibangun pada tahun 1994 dan selesai pada tahun 1996. Saat ini berkembang menjadi pusat pengembangan ibadah agama Islam terbesar dan termegah di Asia Tenggara, terletak di Jalan Masjid Raya Makassar. Bangunan Masjid tersebut, terdiri atas 3 lantai yang terbuat dari batu granit. ', '', '', '-6.879986', '107.574455'),
(16, 16, 1, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Al Hikmah16.jpeg', 'Al Hikmah', 'Jl. Sarimanah Blok 15', '02', '07', 'Sukasari', '2008144', 'AlHikmah@gmail.com', '28/10/1998', 50, 50, 100, 50, 'Dengan letaknya yang strategis dan bentuk serta suasananya yang artistik, Al Hikmah banyak digunakan dan dimanfaatkan baik oleh penduduk sekitar maupun masyarakat Bandung. Sebutlah seperti kegiatan setiap Ahad pagi yang diisi pengajian tafsir, maupun pengajian Kamis siang khusus Ibu-ibu yang diisi oleh Ustadz Ahmad Humaidi.', '', 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_SO_Al Hikmah16.jpeg', '-6.879991', '107.577642'),
(17, 17, 1, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Hidayatul Jamin17.jpeg', 'Hidayatul Jamin', 'Jl. Cipedes Atas', '02', '07', 'Sukasari', '085222902202', 'Hidayatul@gmail.com', '12/6/1997', 150, 100, 100, 30, 'Hidayatul Jamin pertama kali pada tahun 1964 dan berlokasi di Jl. Cipedes Atas, Bandung. Maksud pendirian Hidayatul Jamin adalah untuk pengembangan Tarekat Naqsyabandiyah pimpinan YMM. Ayahanda Guru dan agar jamaâ€™ah yang makin lama bertambah, dapat melaksanakan kegiatan-kegiatan ibadah di surau.', '', 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_SO_Hidayatul Jamin17.jpeg', '-6.873824', '107.590521'),
(18, 18, 1, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Al Hidayah18.jpeg', 'Al Hidayah', 'Jl. Sarijadi Blok 2', '05', '02', 'Sukasari', '2019263', 'AlHidayah@gmail.com', '11/10/1981', 425, 425, 150, 50, 'Masjid Al Hidayah yang terletak di Jl. Sarijadi Blok 2, dalam kawasan RT 05 RW 02, Kecamatan Sukasari, Kota Bandung didirikan pada tahun 1981 dan pernah direnovasi tahun 2000.', '', 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_SO_Al Hidayah18.jpeg', '-6.876369', '107.579399'),
(19, 19, 1, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Al Mubarok19.jpeg', 'Al Mubarok', 'Jl. sukahaji', '02', '07', 'Sukasari', '70991905', 'Mubarok@gmail.com', '1/9/1983', 100, 100, 150, 30, 'Masjid Al Mubarok terletak di Jalan sukahaji, Kecamatan Sukasari, Kota Bandung, Provinsi Jawa Barat atau tepatnya berada di samping Kantor Urusan Agama Sukasari .Meskipun Masjid Al Mubarok dilakukan pemugaran akan tetapi tidak untuk mengganti bagian-bagian yang penting (bagian interior masjid masih asli). Pemugaran itu hanya terjadi pada eksterior masjid, seperti serambi, gapura, dan tempat wudhu.', 'Masjid ini masih memiliki sejumlah daya tarik dalam mengagumi keberadaan masjid ini. Di antaranya arsitektur bangunan menyerupai pura, ornamen ukiran yang tidak didominasi oleh kaligrafi tulisan Arab, melainkan gambar naga dan ciri khas ukiran pura lainnya. Pengunjung juga bisa menyaksikan penopang kayu usuk (reng) empat persegi panjang, yang merupakan ukiran tembok khas bangunan Hindu.', 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_SO_Al Mubarok19.jpeg', '-6.873721', '107.584424'),
(20, 20, 2, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Daruddawah20.jpeg', 'Daruddawah', 'Jl Pelesiran 31,Tamansari', '05', '02', 'Bandung Wetan', '2573957', 'Daruddawah@gmail.com', '3/5/1983', 100, 90, 90, 30, 'Masjid Daruddawah dibangun dengan arsitektur tradisonal khas Indonesia. Dengan atap berundak undak bersusun tiga ditopang empat sokoguru dibagian tengah masjid.  Dua susun atap limas di bagian atas dibuat jauh lebih kecil dati atap utama masjid menghadirkan nuansa bangunan seperti bangunan candi dengan struktur berundak undak.', '', '', '-6.895701', '107.606579'),
(21, 21, 2, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_At Taubah21.jpeg', 'At Taubah', 'Jl. Surapati No.120', '03', '06', 'Sumur Bandung', '2572584', 'AtTaubah@gmail.com', '8/7/1994', 90, 90, 170, 30, 'Pada hari Kamis tanggal 23 Oktober 2014, Pengadilan Negeri Bandung melaksankan peresmian mesjid At Taubah yang berada dalam lingkungan Pengadilan, sekaligus pengantar doa kepada Bapak Nur Hakim, SH, MH Ketua Pengadilan Negeri Bandung yang alih tugas ke Pengadilan Negeri Surabaya. ', '', '', '-6.899194', '107.625841'),
(22, 22, 2, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Dirdak22.jpeg', 'Dirdak', 'Jl Aceh 50', '06', '01', 'Sumur Bandung', '4212089 ', 'Dirdak@gmail.com', '11/12/1984', 120, 88, 70, 30, 'Masjid Dirdak berlokasi di Jl Aceh 50 Bandung, Indonesia. Masjid ini berkecimpung dalam aktivitas Agama.  Semakin dominannya sektor informasi dalam kehidupan masyarakat, tentu akan memberikan banyak implikasi termasuk peluang dan tantangan kepada umat Islam dalam bersosialisasi dan beraktualisasi di masyarakat luas.', '', '', '-6.909966', '107.610041'),
(23, 23, 2, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Baiturrahman23.jpeg', 'Baiturrahman', 'Jl Batununggal Indah 1', '02', '05', 'Sumur Bandung', '4659375', 'Baiturrahman@gmail.com', '13/8/1980', 469, 300, 100, 20, 'Baiturrahman telah hadir dan berdiri di tengah-tengah masyarakat yang tengah menuju â€œmasyarakat madaniâ€™. Hal tersebut tidak terlepas dari cita-cita luhur K.H. Salimuddin, MA., alumnus Universitas Al-Azhar, Kairo, Mesir, tahun 1980.', '', '', '-6.956585', '107.626947'),
(24, 24, 2, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Al Manar24.jpeg', 'Al Manar', 'Jl Puter 5 Sadang Serang', '05', '07', 'Coblong', '2507262', 'AlManar@gmail.com', '9/10/1990', 170, 170, 100, 30, 'Al Manar berdiri sejak tahun 1990 oleh H.A. Hidayat Wirapraja. Berbekal pengalaman sebagai pembimbing haji, H.A. Hidayat memberanikan diri mendirikan Al Manar sebagai bentuk pengabdian bagi masyarakat  sekitarnya.', 'Banyak jamaah haji yang telah bergabung dengan Al Manar. Tidak kurang 100 orang  bergabung dengan Al Manar setiap tahunnya. Jamaahnya tidak terbatas yang tinggal di sekitar masjid atau kecamatan Coblong saja, tapi berkembang di kecamatan-kecamatan lainnya.', '', '-6.898386', '107.622357'),
(25, 25, 5, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Al Muhajir25.jpeg', 'Al Muhajir', 'Komplek Bumi Panyileukan', '02', '02', 'Cibiru', '7830755', 'AlMuhajir@gmail.com', '8//1993', 500, 300, 150, 50, 'Al Muhajir adalah lembaga pendidikan Islam yang telah berdiri sejak tahun 1993. Semua santri diwajibkan tinggal di asrama dengan program pembinaan berupa pembiasaan shalat berjamaah, shalat dhuha, puasa sunat, dzikir pagi dan sore, kajian kitab kuning, percakapan bahasa Arab dan Inggris, tahsin dan tahfidz al-Qurâ€™an. ', '', 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_SO_Al Muhajir25.jpeg', '-6.964002', '107.687965'),
(26, 26, 3, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Uswatun Chasanah26.jpeg', 'Uswatun Chasanah', 'Jl. H. Alpi', '01', '01', 'Bandung Kulon', '6000706', 'Chasanah@gmail.com', '6/9/', 0, 0, 150, 50, 'Kapasitas masjid yang bernama Masjid Uswatun Chasanah ini cukup besar. Bangunan utamanya dapat menampung lebih dari 200 jamaah. Saat Shalat Jumâ€™at, lapangan parkir sebelah utara juga digunakan sebagai tempat shalat. Saat ini Masjid tersebut sedang mengalami proses perluasan sehingga nantinya tempat parkir tersebut akan menjadi bagian permanen dari Masjid dan akan menambah kapasitas menjadi lebih dari 500 jamaah.', 'Karena letaknya yang berada di puncak gedung yang terbuka ke udara bebas, pengunjung Pasar Baru bisa mendapatkan pemandangan kota Bandung ke segala arah. Meskipun sebenarnya tidak banyak yang bisa dilihat kecuali kepadatan pemukiman sekitar. ', 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_SO_Uswatun Chasanah26.jpeg', '-6.918916', '107.573013'),
(27, 27, 3, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/PP_Baitul Hikmah27.jpeg', 'Baitul Hikmah', 'Kompl Mekar Indah', '05', '02', 'Bandung Kulon', '6022149', 'BaitulHikmah@gmail.com', '18/8/1964', 0, 0, 200, 50, 'Masjid Baitul Hikmah didirikan oleh KH. Saepuddin Zuhri Rohimahulloh pada Tanggal 18 bulan Agustus Tahun 1964.<br />\r\nFasilitas pertama yang dibangun adalah Asrama putra ukuran 6Ã—8 M, dengan bahan kayu, bambu dan atap kiray.', '', 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_SO_Baitul Hikmah27.jpeg', '-6.913380', '107.628776'),
(28, 28, 3, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Qosrul Muttaqin28.jpeg', 'Qosrul Mutaqin', 'Jl. KH Wahid Hasyim Gg. Panyileukan', '07', '05', 'Bojongloa Kaler', '7348455', 'QMuttaqin@gmail.com', '12/11/1994', 0, 0, 0, 0, 'Masjid Qosrul Muttaqin terletak di Jalan KH Wahid Hasyim Gg. Panyileukan, Kota Bandung, Provinsi Jawa Barat atau tepatnya berada di samping Kantor Urusan Agama Panyileukan.Meskipun Masjid Qosrul Muttaqin dilakukan pemugaran akan tetapi tidak untuk mengganti bagian-bagian yang penting (bagian interior masjid masih asli). Pemugaran itu hanya terjadi pada eksterior masjid, seperti serambi, gapura, dan tempat wudhu. ', '', 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_SO_Qosrul Muttaqin28.jpeg', '-6.943278', '107.589958'),
(29, 29, 3, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Al Ma''ruf29.jpeg', 'Al Ma''ruf', 'Jl. Panyileukan', '03', '05', 'Bojongloa Kaler', '6128470', 'AlMaruf@gmail.com', '11/11/1994', 0, 0, 0, 0, 'Al Ma''ruf merupakan sebuah masjid yang terletak di Bandung, Indonesia. Masjid ini dibangun pada tahun 1994 dan selesai pada tahun 1996. Saat ini berkembang menjadi pusat pengembangan ibadah agama Islamk di Jl. Kebon Kembang. Bangunan Masjid tersebut, terdiri atas 3 lantai yang terbuat dari batu granit. ', '', '', '-6.940559', '107.714580'),
(30, 30, 3, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Cigondewah30.jpeg', 'Cigondewah', 'Jl. Taman Holis Indah 1', '05', '06', 'Bandung Kulon', '6074688', 'Cigondewah@gmail.com', '11/7/1987', 100, 100, 150, 20, 'Masjid Cigondewah terletak di Jl. Taman Holis Indah 1, Kecamatan Bandung Kulon, Kota Bandung, Provinsi Jawa Barat atau tepatnya berada di samping Kantor Urusan Agama Sukasari .Meskipun Masjid Cigondewah dilakukan pemugaran akan tetapi tidak untuk mengganti bagian-bagian yang penting (bagian interior masjid masih asli). Pemugaran itu hanya terjadi pada eksterior masjid, seperti serambi, gapura, dan tempat wudhu. ', '', 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_SO_Cigondewah30.jpeg', '-6.947026', '107.561899'),
(31, 31, 3, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Al Husna31.jpeg', 'Al Husna', 'Jl. Kopo Elok', '01', '05', 'Bojongloa Kaler', '6002824', 'AlHusna@gmail.com', '6/4/1993', 0, 0, 0, 0, 'Masjid Al Husna mempunyai empat imam masing-masing Hafidz Al-Qurâ€™an . mereka tidak hanya hafal tetapi ketika melantunkan ayat Al-Qurâ€™an saat shalat Maghrib, Isyaâ€™, Shubuh, dan Tarawih dengan lagu seperti di Masjidil Haram. Mereka adalah KH. Ulil Abshor Al-Hafidz , KH. Zaenuri Ahmad Al-Hafidz, KH. Ahmad Thoha, dan KH. Muhaimin Al-Hafidz. Sedangkan Muadzin yaitu Muhammad Rokhani, Muhammad Zen, dan Muhammad Yusuf.', '', '', '-6.957370', '107.582660'),
(32, 32, 3, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Nurul Rahman32.jpeg', 'Nurul Rahman', 'Jl. Samsudin 64', '04', '07', 'Bojongloa Kidul', '5226428', 'NRahman@gmail.com', '11/6/1993', 0, 0, 0, 0, 'Nurul Rahman berdiri sejak tahun 1993 oleh H.A. Hidayat Wirapraja. Berbekal pengalaman sebagai pembimbing haji, H.A. Hidayat memberanikan diri mendirikan Nurul Rahman sebagai bentuk pengabdian bagi masyarakat sekitarnya.', '', 'http://localhost/SIMasjid/View/img/Upload/strukturOrganisasi/_SO_Nurul Rahman32.jpeg', '-6.937045', '107.608266'),
(33, 33, 3, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Al Barokah 33.jpeg', 'Al Barokah ', 'Jl. Borobudur V 10', '04', '06', 'Bojongloa Kidul', '6025730', 'AlBarokah@gmail.com', '5/3/1990', 0, 0, 0, 0, 'Pada tahun 1990, saat ketua Dewan Kemakmuran Mesjid (DKM) Bpk. Hidayat (alm), awal berdirinya pengajian anak-anak di mesjid Al Barokah yang dipimpin oleh Ustadz Kamal, dengan jumlah Siswa Â± 40 orang, berupa kegiatan pengajian sore hari. Pada saat itu yang menjabat sebagai ketua Dewan Kemakmuran Mesjid (DKM) Al Barokah adalah Bpk. Kemudian pengelolaan pengajian dilimpahkan dari Bpk. Ustadz Kamal kepada Bpk. Ustadz Ade Wahyudin.', '', '', '-6.959208', '107.593656'),
(34, 34, 3, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Al Ihsan34.jpeg', 'Al Ihsan', 'Jl. Pilar Kencana no. 72', '02', '10', 'Bojongloa Kaler', '6000971', 'AlIhsan@gmail.com', '9/8/1983', 0, 0, 0, 0, 'Seiring dengan pesatnya kemajuan teknologi dewasa ini, perkembangan ilmu pengetahuan juga mengalami perkembangan cukup pesat. Konsekwensi logisnya generasi muda muslim dituntut untuk memiliki wawasan yang luas dan pengetahuan yang memadai agar mampu memenuhi tuntutan zaman dan mengantisipasi dampak negatif yang timbul.<br />\r\n<br />\r\nDengan ''''akhlak karimah'''' sebagai landasan berpijk, Pondok Pesantren Modern Al-Ihsan Baleendah Bandung mendidik para santri untuk menjadi ''''ulama yang intelek dan dan intelek yang ulamaâ€.', '', '', '-6.934888', '107.587873'),
(35, 35, 4, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Almustaqien 35.jpeg', 'Almustaqien ', 'Jl. Atmo Suharjo', '05', '03', 'Batununggal', '7330180', 'Almustaqien@gmail.com', '23/11/1983', 0, 0, 0, 0, 'Almustaqien  berdiri sejak tahun 1983 oleh H.A. Hidayat Wirapraja. Berbekal pengalaman sebagai pembimbing haji, H.A. Hidayat memberanikan diri mendirikan Almustaqien  sebagai bentuk pengabdian bagi masyarakat sekitarnya.', '', '', '-6.917464', '107.619123'),
(36, 36, 4, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/PP_Al Hikmah36.jpeg', 'Al Hikmah', 'Jl. Taman Siswa No.4', '04', '02', 'Lengkong', '73945565', 'AlHikmah@gmail.com', '10/2/1992', 0, 0, 0, 0, 'Pada awal Juli 1992 K.H Moh Saki Abd Syukur. Selaku pimpinan Perguruan Al Hikmah dan guru besar ilmu Al Hikmah mengundang Ust H Abd Kadir Rahman, Ust H Warlan, Ust Panji Sempena dan Sdr Sumarlianto S.H serta Ust H.M Kamad Lz ntk bermusyawarah bersama di Cisoka(Banten).', '', '', '-6.928667', '107.621153'),
(37, 37, 5, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Libaasuttaqwa37.jpeg', 'Libaasuttaqwa', 'Jl.Jakarta No.31', '03', '08', 'Ujung Berung', '7493666', 'Libaasuttaqwa@gmail.com', '28/9/1995', 0, 0, 0, 0, 'DKM Libaasuttaqwa merupakan Suatu Lembaga Independent yang bergerak dalam bidang keislaman, memiliki 2  fungsi yaitu sebagai Dewan Kemakmuran Masjid dan Lembaga Dakwah Kampus (LDK) yang Berorientasi kepada agenda-agenda keumatan,terkait Syiar Keislaman dan Pelayanan Umat. Libasuttaqwa yang biasa dikenal dengan sebutan â€œLITTAâ€, terletak  di lingkungan kampus Sekolah Tinggi Teknologi Tekstil (STT-Tekstil atau ITT) Bandung Jl.Jakarta No.31.', '', '', '-6.913123', '107.646710'),
(38, 38, 6, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Al Muslimin38.jpeg', 'Al Muslimin', 'Jl. Rama no. 3', '05', '06', 'Rancasari', '4536844', 'AlMuslimin@gmail.com', '13/1/1999', 0, 0, 0, 0, 'Al Muslimin adalah lembaga DKM yang bertujuan mencetak para da''i yang fasih berbahasa Arab dan mumpuni dalam ilmu keislaman.<br />\r\nAl Muslimin resmi berdiri pada tahun 1999, berawal dari keprihatinan sejumlah dermawan dari Uni Emirat Arab terhadap rendahnya penguasaan bahasa Arab masyarakat Indonesia.', '', '', '-6.908260', '107.590428'),
(39, 39, 6, 1, '', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Al Ikhwan39.jpeg', 'Al Ikhwan', 'Jl Yupiter Raya No.7', '05', '02', 'Margasari', '4569499', 'AlIkhwan@gmail.com', '10/6/1993', 0, 0, 0, 0, 'Al Ikhwan adalah lembaga pendidikan Islam yang telah berdiri sejak tahun 1993. Semua santri diwajibkan tinggal di asrama dengan program pembinaan berupa pembiasaan shalat berjamaah, shalat dhuha, puasa sunat, dzikir pagi dan sore, kajian kitab kuning, percakapan bahasa Arab dan Inggris, tahsin dan tahfidz al-Qurâ€™an. ', '', '', '-6.946547', '107.661492'),
(40, 40, 2, 1, 'http://localhost/SIMasjid/View/img/Upload/sertifikat/_S_Al Ukhuwwah40.jpeg', 'http://localhost/SIMasjid/View/img/Upload/fotoProfil/_PP_Al Ukhuwwah40.jpeg', 'Al Ukhuwwah', 'Jl. Wastukancana No. 27', '08', '09', 'Sumur Bandung', '4265323', 'AlUkhuwwah@gmail.com', '19/8/1998', 4000, 1373, 3500, 875, 'Kaum Muslim Kota Bandung patut bersyukur, karena dengan perkenan dan izin Allah SWT pada tahun 1998 bertambah lagi sebuah masjid yang cukup representatif, berdiri megah, berlokasi di pusat kota, mudah dikunjungi, hampir dari semua arah.<br />\r\n<br />\r\nAl Ukhuwwah dibangun oleh Pemerintah Kota Bandung, dengan dana dari APBD Provinsi Jawa Barat dan APBD Kota Bandung. Di samping untuk melengkapi sarana ibadah untuk warga kota, juga guna memenuhi kebutuhan internal, khususnya bagi para karyawan yang sebelumnya melaksanakan kegiatan ibadahnya di ruangan-ruangan bangunan kantor.<br />\r\n', 'Masjid Al Ukhuwwah memiliki beberapa keunikan, seperti terdapat kaligrafi asmaul husnah (99 nama tuhan) yang mengelilingi di dalam bangunan utama masjid, masjid yang besar ini dirancang dan dibangun tanpa menggunakan tiang yang banyak, sehingga di dalam masjid tampak sangat luas. <br />\r\n', '', '-6.910698', '107.608569');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
`id_pesan` int(6) NOT NULL,
  `id_user` int(6) NOT NULL,
  `ke` int(6) NOT NULL,
  `nama_dari` varchar(200) NOT NULL,
  `nama_ke` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi_pesan` text NOT NULL,
  `nama_file` varchar(200) DEFAULT NULL,
  `alamat_file` varchar(200) DEFAULT NULL,
  `status` int(6) NOT NULL,
  `tanggal_upload` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_user`, `ke`, `nama_dari`, `nama_ke`, `judul`, `isi_pesan`, `nama_file`, `alamat_file`, `status`, `tanggal_upload`) VALUES
(1, 2, 1, 'Raya Cipaganti', 'Admin Utama', 'Terima kasih sudah mengkonfirmasi akun masjid kami', 'Terima kasih sudah mengizinkan kami untuk dapat menjadi bagian dari website SIMasjid kota Bandung.<br />\r\n<br />\r\nKami selaku DKM masjid raya cipaganti berterima kasih sebesar besarnya.', '', '', 0, '2015-05-06 03:23:19'),
(2, 2, 1, 'Raya Cipaganti', 'Admin Utama', 'Terima kasih sudah mengkonfirmasi akun masjid kami', 'Terima kasih sudah mengizinkan kami untuk dapat menjadi bagian dari website SIMasjid kota Bandung.<br />\r\n<br />\r\nKami selaku DKM masjid raya cipaganti berterima kasih sebesar besarnya.', '', '', 1, '2015-05-06 03:23:19'),
(3, 12, 1, 'Al Islam', 'Admin Utama', 'Mohon di konfirmasi untuk validitas masjid Al Islam', 'Mohon di konfirmasi untuk validitas masjid Al Islam', '', '', 0, '2015-05-06 03:25:29'),
(4, 12, 1, 'Al Islam', 'Admin Utama', 'Mohon di konfirmasi untuk validitas masjid Al Islam', 'Mohon di konfirmasi untuk validitas masjid Al Islam', '', '', 1, '2015-05-06 03:25:29'),
(5, 10, 1, 'Pusdai', 'Admin Utama', 'Mohon kerjasama untuk acara bakti sosial korban banjir', 'Mohon kerjasama untuk acara bakti sosial korban banjir', '', '', 0, '2015-05-06 03:28:22'),
(6, 10, 1, 'Pusdai', 'Admin Utama', 'Mohon kerjasama untuk acara bakti sosial korban banjir', 'Mohon kerjasama untuk acara bakti sosial korban banjir', '', '', 1, '2015-05-06 03:28:22'),
(7, 40, 2, 'Al Ukhuwwah', 'Raya Cipaganti', 'KERJASAMA PANITIA PERINGATAN HARI BESAR ISLAM MAULID NABI BESAR MUHAMMAD SAW 1433 H/2012 M ', 'Berpijak dan mengacu pada esensi ajaran islam yang tersimpul pada cinta kasih, perdamaian dan saling tolong menolong serta semangat ukhuwwah islamiyah maka kami, Remaja yang tergabung dalam Ikatan Remaja Islam Masjid Raya Cipaganti bermaksud mengadakan Kegiatan Bakti Sosial berupa : Santunan Sosial dalam rangka Memperingati Maulid Nabi Muhammad SAW, demi untuk menumbuh-kembangkan solidaritas ummat dan terciptanya jalinan ukhuwwah diantara sesama muslim, selain itu untuk menggugah semangat kepedulian sosial dalam masyarakat demi untuk meringankan beban umat dari berbagai cobaan yang terjadi saat ini.<br />\r\n<br />\r\n<br />\r\nII. MAKSUD DAN TUJUAN<br />\r\n1. Mengembangkan sumber daya dan potensi kepemudaan di wilayah Citeureup dan sekitarnya<br />\r\n2. Aplikasi nilai â€“ nilai islam yang berlandaskan Rahmatallilaâ€™alamin<br />\r\n3. Terjalinnya solidaritas sosial yang harmonis dalam kehidupan masyarakat di<br />\r\nWilayah Citeureup dan sekitarnya<br />\r\n4. Mewujudkan masyarakat yang sehat, sesuai anjuran dalam Islam<br />\r\n5. Mengupayakan terwujudnya masyarakat madani.', '', '', 0, '2015-05-28 09:22:02'),
(8, 40, 2, 'Al Ukhuwwah', 'Raya Cipaganti', 'KERJASAMA PANITIA PERINGATAN HARI BESAR ISLAM MAULID NABI BESAR MUHAMMAD SAW 1433 H/2012 M ', 'Berpijak dan mengacu pada esensi ajaran islam yang tersimpul pada cinta kasih, perdamaian dan saling tolong menolong serta semangat ukhuwwah islamiyah maka kami, Remaja yang tergabung dalam Ikatan Remaja Islam Masjid Raya Cipaganti bermaksud mengadakan Kegiatan Bakti Sosial berupa : Santunan Sosial dalam rangka Memperingati Maulid Nabi Muhammad SAW, demi untuk menumbuh-kembangkan solidaritas ummat dan terciptanya jalinan ukhuwwah diantara sesama muslim, selain itu untuk menggugah semangat kepedulian sosial dalam masyarakat demi untuk meringankan beban umat dari berbagai cobaan yang terjadi saat ini.<br />\r\n<br />\r\n<br />\r\nII. MAKSUD DAN TUJUAN<br />\r\n1. Mengembangkan sumber daya dan potensi kepemudaan di wilayah Citeureup dan sekitarnya<br />\r\n2. Aplikasi nilai â€“ nilai islam yang berlandaskan Rahmatallilaâ€™alamin<br />\r\n3. Terjalinnya solidaritas sosial yang harmonis dalam kehidupan masyarakat di<br />\r\nWilayah Citeureup dan sekitarnya<br />\r\n4. Mewujudkan masyarakat yang sehat, sesuai anjuran dalam Islam<br />\r\n5. Mengupayakan terwujudnya masyarakat madani.', '', '', 1, '2015-05-28 09:22:02'),
(9, 2, 40, 'Raya Cipaganti', 'Al Ukhuwwah', 'Terima kasih', 'Terima kasih', '', '', 0, '2015-05-28 09:23:04'),
(10, 2, 40, 'Raya Cipaganti', 'Al Ukhuwwah', 'terima kasih', 'terima kasih', '', '', 0, '2015-05-28 09:24:00'),
(11, 2, 40, 'Raya Cipaganti', 'Al Ukhuwwah', 'terima kasih', 'terima kasih', '', '', 0, '2015-05-28 09:24:53'),
(12, 2, 40, 'Raya Cipaganti', 'Al Ukhuwwah', 'terima kasih', 'terima kasih', '', '', 1, '2015-05-28 09:24:53'),
(13, 40, 2, 'Al Ukhuwwah', 'Raya Cipaganti', 'sama ', 'sama', '', '', 0, '2015-05-28 09:25:43'),
(14, 40, 2, 'Al Ukhuwwah', 'Raya Cipaganti', 'asd', 'asd', '', '', 0, '2015-05-28 09:35:14'),
(15, 40, 2, 'Al Ukhuwwah', 'Raya Cipaganti', 'balas', 'balas', '', '', 0, '2015-05-28 09:36:11'),
(16, 40, 2, 'Al Ukhuwwah', 'Raya Cipaganti', 'balas', 'balas', NULL, NULL, 0, '2015-05-28 09:39:10'),
(17, 40, 2, 'Al Ukhuwwah', 'Raya Cipaganti', 'balas', 'balas', '', '', 1, '2015-05-28 09:39:10');

-- --------------------------------------------------------

--
-- Table structure for table `rute_angkot`
--

CREATE TABLE IF NOT EXISTS `rute_angkot` (
  `id_masjid` int(6) NOT NULL,
  `nama_jalan` varchar(200) NOT NULL,
  `id_angkot` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute_angkot`
--

INSERT INTO `rute_angkot` (`id_masjid`, `nama_jalan`, `id_angkot`) VALUES
(3, 'Jl. Citarum', 16),
(3, 'Jl. Citarum', 9),
(4, 'Jl. Caringin', 17),
(10, 'Jl. Diponegoro', 7),
(10, 'Jl. Diponegoro', 16),
(10, 'Jl. Surapati', 6),
(10, 'Jl. Surapati', 5),
(10, 'Jl. Surapati', 10),
(10, 'Jl. Surapati', 17),
(11, 'Jl. Setiabudhi', 11),
(11, 'Jl. Setiabudhi', 5),
(2, 'Jl. Cipaganti', 3),
(2, 'Jl. Cipaganti', 6),
(2, 'Jl. Cipaganti', 5),
(2, 'Jl. Cipaganti', 11),
(2, 'Jl. Cipaganti', 15),
(8, 'Jl. Setiabudhi', 5),
(8, 'Jl. Setiabudhi', 11),
(9, 'ITB', 26),
(9, 'ITB', 18),
(9, 'ITB', 5),
(9, 'Jl. Dago', 9),
(40, 'Jl.Wastukancana  ', 2),
(40, 'Turun di jalan merdeka kemudian jalan kaki menuju Jl.Wastukancana   ', 15);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(6) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `privilege` int(1) NOT NULL,
  `session` varchar(40) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `privilege`, `session`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, '4bb15dd4cfaeb90fb7d0d29809383454'),
(2, 'adminB01', '3e86439516214db26ea283004c9603da', 1, 'e9507ef0f995280be48c6fa62383b2c4'),
(3, 'adminC02', 'dc26f2ba53674848126cc2595475b918', 1, 'c3c91245fa47dfd1f3c75e758bc741ce'),
(4, 'adminT01', 'e3362311bdf0d833790d6de4274fc4b9', 1, 'bc7118f9995092d537eb8b4952385427'),
(5, 'adminK01', '80026db3d57e66cee67f0f22e06d3183', 1, '49ce39a2156a9f66bc33435c364e1f99'),
(6, 'adminG01', '0a2d2143e4526787dc92b930f45fb1c2', 1, '7830ff93bdf7a7ba659fa07cd844bc2f'),
(7, 'adminU01', '76a52c5df6b1176677121be50cbf88ba', 1, 'b1f5b75438358304722f4b868b59de7b'),
(8, 'adminB02', '82790861bc9d54bb6d99e6ec301edbf4', 1, '20107b4234ecec9315488359be16fd17'),
(9, 'adminC01', 'd63eb2dd108d907a730185ae7c750a42', 1, '7fdab83e02ae59e38ceeed1714bea898'),
(10, 'adminC03', '9ed2642ce462a71743c22576e25d1574', 1, '4e9b274bb8b22d0b5f41ca72bc820f5d'),
(11, 'adminB03', '88e5ed9e59cc15272a3291d87161f5dd', 1, '1171fb8dc00877a6b7954cc619749be4'),
(12, 'adminC04', 'd7bcadb7d8966a837845503a402d5fd3', 1, '68ff6b9119646d789028d51cbc1df5d3'),
(13, 'adminB04', 'f7e08539a7b75ebf5020fe814664eeee', 1, 'f1d439305106a89408d8b1fa9b4afbc8'),
(14, 'adminB05', 'ca73a998fe4ece6bc17c7f1f035e1a65', 1, '43882e8fef83b0f0280eee173722affa'),
(15, 'adminB06', 'ffab50ebe46930ac0587a2df5e3598be', 1, '544bc915e942d5e1401009dddfd7284a'),
(16, 'adminB07', 'f4326f527be9b393bfafdfa80d6ecd69', 1, 'e53e176b7cfd9fe6578fde5c2f0e34e1'),
(17, 'adminB08', '8b508564ba1e81523a3c64ad1a8e8e0a', 1, NULL),
(18, 'adminB09', '2a015e978b1935cc63e395be906769fc', 1, '79ebbe32ae4adef8f017a5bbe16d84e0'),
(19, 'adminB10', '9c6fb5a58e798382f875428b1d96d010', 1, '4e779262926ddd7d89e363a8369813c6'),
(20, 'adminC05', '9ca0f8fd55e72528f23aee50d0b53c17', 1, 'a5d604c888916dc83c3ab5555078156b'),
(21, 'adminC06', 'c7b2b302476fcb441bfaca182d19fd67', 1, NULL),
(22, 'adminC07', 'e551992bc57e09723b3a00b6e082cb13', 1, '3bb0f4c24b447fb85e919c3599550f90'),
(23, 'adminC08', 'd61ea9a8067d97d81f6d13a9289f59be', 1, '7607b24d621e2860bce173db54bcde6a'),
(24, 'adminC09', '80cda41dc05bd750e4b471b60d03966c', 1, '43729c698d380a3f10e3042c11c41a0e'),
(25, 'adminU02', 'fd2cd9a86328c26868168a4240ebb6e1', 1, NULL),
(26, 'adminT02', '39bad6800aeaa8ab4a6fd72b387ee379', 1, NULL),
(27, 'adminT03', 'f796b9c8ed8e35866fa3227682b78795', 1, NULL),
(28, 'adminT04', 'fbdf72258397bcb6e17e88af71ef11ba', 1, NULL),
(29, 'adminT05', '6dbd695af93aab6f3112b8149591e63b', 1, NULL),
(30, 'adminT06', '03bbb736535fbf5ab8955f78031b04d0', 1, NULL),
(31, 'adminT07', '6bf0555e5bd7c5f006bea2dfb75dadc3', 1, NULL),
(32, 'adminT08', '67e47486a40fb2330c3b26b4ccc740fc', 1, NULL),
(33, 'adminT09', 'ed029255003da825faffbbfaa62a9de0', 1, NULL),
(34, 'adminT10', '5697520e3f778cf71f7440c8d2b5a127', 1, NULL),
(35, 'adminK02', 'f49e4005fa051043e93257a358ecf231', 1, NULL),
(36, 'adminK03', '0b63df0f846e7e78a1a474e36e629ac2', 1, NULL),
(37, 'adminU03', 'c00a6539d3c1dbf53a5cf13e5d1bf93a', 1, NULL),
(38, 'adminG02', '9b485f54e757a8972126965ae414b4d4', 1, NULL),
(39, 'adminG03', '69f19c2bda86a2a172600ffd7b7c7275', 1, NULL),
(40, 'adminC10', '8609418e3adb45f5503e1b50ba88d2b5', 1, '57170cd51ed838cf6380433a6f7df749');

-- --------------------------------------------------------

--
-- Table structure for table `video_ceramah`
--

CREATE TABLE IF NOT EXISTS `video_ceramah` (
`id_video_ceramah` int(6) NOT NULL,
  `id_user` int(6) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `penceramah` varchar(200) NOT NULL,
  `embed` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `tanggal_upload` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `video_ceramah`
--

INSERT INTO `video_ceramah` (`id_video_ceramah`, `id_user`, `judul`, `penceramah`, `embed`, `img`, `tanggal_upload`) VALUES
(1, 1, 'Renungan & Motivasi Islami: Buktikan Kejujuranmu!', 'Ustadz Dr. Muhammad Arifin Badri', '<iframe width="560" height="315" src="https://www.youtube.com/embed/h8ojWzNWuZM" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/h8ojWzNWuZM/0.jpg>', '2015-05-05 06:54:50'),
(2, 1, ' Pengajian Islam: Aku Akan Berubah', 'Ustadz Dr. Syafiq Basalamah', '<iframe width="560" height="315" src="https://www.youtube.com/embed/1eufwP03Stk" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/1eufwP03Stk/0.jpg>', '2015-05-05 06:56:26'),
(3, 1, 'Ceramah Singkat: Tanda Disayang Allah', 'Ustadz Badrusalam, Lc.', '<iframe width="560" height="315" src="https://www.youtube.com/embed/N78MGcn9Q0o" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/N78MGcn9Q0o/0.jpg>', '2015-05-05 06:57:23'),
(4, 1, 'Renungan: Mengapa Dosa Riba Begitu Besar', 'Ustadz Dr. Erwandi Tarmidzi, MA.', '<iframe width="560" height="315" src="https://www.youtube.com/embed/QWBYJh4KjgM" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/QWBYJh4KjgM/0.jpg>', '2015-05-05 06:58:41'),
(5, 1, 'Ceramah Pendek: Bacaan Dzikir Setelah Sholat', 'Ustadz Abdurrahman Thoyib, Lc. ', '<iframe width="560" height="315" src="https://www.youtube.com/embed/TaPBL4cgApc" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/TaPBL4cgApc/0.jpg>', '2015-05-05 07:00:02'),
(6, 1, 'Ceramah Singkat Menyentuh Hati: Perjalanan Menuju Kampung Akhirat', 'Ustadz Abuz Zubair Hawaary, Lc. ', '<iframe width="560" height="315" src="https://www.youtube.com/embed/N927fiWAtTI" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/N927fiWAtTI/0.jpg>', '2015-05-05 07:01:38'),
(7, 1, 'Ceramah Singkat: Misteri Kunci Surga', 'Ustadz Abdullah Zaen, MA.', '<iframe width="560" height="315" src="https://www.youtube.com/embed/nrq6EERzQp0" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/nrq6EERzQp0/0.jpg>', '2015-05-05 07:02:48'),
(8, 1, 'Ceramah Singkat: Resep Hidup Tentram dan Bahagia', 'Ustadz Abu Ubaidah Yusuf As-Sidawi ', '<iframe width="560" height="315" src="https://www.youtube.com/embed/JLV62Iocth4" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/JLV62Iocth4/0.jpg>', '2015-05-05 07:03:48'),
(9, 1, 'Ceramah Pendek: Amalan Pembuka Pintu Rezeki', 'Ustadz Badrusalam, Lc.', '<iframe width="560" height="315" src="https://www.youtube.com/embed/GLnFt4DvVCE" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/GLnFt4DvVCE/0.jpg>', '2015-05-05 07:05:22'),
(10, 1, 'Bincang Singkat: Sholat dan Puasanya para Pekerja', 'Ustadz Ahmad Zainuddin, Lc ', '<iframe width="560" height="315" src="https://www.youtube.com/embed/38431BlMKvU" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/38431BlMKvU/0.jpg>', '2015-05-05 07:10:03'),
(11, 1, 'Ceramah Umum: Penghapus-Penghapus Pahala', 'Ustadz Ahmad Zainuddin, Lc ', '<iframe width="560" height="315" src="https://www.youtube.com/embed/AogAzBgpOeQ" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/AogAzBgpOeQ/0.jpg>', '2015-05-05 07:10:57'),
(12, 1, 'Kajian Umum: Berbaik Sangka Kepada Allah', 'Ustadz Ahmad Zainuddin ', '<iframe width="560" height="315" src="https://www.youtube.com/embed/dm_TncTFYxs" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/dm_TncTFYxs/0.jpg>', '2015-05-05 07:11:45'),
(13, 1, 'Kajian Islam Sehat Jasmani dan Rohani', 'Ustadz Abdullah Zaen, MA ', '<iframe width="560" height="315" src="https://www.youtube.com/embed/68K5qARBKdQ" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/68K5qARBKdQ/0.jpg>', '2015-05-05 07:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `video_informasi_masjid`
--

CREATE TABLE IF NOT EXISTS `video_informasi_masjid` (
`id_video_masjid` int(6) NOT NULL,
  `id_masjid` int(6) NOT NULL,
  `jenis_admin` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `embed` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `tanggal_upload` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `video_informasi_masjid`
--

INSERT INTO `video_informasi_masjid` (`id_video_masjid`, `id_masjid`, `jenis_admin`, `judul`, `embed`, `img`, `tanggal_upload`) VALUES
(1, 2, 'adminB01', 'Masjid Raya Cipaganti Bandung ', '<iframe width="560" height="315" src="https://www.youtube.com/embed/0ioMrHCYQE4" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/0ioMrHCYQE4/0.jpg>', '2015-05-05 08:17:52'),
(2, 5, 'adminK01', 'Masjid Agung Alun Alun Bandung ', '<iframe width="560" height="315" src="https://www.youtube.com/embed/EgBYorrU2fI" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/EgBYorrU2fI/0.jpg>', '2015-05-05 08:20:03'),
(7, 2, 'adminB01', 'Finalis Lomba Bahasa Arab - Februari 2015', '<iframe width="560" height="315" src="https://www.youtube.com/embed/YWr2YIXQ4bg" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/YWr2YIXQ4bg/0.jpg>', '2015-05-05 08:31:18'),
(8, 3, 'adminC02', 'Sekapur Sirih Sejarah Masjid Istiqomah ', '<iframe width="560" height="315" src="https://www.youtube.com/embed/ULYB--CEbZk" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/ULYB--CEbZk/0.jpg>', '2015-05-05 08:34:41'),
(9, 2, 'adminB01', 'Lomba tabuh beduk irma ', '<iframe width="420" height="315" src="https://www.youtube.com/embed/jbJoGOldt0s" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/jbJoGOldt0s/0.jpg>', '2015-05-05 08:39:20'),
(11, 2, 'adminB01', 'Baksos dan Qurban Forum silaturahim Remaja Masjid', '<iframe width="420" height="315" src="https://www.youtube.com/embed/seCnQr1Bn6g" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/seCnQr1Bn6g/0.jpg>', '2015-05-05 09:50:02'),
(13, 2, 'adminB01', 'Dokumentasi penyembelihan hewan qurban ', '<iframe width="420" height="315" src="https://www.youtube.com/embed/2X9zwg8wyIw" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/2X9zwg8wyIw/0.jpg>', '2015-05-05 14:56:23'),
(14, 2, 'adminB01', 'Bilal Sholat Idul Fitri ', '<iframe width="420" height="315" src="https://www.youtube.com/embed/F30rrEBVFUY" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/F30rrEBVFUY/0.jpg>', '2015-05-05 14:55:33'),
(15, 40, 'adminC10', 'Majelis Jejak Nabi Muhammad Saw ', '<iframe width="420" height="315" src="https://www.youtube.com/embed/md3guX0FF4s" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/md3guX0FF4s/0.jpg>', '2015-05-28 09:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `video_musik`
--

CREATE TABLE IF NOT EXISTS `video_musik` (
`id_video_musik` int(6) NOT NULL,
  `id_user` int(6) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `penyanyi` varchar(200) NOT NULL,
  `embed` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `tanggal_upload` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `video_musik`
--

INSERT INTO `video_musik` (`id_video_musik`, `id_user`, `judul`, `penyanyi`, `embed`, `img`, `tanggal_upload`) VALUES
(1, 1, 'Shalawat Cinta', 'Ustadz Jefri', '<iframe width="560" height="315" src="https://www.youtube.com/embed/AzwwmAsHP_E" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/AzwwmAsHP_E/0.jpg>', '2015-05-05 07:46:05'),
(2, 1, 'Baraka Allahu Lakuma | Official Lyric Video ', 'Maher Zain', '<iframe width="560" height="315" src="https://www.youtube.com/embed/mHpTdsBbYRM" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/mHpTdsBbYRM/0.jpg>', '2015-05-05 07:50:08'),
(3, 1, 'Subhanallah | Official Video ', 'Ustad Jefri Al Buchori', '<iframe width="560" height="315" src="https://www.youtube.com/embed/GyJPBcLGqXQ" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/GyJPBcLGqXQ/0.jpg>', '2015-05-05 07:52:30'),
(4, 1, 'Terima Kasih Ayah | Official Video ', 'Opick feat. Adiba', '<iframe width="560" height="315" src="https://www.youtube.com/embed/mHAkY1c1AIU" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/mHAkY1c1AIU/0.jpg>', '2015-05-05 07:53:12'),
(5, 1, 'Muhasabah Cinta | Official Video', 'Fatima', '<iframe width="560" height="315" src="https://www.youtube.com/embed/Kfud5fzLRNg" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/Kfud5fzLRNg/0.jpg>', '2015-05-05 07:54:11'),
(6, 1, 'Taubat | Official Video ', 'Opick', '<iframe width="560" height="315" src="https://www.youtube.com/embed/1YdUrJfuiPo" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/1YdUrJfuiPo/0.jpg>', '2015-05-05 07:55:09'),
(7, 1, 'Taqwa | Official Video', 'Opick', '<iframe width="560" height="315" src="https://www.youtube.com/embed/jWgMWfy1P8k" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/jWgMWfy1P8k/0.jpg>', '2015-05-05 07:56:45'),
(8, 1, 'Number One For Me | Official Music Video ', 'Maher Zain', '<iframe width="560" height="315" src="https://www.youtube.com/embed/f4J7-WR1QOY" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/f4J7-WR1QOY/0.jpg>', '2015-05-05 07:59:14'),
(9, 1, 'Tiada Duka Yang Abadi | Official Video ', 'Opick', '<iframe width="560" height="315" src="https://www.youtube.com/embed/RLcjjIc_mVM" frameborder="0" allowfullscreen></iframe>', '<img src=https://img.youtube.com/vi/RLcjjIc_mVM/0.jpg>', '2015-05-05 08:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE IF NOT EXISTS `wilayah` (
`id_wilayah` int(6) NOT NULL,
  `nama_wilayah` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `nama_wilayah`) VALUES
(1, 'Bojonagara'),
(2, 'Cibeunying'),
(3, 'Tegallega'),
(4, 'Karess'),
(5, 'Ujung Berung'),
(6, 'Gede Bage');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angkot`
--
ALTER TABLE `angkot`
 ADD PRIMARY KEY (`id_angkot`);

--
-- Indexes for table `berita_masjid`
--
ALTER TABLE `berita_masjid`
 ADD PRIMARY KEY (`id_berita_masjid`), ADD KEY `id_masjid` (`id_masjid`);

--
-- Indexes for table `berita_umum`
--
ALTER TABLE `berita_umum`
 ADD PRIMARY KEY (`id_berita_umum`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
 ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `fasilitas_masjid`
--
ALTER TABLE `fasilitas_masjid`
 ADD KEY `id_masjid` (`id_masjid`), ADD KEY `id_fasilitas` (`id_fasilitas`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
 ADD PRIMARY KEY (`id_file`), ADD KEY `id_masjid` (`id_masjid`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
 ADD PRIMARY KEY (`id_foto`), ADD KEY `id_masjid` (`id_masjid`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
 ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kegiatan_masjid`
--
ALTER TABLE `kegiatan_masjid`
 ADD KEY `id_masjid` (`id_masjid`), ADD KEY `id_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `kegiatan_rutin`
--
ALTER TABLE `kegiatan_rutin`
 ADD PRIMARY KEY (`id_kegiatan_rutin`), ADD KEY `id_masjid` (`id_masjid`);

--
-- Indexes for table `masjid`
--
ALTER TABLE `masjid`
 ADD PRIMARY KEY (`id_masjid`), ADD KEY `masjid_ibfk_1` (`id_user`), ADD KEY `id_wilayah` (`id_wilayah`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
 ADD PRIMARY KEY (`id_pesan`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `rute_angkot`
--
ALTER TABLE `rute_angkot`
 ADD KEY `id_masjid` (`id_masjid`), ADD KEY `id_angkot` (`id_angkot`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `video_ceramah`
--
ALTER TABLE `video_ceramah`
 ADD PRIMARY KEY (`id_video_ceramah`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `video_informasi_masjid`
--
ALTER TABLE `video_informasi_masjid`
 ADD PRIMARY KEY (`id_video_masjid`), ADD KEY `id_masjid` (`id_masjid`);

--
-- Indexes for table `video_musik`
--
ALTER TABLE `video_musik`
 ADD PRIMARY KEY (`id_video_musik`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
 ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angkot`
--
ALTER TABLE `angkot`
MODIFY `id_angkot` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `berita_masjid`
--
ALTER TABLE `berita_masjid`
MODIFY `id_berita_masjid` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `berita_umum`
--
ALTER TABLE `berita_umum`
MODIFY `id_berita_umum` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
MODIFY `id_fasilitas` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
MODIFY `id_file` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
MODIFY `id_foto` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
MODIFY `id_kegiatan` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kegiatan_rutin`
--
ALTER TABLE `kegiatan_rutin`
MODIFY `id_kegiatan_rutin` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `masjid`
--
ALTER TABLE `masjid`
MODIFY `id_masjid` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
MODIFY `id_pesan` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `video_ceramah`
--
ALTER TABLE `video_ceramah`
MODIFY `id_video_ceramah` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `video_informasi_masjid`
--
ALTER TABLE `video_informasi_masjid`
MODIFY `id_video_masjid` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `video_musik`
--
ALTER TABLE `video_musik`
MODIFY `id_video_musik` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
MODIFY `id_wilayah` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita_masjid`
--
ALTER TABLE `berita_masjid`
ADD CONSTRAINT `berita_masjid_ibfk_1` FOREIGN KEY (`id_masjid`) REFERENCES `masjid` (`id_masjid`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `berita_masjid_ibfk_2` FOREIGN KEY (`id_masjid`) REFERENCES `masjid` (`id_masjid`);

--
-- Constraints for table `berita_umum`
--
ALTER TABLE `berita_umum`
ADD CONSTRAINT `berita_umum_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fasilitas_masjid`
--
ALTER TABLE `fasilitas_masjid`
ADD CONSTRAINT `fasilitas_masjid_ibfk_1` FOREIGN KEY (`id_masjid`) REFERENCES `masjid` (`id_masjid`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fasilitas_masjid_ibfk_2` FOREIGN KEY (`id_fasilitas`) REFERENCES `fasilitas` (`id_fasilitas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `file`
--
ALTER TABLE `file`
ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`id_masjid`) REFERENCES `masjid` (`id_masjid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`id_masjid`) REFERENCES `masjid` (`id_masjid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kegiatan_masjid`
--
ALTER TABLE `kegiatan_masjid`
ADD CONSTRAINT `kegiatan_masjid_ibfk_1` FOREIGN KEY (`id_masjid`) REFERENCES `masjid` (`id_masjid`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `kegiatan_masjid_ibfk_2` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kegiatan_rutin`
--
ALTER TABLE `kegiatan_rutin`
ADD CONSTRAINT `kegiatan_rutin_ibfk_1` FOREIGN KEY (`id_masjid`) REFERENCES `masjid` (`id_masjid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `masjid`
--
ALTER TABLE `masjid`
ADD CONSTRAINT `masjid_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `masjid_ibfk_2` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rute_angkot`
--
ALTER TABLE `rute_angkot`
ADD CONSTRAINT `rute_angkot_ibfk_1` FOREIGN KEY (`id_masjid`) REFERENCES `masjid` (`id_masjid`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `rute_angkot_ibfk_2` FOREIGN KEY (`id_angkot`) REFERENCES `angkot` (`id_angkot`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `video_ceramah`
--
ALTER TABLE `video_ceramah`
ADD CONSTRAINT `video_ceramah_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `video_informasi_masjid`
--
ALTER TABLE `video_informasi_masjid`
ADD CONSTRAINT `video_informasi_masjid_ibfk_1` FOREIGN KEY (`id_masjid`) REFERENCES `masjid` (`id_masjid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `video_musik`
--
ALTER TABLE `video_musik`
ADD CONSTRAINT `video_musik_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
