<?php

// pada folder ini kita akan memahami Polymorphism yang menggunakan abstract

require 'Motor.php';
require 'Mobil.php';

$motor = new Motor();
$motor->nyalakanMesin();
echo $motor->ambilDetailKendaraan();

echo "<br><br>";

$mobil = new Mobil();
$mobil->nyalakanMesin();
$mobil->platNomor = 'L 1838 YJ';
$mobil->namaPemilik = 'Antok Prasetyo';
echo $mobil->ambilDetailKendaraan();
