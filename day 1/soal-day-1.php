<?php
    //no1
    $a = "ikan";
    $b = "ikan";

    if($a == $b){
        echo 'nilai sama';
    }else{
        echo 'nilai berbeda';
    };
    echo "</br>";
    //no2
    $a = "8";
    $b = "9";

    if($a == $b){
        echo 'nilai sama';
    }else{
        echo "nilai terbesar ".(max(8,9));
    };
    echo "</br>";
    //no3
    $a = 83;
    
    if($a > 78) {
        echo 'kompeten';
    }else{
        echo 'tidak kompeten';
    }
    echo "</br>";
    //no4
     $a = -9;
    
     if($a < 0) {
        echo 'Negatif';
     }else{
        echo 'Positif';
    }
    echo "</br>";
    //no5
     $a = 136;
        
     if($a % 2 == 0) {
         echo 'Ganjil';
     }else{
         echo 'Genap';
     }
     echo "</br>";
     //no6
    $a = 176;
            
    if($a % 6  == 0) {
        echo 'Ya';
    }else{
        echo 'Tidak';
    }
    echo "</br>";
    //no7
    $a = 7;
            
    if(is_numeric ($a)) {
        echo 'string';
    }else{
        echo 'numeric';
    }   
    echo "</br>";
    //no8
    $b = "";
            
    if(is_null($b)) {
        echo 'tidak bervelue';
    }else{
        echo 'bervalue';
    }   
    echo "</br>";
    //no9 
    $a = 16;
    
    if($a > 17) {
        echo 'sudah';
     }else{
        echo 'belum';
    }
    echo "</br>";
    //no10
    $belanja = 154000;
    $diskon = 0.7;
    if($belanja > 100000){
        echo "jumlah bayar = " .$belanja-($belanja * $diskon);
    }else{
        echo "tidak mendapatkan diskon";
    }
    echo "</br>";

    //pembahasan
    $a = 0;
    
    if($a > 0) {
        echo 'Positif';
    }else if($a < 0){
        echo 'Negatif';
    }else{
        echo "Cacah";
    }
    echo "</br>";

    $a = -9;
    
    if ($a < 0) {
            echo 'Negatif ';
       if ($a > 10) {
            echo 'ya';
       } else {
            echo 'Tidak';
       }
    } else {
        echo 'Positif ';
   }


?>