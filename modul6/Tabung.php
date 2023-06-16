<?php
class Tabung implements BanggunRuang{
  public float $jari;
  public float $jari1;
  public float $tinggi;
  public  $phi = 3.14;

  public function setPanjang(float $jari): void{
    $this->jari = $jari <0 ? 1 : $jari;
  }
  public function setLebar(float $jari1): void{
    $this->jari1 = $jari1 < 0 ? 1 : $jari1;
  }

  public function setTinggi(float $tinggi): void{
    $this->tinggi = $tinggi < 0 ? 1 : $tinggi;
  }

  public function getVolume(): float{
    return $this->phi * $this->jari * $this->jari1 * $this->tinggi; 
  }

  public function hitungLuas() {
    return 2 * ($this->phi * $this->jari * ($this->tinggi + $this->jari1));
  }
}