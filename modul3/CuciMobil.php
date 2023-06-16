<?php
class CuciMobil{
  private float $tarif;
  private int $stemp;
  private int $bulan;

  public function __construct(float $tarif, int $bulan, int $stemp){
    $this->tarif = $tarif;
    $this->stemp = $stemp;
    $this->bulan = $bulan;
  }
  public function getTarif(){
    return $this->tarif;
  }
  public function getStemp(){
    return $this->stemp;
  }
  public function getBulan(){
    return $this->bulan;
  }
  public function totalUang(){
    $snack = ($this->getBulan() * 6) / $this->getStemp() * 10000;
    $pendapatan = $this->getTarif() * ($this->bulan * 6) + $snack;
    return $snack  ;
  }
}
$total = new CuciMobil(30000, 3, 3);
echo "pendapatan bapak rustam selama 3 bulan Rp.".$total->totalUang();
