<?php

// kita akan menggunakan abstract class sebagai kepala class
// abstract class adalah class yang tidak nyata, class ini tidak bisa dijadikan object
// jadi hanya berperan sebagai kepala untuk class turunannya
// oleh karena itu abstract class harus memiliki turunan

abstract class Kendaraan
{
    public $platNomor;
    public $namaPemilik;

    public function ambilDetailKendaraan()
    {
        return 'Kendaraan dengan Plat Nomor : '.strtoupper($this->platNomor).
            ' dengan Nama Pemilik : '.ucwords($this->namaPemilik).PHP_EOL;
         // strtoupper >> membuat agar semua char yang ada menjadi CAPSLOCK
         // ucwords >> membuat semua huruf yang ada di awal suku kata menjadi CAPSLOCK
         // PHP_EOL >> untuk membuat baris baru
    }

    // abstract method adalah cara yang memaksa agar semua class turunan memiliki method tersebut
    abstract public function nyalakanMesin();
}
