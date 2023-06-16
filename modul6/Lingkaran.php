<?php
class Lingkaran implements BanggunDatar {

  protected float $jari1;
  protected float $jari2;
  protected float $phi = 3.14;

  public function setPanjang(float $jari1): void {
    $this->jari1 = $jari1 < 0 ? 1 : $jari1;
  }

  public function setLebar(float $jari2): void {
    $this->jari2 = $jari2 < 0 ? 1 : $jari2;
  }

  public function getLuas(): float{
    return $this->jari1 * $this->jari2 * $this->phi;
  }
}

