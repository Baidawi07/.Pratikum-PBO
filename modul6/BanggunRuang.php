<?php
interface BanggunRuang {
  public function setPanjang(float $panjang): void;
  public function setLebar(float $lebar) : void;
  public function setTinggi(float $tinngi) : void;
  public function getVolume() : float;

}


