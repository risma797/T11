<?php

class Segitiga {
  
  public $alas;
  public $tinggi;

  public function __construct($alas, $tinggi) {
    $this->alas = $alas;
    $this->tinggi = $tinggi;
  }

  public function hitungLuas() {
    return 0.5 * $this->alas * $this->tinggi;
  }
}

$segitiga = new Segitiga(7, 10);
echo "Luas segitiga: " . $segitiga->hitungLuas();
