<?php

session_start();
require_once '../../connectDB.php';

if (isset($_POST['adminmasjid_hapusinbox_submit'])) {
    if (count($_SESSION['pesan']) > 0) {
        if (isset($_POST['msg']) > 0) {
            $msglist = $_POST['msg'];

            for ($i = 0; $i < count($msglist); $i++) {
                queryDelete('pesan', 'id_pesan=' . $msglist[$i]);
                echo $msglist[$i];
            }
            
            header('location:http://localhost/SIMasjid/view/AdminMasjid/inbox.php?status=true');
        } else {
            header('location:http://localhost/SIMasjid/view/AdminMasjid/inbox.php?status=false');
        }
    }
}
?>