<?php
$Andi = 2004;
$Eko = 2001;

if($Andi %4 == 0 && $Eko %4 == 0) {
    echo 'Keduanya sama';
}elseif($Andi %4 == 0){
    echo 'Hanya Andi';
}elseif($Andi %4 == 0){
    echo 'Hanya Eko';
}else{
    echo 'Keduanya tidak';
}
?>