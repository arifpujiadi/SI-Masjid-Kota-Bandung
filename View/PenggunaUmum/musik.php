<!DOCTYPE html>
<?php
include '../../function/connectDB.php';
?>
<html>
    <head>
        <title>Video - Musik Religi</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="../img/SIM/ico.png">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/PenggunaUmum/musik.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="col-full">
                <div class="header row">

                </div>
                <div class="content row">
                    <div class="slideVideo box">
                        <div class="col">
                            <div class="video box span-12">
                                <?php
                                $offset = 0;
                                $dataVideo = querySelect('*', 'video_musik ORDER BY tanggal_upload DESC', null, null);
                                if (isset($_GET['offset'])) {
                                    $offset = (int) $_GET['offset'];
                                } else {
                                    $offset = 0;
                                }
                                $pagination = 0;
                                $c = 0;
                                for ($i = 0; $i < count($dataVideo); $i++) {
                                    if ($i >= $offset) {
                                        if ($pagination < 8) {
                                            ?>
                                            <div class="kotakVideo box span-3">
                                                <a href="musik.php?offset=<?php echo $offset; ?>&vid<?php echo $i; ?>">
                                                    <div class="video-isi">
                                                        <div>
                                                            <?php echo $dataVideo[$i]['img'] ?>
                                                        </div>
                                                        <div class="judulvideo">
                                                            <?php
                                                            if (strlen($dataVideo[$i]['judul']) > 45) {
                                                                echo(substr($dataVideo[$i]['judul'], 0, 45) . '...');
                                                            } else {
                                                                echo($dataVideo[$i]['judul']);
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="keterangan-video">
                                                            <?php echo $dataVideo[$i]['penyanyi'] ?>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <?php
                                            $pagination++;
                                        } else {
                                            break;
                                        }
                                    }
                                    if (isset($_GET['vid' . $i])) {
                                        $c = $i;
                                    }
                                }
                                ?>
                                <div class="button box">
                                    <div class="col">
                                        <div class="box span-12">
                                            <div class="panah-kiri box span-1">
                                                <?php
                                                $offset_arrow = $offset - 1;
                                                if ($offset_arrow <= 0) {
                                                    ?>
                                                    <a href="musik.php?offset=<?php echo $offset - 8; ?>">
                                                        &nbsp;
                                                    </a>
                                                    <?php
                                                } else if ($offset_arrow > 0) {
                                                    ?>
                                                    <a href="musik.php?offset=<?php echo $offset - 8; ?>">
                                                        <img class="panah" src="../img/Panah/Kiri-2.png">
                                                    </a>

                                                    <?php
                                                }
                                                ?>
                                            </div>
                                            <div class="box span-10">&nbsp;</div>
                                            <?php
                                            if ($offset_arrow + 8 < sizeof($dataVideo)) {
                                                ?>
                                                <div class="panah-kanan box span-1">
                                                    <a href="musik.php?offset=<?php echo $offset + 8; ?>">
                                                        <img class="panah" src="../img/Panah/Kanan-2.png">
                                                    </a>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_GET['vid' . $c])) {
                    echo '<div id="vidPopup" class="vid-popup" ><div class="layer box span-12"></div><div class="pop-up box span-12">';
                    echo $dataVideo[$c]['embed'];
                    echo '</div><div id="btnKembali" class="absolute btn-ok btn-block-ok btn-lg-ok btn-inverse-ok">Kembali</div></div>';
                }
                ?>
                <div class="footer row">

                </div>
            </div>
        </div>
        <script src="../js/jquery-2.1.0.min.js"></script>
        <script src="../js/main.js"></script>
        <script>
            $(document).ready(function () {
                $(".header").load("header.php");
                $(".footer").load("footer.php");
                
                $("#btnKembali").on("click", function() {
                    $('div#vidPopup').hide();
                });
            });
        </script>
    </body>
</html>
