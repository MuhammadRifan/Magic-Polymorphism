<?php

class Mobil
{
    private $warna;
    private $merk;
    private $roda;

    public function __construct(array $data = array())
    {
      if (count($data)) {
          foreach ($data as $key => $value) {
              $this->$key = $value;
          }
      }
    }

    public function __set($name, $value)
    {
      if (isset($this->$name)) { // jika nama property sudah ada maka akan mengganti isi property tersebut
        $this->$name = $value;
      } else { // jika tidak, maka akan membuat property sendiri ( public )
        $this->$name = $value;
      }
    }

    public function setWarna($warna)
    {
        $this->warna = $warna;
        return $this;
    }

    public function setMerk($merk)
    {
        $this->merk = $merk;
        return $this;
    }

    public function setRoda($roda)
    {
        $this->roda = $roda;
        return $this;
    }

    public function viewResult()
    {
      $warna = $this->warna;
      $merk = $this->merk;
      return "Mobil anda berwarna $warna, dan bermerk $merk";
    }
}
