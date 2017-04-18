<?php

require 'Pesawat.php';
require 'Kapal.php';

$Pesawat = new Pesawat();
$Pesawat->jumlahpenumpang = 1100;
$Pesawat->warna = 'Merah Putih';
$Pesawat->namaTransport();
$Pesawat->Info();

echo "<br>";

$Kapal = new Kapal();
$Kapal->jumlahpenumpang = 1200;
$Kapal->warna = 'Hitam Putih';
$Kapal->namaTransport();
$Kapal->Info();
