<?php
class BangunDatar3{
     protected float $panjang;
     protected float $lebar;

     public function __construct(float $p=10, float $l=10){
          $this->panjang = $p;
          $this->lebar = $l;
     }
     public function getPanjang(): float {
          return $this->panjang;
     }
     public function setPanjang(float $panjang): void {
          if ($panjang < 1){
               $this->panjang = 1;
          }else{
               $this->panjang = $panjang;
          }
     }
     public function getLebar(): float{
          return $this->lebar;
     }
     public function setLebar(float $lebar){
          $this->lebar = $lebar < 1 ? 1 : $lebar;
     }
     public function getLuas(): float{
          return $this->panjang * $this->lebar;
     }
}






