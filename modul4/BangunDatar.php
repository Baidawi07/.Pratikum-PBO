<?php
class BangunDatar{
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