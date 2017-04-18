<?php

require_once 'Transportasi.php';

class Pesawat implements Transportasi
{
    public function Info()
    {
        echo 'Garuda Airlines memiliki warna Merah Putih dan bisa mengangkut sekitar 1200 penumpang';
    }
}
