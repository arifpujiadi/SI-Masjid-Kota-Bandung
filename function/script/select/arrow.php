<?php
    require_once '../../function/connectDB.php';

$adminMasjid = querySelect('*',
                      'user',
                      null,
                      '0,10 JOIN LEFT masjid');   


$adminMasjidByWilayah = '';
for($i = 0; $i < count($masjid) ; $i++){
    $adminMasjidByWilayah .= '
                                <div class="baris box span-12">
                                    <div class="nomer center box span-2">
                                        '.($i+1).'
                                    </div>
                                    <div class="isi center box span-2">
                                        '.$adminMasjid[$i]['username'].'
                                    </div>
                                    <div class="masjid inherit center box span-6">
                                        AL Ukhuwwah
                                    </div>
                                    <div class="aksi box span-2">
                                        <div class="ubah box span-12">
                                            <a class="btn btn-block btn-lg btn-ubah-inverse" href="">
                                                <img src="../img/Notification/edit.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
    ';  
}    

      
echo $adminMasjidByWilayah;
?>