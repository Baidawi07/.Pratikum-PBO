<?php

class Toko{
  private float $beras ;
  private float $gula;
  private float $tepung;



 public function getTepung() {
          return $this->tepung;
     }
public function setTepung(float $tepung){
          $this->tepung = $tepung;
     }

public function getGula() {
      return $this->gula;
 }
 public function setGula(float $gula){
      $this->gula = $gula;
 }

 public function getBeras() {
  return $this->beras;
}
public function setBeras(float $beras){
  $this->beras = $beras;
}

public function belanja (){

 $tb = ($this-> beras * 20000)+($this->tepung * 18000)+($this->gula * 15000) ;
 return $tb;
}
}

$total1 = new Toko();
$total1->setBeras(2);
$total1->setTepung(1);
$total1->setGula(0.5);
echo "Total Belanja Diki : Rp. ".$total1->belanja().PHP_EOL;
echo PHP_EOL;

$total2 = new Toko();
$total2->setBeras(5);
$total2->setTepung(0.75);
$total2->setGula(7.5);
echo "Total Belanja Shinta : Rp. ".$total2->belanja().PHP_EOL;
echo PHP_EOL;