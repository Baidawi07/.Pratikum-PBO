<?php
class Kerucut implements BanggunRuang{
  public float $jari;
  public float $sisi;
  public float $tinggi;
  public float  $phi = 3.14;
  
  public function setPanjang(float $jari): void{
    $this->jari = $jari <0 ? 1 : $jari;
  }

  public function setLebar(float $sisi): void{
    $this->sisi = $sisi <0 ? 1 : $sisi;
  }

  public function setTinggi(float $tinggi): void{
    $this->tinggi = $tinggi < 0 ? 1 : $tinggi;
  }

  public function getVolume(): float{
    return ($this->phi * $this->jari * $this->jari * $this->tinggi) / 3;
  }
}

