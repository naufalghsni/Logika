<?php
$jamkerja = 8;
$kompensasi = 30000;
$waktukerja = 14;

if ($waktukerja > $jamkerja) {
    echo 'Kompensasi yang didapat adalah Rp: ' .$kompensasi * ($waktukerja - $jamkerja);
}else{
    echo 'Tidak mendapatkan kompensasi!';
}
?>