<?php

$data = [
    [
        'nama' => 'Andi',
        'tahun' => '2008',
    ],
    [
        'nama' => 'Beni',
        'tahun' => '2001',
    ],
    [
        'nama' => 'Dani',
        'tahun' => '2004',
    ],
    [
        'nama' => 'Eko',
        'tahun' => '2006',
    ],
]; 

echo "Orang yang lahir di tahun kabisat adalah: ";

foreach ($data as $date) {
    $tahun = $date['tahun'];
    if ($tahun % 4 == 0) {
        echo $date['nama']. " ";
    }
}
?>