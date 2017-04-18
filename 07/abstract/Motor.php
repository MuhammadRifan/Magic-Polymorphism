<?php

require_once 'Kendaraan.php';

// ini adalah salah satu contoh class turunan dari abstract class
// kita hanya perlu menambah kata extends dan nama abstract class tersebut
// di class turunan inilah kita bisa menggunakan abstract class

class Motor extends Kendaraan
{
    // kita harus menggunakan nama method yang sama dengan abstract method sebelumnya, jika tidak maka akan terjadi error
    public function nyalakanMesin()
    {
        echo 'Mesin menyala....'.PHP_EOL;
    }
}
