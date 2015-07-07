
function getLogin() {
    var username = document.getElementById('login-username').value;
    var password = document.getElementById('login-password').value;

    if (username == "" || username == null || password == "" || password == null) {
        document.getElementById('login_popup1').style.display = "";
        return false;
    } else if (username != "" && username != null && password != "" && password != null) {
        document.getElementById('login_popup2').style.display = "";
        return false;
    } else {
        return true;
    }
}

function getLogin_confirm(x) {
    document.getElementById('login_popup' + x).style.display = 'none';
}

function getLogout() {
    window.location = "../../function/function.php?logout=true";
}




function getMasjidByWilayah(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("tambahBeritaMasjid_selectMasjid").innerHTML = xmlhttp.responseText;

                if (xmlhttp.responseText == '') {
                    document.getElementById("tambahBeritaMasjid_selectMasjid").innerHTML = '<option>Pilih masjid</option>';
                }
            } else {
                document.getElementById("tambahBeritaMasjid_selectMasjid").innerHTML = '<option>Pilih masjid</option>';
            }
        }
        xmlhttp.open("GET", "../../function/script/select/masjidByWilayah.php?idWilayah=" + str, true);
        xmlhttp.send();
    }
}


function getMasjidByWilayahLokasi(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("selectMasjid_lokasi").innerHTML = xmlhttp.responseText;

                if (xmlhttp.responseText == '') {
                    document.getElementById("selectMasjid_lokasi").innerHTML = '<option>Pilih masjid</option>';
                }
            } else {
                document.getElementById("selectMasjid_lokasi").innerHTML = '<option>Pilih masjid</option>';
            }
        }
        xmlhttp.open("GET", "../../function/script/select/masjidByWilayah.php?idWilayah=" + str, true);
        xmlhttp.send();
    }
}


function getMasjidByWilayahAngkot(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("selectMasjid_angkot").innerHTML = xmlhttp.responseText;

                if (xmlhttp.responseText == '') {
                    document.getElementById("selectMasjid_angkot").innerHTML = '<option>Pilih masjid</option>';
                }
            } else {
                document.getElementById("selectMasjid_angkot").innerHTML = '<option>Pilih masjid</option>';
            }
        }
        xmlhttp.open("GET", "../../function/script/select/masjidByWilayah.php?idWilayah=" + str, true);
        xmlhttp.send();
    }
}




function ubahAdminMasjidAU(str, offset) {

    document.getElementById("ubahAdminMasjidAU").innerHTML = '<div class="kolom box span-12"><div class="judul center box span-2">Nomer</div><div class="judul center box span-2">Username</div><div class="judul center box span-6">Masjid</div><div class="judul center box span-2">Aksi</div></div>';

    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ubahAdminMasjidAU").innerHTML += xmlhttp.responseText;
                if (xmlhttp.responseText) {
                }
            }
        }

        xmlhttp.open("GET", "../../function/script/select/ubahAdminMasjid.php?idWilayah=" + str + '&offset=' + offset, true);
        xmlhttp.send();
    }
}
function ubahMasjidAU(str, offset) {

    document.getElementById("ubahMasjidAU").innerHTML = '<div class="kolom box span-12"><div class="judul center box span-2">Nomer</div><div class="judul center box span-2">Username</div><div class="judul center box span-5-3">Masjid</div><div class="judul center box span-2-5">Aksi</div></div>';

    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ubahMasjidAU").innerHTML += xmlhttp.responseText;
                if (xmlhttp.responseText) {
                }
            }
        }

        xmlhttp.open("GET", "../../function/script/select/ubahMasjid.php?idWilayah=" + str + '&offset=' + offset, true);
        xmlhttp.send();
    }
}

function ubahBeritaMasjidAU(wilMasjid, str, offset) {

    document.getElementById("ubahBeritaMasjidAU").innerHTML = '<div class="kolom box span-12"><div class="judul center box span-1-5">Nomor</div><div class="judul center box span-2-5">Tanggal Post</div><div class="judul center box span-6">Judul Berita</div><div class="judul center box span-2-5">Aksi</div></div>';

    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ubahBeritaMasjidAU").innerHTML += xmlhttp.responseText;
                if (xmlhttp.responseText) {
                }
            }
        }

        xmlhttp.open("GET", "../../function/script/select/ubahBeritaMasjid.php?wilMasjid=" + wilMasjid + "&idWilayah=" + str + '&offset=' + offset, true);
        xmlhttp.send();
    }
}

function getBerita(idMasjid, offset) {
    var idWilayah = $('#idWilayahMasjid').val();
    ubahBeritaMasjidAU(idWilayah, idMasjid, offset);
}



function ubahVideoInformasiMasjidAU(wilMasjid, str, offset) {

    document.getElementById("ubahVideoInformasiMasjidAU").innerHTML = '<div class="kolom box span-12"><div class="judul center box span-1-5">Nomor</div><div class="judul center box span-2-5">Masjid</div><div class="judul center box span-6">Judul video</div><div class="judul center box span-2-5">Aksi</div></div>';

    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ubahVideoInformasiMasjidAU").innerHTML += xmlhttp.responseText;
                if (xmlhttp.responseText) {
                }
            }
        }

        xmlhttp.open("GET", "../../function/script/select/ubahVideoInfomasiMasjidAU.php?wilMasjid=" + wilMasjid + "&idWilayah=" + str + '&offset=' + offset, true);
        xmlhttp.send();
    }
}

function getVideo(idMasjid, offset) {
    var idWilayah = $('#idWilayahMasjid').val();
    ubahVideoInformasiMasjidAU(idWilayah, idMasjid, offset);
}