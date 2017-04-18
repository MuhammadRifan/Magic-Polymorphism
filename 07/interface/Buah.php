<?php

// pada dasar nya, interface dan abstract hampir sama, hanya saja ada beberapa yang membedakan
// yaitu pada interface, kita tidak bisa membuat sebuah method yang memiliki isi
// jadi hanya sebuah signature, dan harus mendeklarasikan ulang, agar tidak terjadi error
// dan juga di interface kita hanya bisa di set sebagai public, tidak bisa yang lain
// lalu pada interface kita tidak bisa menambahkan property
// cara penulisan interface adalah tanpa tulisan 'class'

interface Buah
{
    public function ambilWarna();
}
