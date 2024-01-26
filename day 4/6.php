<?php

$bil = 225;
$kel_awl = 5;
$kel_akhr = 25;

$bgi_hbs = 0;

for ($i = $kel_awl; $i <= $kel_akhr; $i += 5)
    $bgi_hbs += !($bil % $i);

echo "Bilangan $bil bisa dibagi habis oleh bilangan kelipatan 5 (antara 5 hingga 25) sebanyak $bgi_hbs kali.";

?>