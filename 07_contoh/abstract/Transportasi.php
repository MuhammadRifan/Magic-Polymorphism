<?php

abstract class Transportasi
{
    public $jumlahpenumpang;
    public $warna;

    public function Info()
    {
        echo 'memiliki warna '.$this->warna.' dan bisa mengangkut sekitar '.$this->jumlahpenumpang.' penumpang';
    }

    abstract public function namaTransport();
}
