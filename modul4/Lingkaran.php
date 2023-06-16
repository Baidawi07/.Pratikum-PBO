<?php
class Lingkaran extends BangunDatar{

  public function getDiameter(){
    return $this->panjang;
  }
  public function setDiameter(float $p){
    parent::setPanjang($p);
  }
  //methot Luas = PI * (r*r) -> r = jari2
  function getLuas(): float {
    return pi() * pow($this->panjang, 2);
  }
}