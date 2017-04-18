<?php

require 'app/User.php';
require 'app/Validator.php';
require 'app/Helper.php';

$rules = array('email' => 'required|email', 'password' => 'required|min:8');

$data = array('email' => 'budi@email.com', 'password' => '12345678');

$validator = new Validator();
if ($validator->validate($data, $rules) == true) {
    $budi = new User($data);
    // kita akan membuat sebuah object class dengan sebuah parameter yang berisi array yang sudah ditentukan sebelumnya
    // kita melakukan untuk agar magic method yang berada di ( User.php ) berjalan

    var_dump($budi);
} else {
    var_dump($validator->getErrors());
}
