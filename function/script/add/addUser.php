<?php
require_once '../../connectDB.php';
if(isset($_POST['username'])) {
	echo json_encode(checkUsername($_POST['username']));
}

function checkUsername($username) {
    $search = "SELECT * FROM user WHERE username LIKE '$username'";
    $hasilquery = mysql_query($search);
    $result = mysql_fetch_assoc($hasilquery);

    if ($result != null) {
        //kalau ada yang sama
        $code = 400;
    } else {
        // kalau ga ada yang sama
        $code = 200;
    }
    return array("code" => $code);
}

?>