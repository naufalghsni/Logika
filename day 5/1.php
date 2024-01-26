<?php

function datadiri($bb, $tb){
    $imt = $bb / (($tb/100) **2);
    
    if($imt < 18.5) {
        echo 'Berat badan kurang';
    }else if($imt > 18.5 && $imt <= 22.9){
        echo 'Berat badan normal';
    }else if($imt > 22.9 && $imt <= 24.9){
        echo 'Berat badan lebih';
    }else{
        echo "Obesitas";
    }
}

datadiri(65, 178);

function hari($tanggal){
    $day = date('l', strtotime($tanggal));

    if ($day == 'Monday') {
        echo 'Senin';
    }elseif($day == 'Tuesday'){
        echo 'Selasa';
    }elseif($day == 'Wednesday'){
        echo 'Rabu';
    }elseif($day == 'Thusday'){
        echo 'Kamis';
    }elseif($day == 'Friday'){
        echo 'Jumat';
    }elseif($day == 'Saturday'){
        echo 'Sabtu';
    }else{
        echo 'Minggu';
    }
}

hari('2024-01-22');

?>