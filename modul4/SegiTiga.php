<?php
class SegiTiga extends BangunDatar{
     
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