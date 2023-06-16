<?php
class BangunDatar4{
     protected float $panjang;
     protected float $lebar;

     public function getPanjang(){
          return $this->panjang;
     }
     public function setPanjang(float $panjang){
          $this->panjang = $panjang < 1 ? 1 : $panjang;
     }
     public function getLebar(){
          return $this->lebar;
     }
     public function setLebar(float $lebar){
          $this->lebar = $lebar < 1 ? 1 : $lebar;
     }
     public function getLuas(){
          return $this->panjang * $this->lebar;
     }
}

class SegiTiga extends BangunDatar4{

     public function getAlas(){
          return $this->panjang;
     }
     public function setAlas(float $p){
          parent::setPanjang($p);
     }

     public function getTinggi(){
          return $this->lebar;
     }
     public function setTinggi(float $l){
          parent::setLebar($l);
     }

     function getLuas(){
          return parent::getLuas()/2;
     }
}

class Trapesium extends BangunDatar4{
     protected float $panjangAtas;

     public function getPanjangAtas(){
          return $this->panjangAtas;
     }
     public function setPanjangAtas(float $p){
          $this->panjangAtas = $p <1 ? 0 : $p;
     }

     function getLuas(){
          return 1/2 * $this->lebar * ($this->panjang + $this->panjangAtas);
     }
}

$balok = new BangunDatar4();
$balok->setPanjang(4);
$balok->setLebar(2);
echo "luas balok : " .$balok->getLuas().PHP_EOL;

$segi_tiga = new SegiTiga();
$segi_tiga->setPanjang(3);
$segi_tiga->setTinggi(7);
echo "luas Segitiga : ".$segi_tiga->getLuas().PHP_EOL;

$trapesium = new Trapesium();
$trapesium->setPanjangAtas(4);
$trapesium->setLebar(3);
$trapesium->setPanjang(4);
echo "luas Trapesium : ".$trapesium->getLuas();
