<?php
$totalBelanja = 155000;
$voucher = 10000;

if ($totalBelanja > 150000) {
    echo "Anda mendapatkan voucher potongan harga sebesar ".$voucher." dan 1 dus permen kaki";
}else if($totalBelanja > 100000 ){
    echo "Anda mendapatkan voucher potongan harga sebesar" .$voucher;
}else{
    echo "Anda tidak mendapatkan voucher";
}
?>