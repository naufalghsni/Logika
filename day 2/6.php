<?php
$bb = 65;
$tb = 178;
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
?>