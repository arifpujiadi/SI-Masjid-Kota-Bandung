<!DOCTYPE html>
<html>
    <head>
        <title>Cari - Lokasi</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/PenggunaUmum/jquery-ui-1.10.3.css">
        <link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css">
        <link rel="stylesheet" href="../js/fancybox/helpers/jquery.fancybox-thumbs.css">
        <link rel="stylesheet" href="../css/PenggunaUmum/lokasi.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-full">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="box">
                        <div class="col">
                            <div class="kotak-luar box span-12">
                                <div class="garis-peta box span-4">
                                    <div class="kotak-atas box span-12">
                                        <div class="box span-12">
                                            <div class="radio box span-1 center">
                                                <input type="radio" name="cari" value="1" class="cbSearch" id="namaMasjid" checked>
                                            </div>
                                            <div class="judul box span-11">
                                                Cari masjid berdasarkan nama
                                            </div>
                                        </div>
                                        <div class="box span-12">
                                            <div class="blank box span-1">
                                                &nbsp;
                                            </div>
                                            <div class="blank-cari box span-11">
                                                <input class="form-control-cari field field_namaMasjid" id="field_namaMasjid" type="text" placeholder="Masukan nama masjid" value="">
                                                <input class="field_namaMasjid" id="hidden_namaMasjid" type="hidden" value="">
                                                <a href="#" id="submitNamaMasjid"><img class="form-control-search" src="../img/Peta/search.png"/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box span-12">
                                        <div class="box span-12">
                                            <div class="radio box span-1 center">
                                                <input type="radio" name="cari" value="2" class="cbSearch" id="wilayahMasjid">
                                            </div>
                                            <div class="judul box span-11">
                                                Cari masjid di wilayah
                                            </div>
                                        </div>
                                        <div class="box span-12">
                                            <div class="blank box span-1">
                                                &nbsp;
                                            </div>
                                            <div class="sub-judul box span-3-5">
                                                Wilayah yang dicari 
                                            </div>
                                            <div class="sub-judul box span-0-5">
                                                :
                                            </div>
                                            <div class="dropbox box span-6-5">
                                                <div class="styled-select">
                                                    <select name="wilayahMasjid" class="field_wilayahMasjid" id="wilayahLokasi" onchange="getMasjidByWilayahLokasi(this.value)">
                                                        <option value="">Pilih wilayah</option>
                                                        <?php include '../../function/script/select/wilayahMasjid.php' ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box span-12">
                                            <div class="blank box span-1">
                                                &nbsp;
                                            </div>
                                            <div class="sub-judul box span-3-5">
                                                Masjid yang dicari
                                            </div>
                                            <div class="sub-judul box span-0-5">
                                                :
                                            </div>
                                            <div class="dropbox box span-6-5">
                                                <div class="styled-select">
                                                    <select id="selectMasjid_lokasi" class="field_wilayahMasjid" name="id_masjid_lokasi">
                                                        <option value="">Pilih masjid</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box span-12" id="submit_wilayahMasjid">
                                            <div class="blank box span-5">
                                                &nbsp;
                                            </div>
                                            <div class="box span-7">
                                                <input class="btn btn-block btn-lg btn-inverse" type="submit" value="Cari" id="submitWilayahMasjid"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box span-12">
                                        <div class="box span-12">
                                            <div class="radio box span-1 center">
                                                <input type="radio" name="cari" value="3" class="cbSearch" id="ruteMasjid">
                                            </div>
                                            <div class="judul box span-11">
                                                Cari informasi angkot
                                            </div>
                                        </div>
                                        <div class="box span-12">
                                            <div class="blank box span-1">
                                                &nbsp;
                                            </div>
                                            <div class="sub-judul box span-3-5">
                                                Wilayah yang dituju
                                            </div>
                                            <div class="sub-judul box span-0-5">
                                                :
                                            </div>
                                            <div class="dropbox box span-6-5">
                                                <div class="styled-select">
                                                    <select name="wilayahMasjid" class="field_ruteMasjid" id="wilayahRute" onchange="getMasjidByWilayahAngkot(this.value)">
                                                        <option value="">Pilih wilayah</option>
                                                        <?php include '../../function/script/select/wilayahMasjid.php' ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box span-12">
                                            <div class="blank box span-1">
                                                &nbsp;
                                            </div>
                                            <div class="sub-judul box span-3-5">
                                                Masjid yang dituju
                                            </div>
                                            <div class="sub-judul box span-0-5">
                                                :
                                            </div>
                                            <div class="dropbox box span-6-5">
                                                <div class="styled-select">
                                                    <select id="selectMasjid_angkot" class="field_ruteMasjid" name="id_masjid_angkot">
                                                        <option value="">Pilih masjid</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box span-12" id="submit_ruteMasjid">
                                            <div class="blank box span-5">
                                                &nbsp;
                                            </div>
                                            <div class="box span-7">
                                                <input class="btn btn-block btn-lg btn-inverse" type="submit" value="Cari" id="submitRuteMasjid"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box span-8">
                                    <div class="box span-12">
                                        <div class="peta box span-12 center">
                                            Peta lokasi masjid di kota Bandung 
                                        </div>
                                        <div class="masjid-img box span-12 center" id="map-canvas">
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="keterangan box span-12">
                                Keterangan : <span id="keterangan"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer row">

                </div>
            </div>
        </div>
        <script src="../js/custom.js"></script>
        <script src="../js/jquery-2.1.0.min.js"></script>
        <script src="../js/jquery-ui-1.10.3.min.js"></script>
        <script src="../js/fancybox/jquery.fancybox.js"></script>
        <script src="../js/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
        <script src="../js/main.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNI9DqfA0Hdaycx7k7yzbXwnqju1rYut0&type=geocode&libraries=places"></script>
        <script src="../js/gmaps.js"></script>
        <script>
            $(document).ready(function () {
                    $(".header").load("header.php");
                    $(".footer").load("footer.php");
            });
        </script>
    </body>
</html>