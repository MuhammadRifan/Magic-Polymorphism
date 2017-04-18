<?php

class User
{
    private $email;
    private $password;

    // kali ini kita akan menggunakan magic method
    // magic method adalah sebuah method khusus yang yang sudah disediakan secara default oleh php
    // ciri2 magic method, yaitu penulisan yang nama method yang selalu diawali dengan 2 underscore ( _ )

    // pertama __construct, construct adalah magic method yang akan selalu berjalan secara otomatis
    // ketika class ini, dipanggil atau digunakan
    // construct method bisa diisi apapun

    public function __construct(array $params = array())
    {
        // pada kasus ini kita akan menggunakan method ini untuk mengisi property secara otomatis
        // count() = menghitung jumlah isi property
        if (count($params)) {
            foreach ($params as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    // yang kedua __set, sesuai namanya, set berguna untuk membuat atau mengisi property
    public function __set($name, $value)
    {
        // pada kasus ini kita akan mengisi property yang tidak bisa diisi diluar class ( private )
        if (isset($this->$name)) {
          $this->$name = $value;
        }
    }

    public function login()
    {
        return 'logging in ..';
    }

    public function logout()
    {
        return 'logging out ...';
    }

    public function setPassword($string)
    {
        $this->password = $string;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setEmail($string)
    {
        $this->email = $string;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
