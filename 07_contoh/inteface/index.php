<?php

require 'Pesawat.php';
require 'Kapal.php';

$Pesawat = new Pesawat();
$Pesawat->Info();

echo "<br>";

$Kapal = new Kapal();
$Kapal->Info();
