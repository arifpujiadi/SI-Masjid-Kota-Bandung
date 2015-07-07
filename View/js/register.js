$(document).ready(function () {
    $(".header").load("header.php");
    $(".footer").load("footer.php");

    var statUsername = false;
    $("#username").keyup(function () {
        if ($("#username").val().length > 1) {
            $.post('../../function/script/add/addUser.php', {username: $(this).val()}, function (data) {
                data = JSON.parse(data);
                if (data.code === 400) {
                    $('#avail-notif').css('color', 'red');
                    $('#avail-notif').text('Username terpakai');
                    statUsername = false;

                } else if (data.code === 200) {
                    $('#avail-notif').css('color', 'green');
                    $('#avail-notif').text('Username tersedia');
                    statUsername = true;
                }
                if ($('#username').val().length === 0) {
                    $('#avail-notif').text(" ");
                    statUsername = false;
                }
            });
        }
    });

    var statPassword = false;
    $("#password").keyup(function () {
        var status = null;
        if ($("#password").val().length > 0 && $("#password").val().length < 8) {
            $('#password-notif').css('color', 'red');
            $('#password-notif').html('Password harus terdiri dari min. 8 karakter');
            statPassword = false;
        } else {
            var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
            var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
            var enoughRegex = new RegExp("(?=.{6,}).*", "g");

            if (false === enoughRegex.test($(this).val())) {
                $('#password-notif').html('Kurang');
                statPassword = false;
            } else if (strongRegex.test($(this).val())) {
                $('#password-notif').css('color', 'green');
                $('#password-notif').html('Kualitas Password Baik');
                statPassword = true;
            } else if (mediumRegex.test($(this).val())) {
                $('#password-notif').css('color', '#aa7722');
                $('#password-notif').html('Kualitas Password Cukup');
                statPassword = true;
            } else {
                $('#password-notif').css('color', 'red');
                $('#password-notif').html('Kualitas Password Kurang');
                statPassword = false;
            }

            if ($('#password').val().length === 0) {
                $('#password-notif').html(' ');
                statPassword = false;
            }
        }
    });

    $('#confirmPassword').keyup(function () {
        var pass = $('#password').val();
        var confirm = $('#confirmPassword').val();

        if ($('#password').val().length === 0) {

        } else {

            if (pass !== confirm) {
                $('#confirm-notif').css('color', 'red');
                $('#confirm-notif').text('Password tidak cocok');
                $('#submit-button').attr('disabled', 'disabled');
            } else {
                $('#confirm-notif').css('color', 'green');
                $('#confirm-notif').text('Password cocok');
                $('#submit-button').removeAttr('disabled');
            }
        }
        if ($('#confirmPassword').val().length === 0) {
            $('#confirm-notif').text('');
        }

    });

    $('#submit-button').click(function (e) {
        e.preventDefault();
        var notFilled = 0;
        $('.form').each(function () {
            if ($(this).val() === '') {
                ++notFilled;
            }
        });
        if (notFilled > 0) {
            alert('Data tidak boleh ada yang kosong, silahkan untuk mencoba kembali.');
        } else {
            if (checkValidasiPassword() && statUsername && statPassword && checkValidasiEmail() && !checkInput('RT', 'RTAlert') && !checkInput('RW', 'RWAlert') && !checkInput('Telp', 'TelpAlert')) {
                $('#formRegister').submit();
            } else {
                if (statUsername===false) {
                    $('#avail-notif').css('color', 'red');
                    $('#avail-notif').text('Username terpakai');
                } else {
                    $('#avail-notif').text(' ');
                }
                if (!checkValidasiPassword()) {
                    alert('Harap cek kembali kombinasi password Anda (min. 8 karakter)');
                    $('#avail-notif').css('color', 'red');
                    $('#avail-notif').html('  Email tidak valid');
                } else {
                    $('#avail-notif').html('  ');
                }
                if (!checkValidasiEmail()) {
                    $('#emailAlert').css('color', 'red');
                    $('#emailAlert').html('  Email tidak valid');
                } else {
                    $('#emailAlert').html('  ');
                }
                if (checkInput('RT', 'RTAlert')) {
                    $('#RTAlert').css('color', 'red');
                    $('#RTAlert').html('  Harap masukkan angka');
                } else {
                    $('#RTAlert').html('  ');
                }
                if (checkInput('RW', 'RWAlert')) {
                    $('#RWAlert').css('color', 'red');
                    $('#RWAlert').html('  Harap masukkan angka');
                } else {
                    $('#RWAlert').html('  ');
                }
                if (checkInput('Telp', 'TelpAlert')) {
                    $('#TelpAlert').css('color', 'red');
                    $('#TelpAlert').html('  Harap masukkan angka');
                } else {
                    $('#TelpAlert').html('  ');
                }
            }
        }
    });

    function checkValidasiPassword() {
        var pass = document.getElementById('password').value;
        var confPass = document.getElementById('confirmPassword').value;
        var validPass = 0;
        if (pass.length >= 8) {
            ++validPass;
        }
        if (pass === confPass) {
            ++validPass;
        }
        if (confPass.length >= 8) {
            ++validPass;
        }
        if (validPass === 3) {
            return true;
        }
        return false;
    }

    function checkInput(inputID, spanID) {
        var input = $('#' + inputID);
        return isNaN(input.val());
    }

    function checkValidasiEmail() {
        var email = document.getElementById('idEmail').value + "";
        var domain = new Array(".com", ".co.id", ".ac.id");
        var mail = new Array("gmail", "yahoo", "hotmail", "rocketmail");
        var emailReg = new RegExp("^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$");
        if (emailReg.test(email)) {
            return true;
        } else {
            return false;
        }
    }
});