<?php
class Persegi_Panjang
{

  public $panjang;
  public $lebar;

  public function __construct($lebar, $panjang)
  {
    $this->panjang = $panjang;
    $this->lebar = $lebar;
  }

  
  public function hitungLuas()
  {
    return $this->panjang * $this->lebar;
  }
}

$persegiPanjang = new Persegi_Panjang(25, 10);
echo "Luas persegi panjang: " . $persegiPanjang->hitungLuas();
