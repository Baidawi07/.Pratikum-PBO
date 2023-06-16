<?php
class Trapesium extends BangunDatar{
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