<?php

require_once 'Transportasi.php';

class Kapal implements Transportasi
{
    public function Info()
    {
        echo 'Kapal Titanic memiliki warna Hitam Putih dan bisa mengangkut sekitar 1100 penumpang';
    }
}
