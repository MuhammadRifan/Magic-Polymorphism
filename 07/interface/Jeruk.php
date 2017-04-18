<?php

require 'Buah.php';

// jika pada abstract kita menggunakan extends maka di interface kita menggunakan implements

class Jeruk implements Buah
{
    public function ambilWarna()
    {
        echo 'Warna Jeruk adalah Orange';
    }
}
