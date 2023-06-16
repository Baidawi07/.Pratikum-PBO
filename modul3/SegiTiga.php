<?php
class SegiTiga{
    protected float $alas;
    protected float $tinggi;

    public function __construct(float $a = 9, float $t = 4){
        $this->alas = $a;
        $this->tinggi = $t;
    } 
    public function getLuas(){
        return (1/2*$this->alas*$this->tinggi);
    }
}
class Lingkaran{
    protected float $pi;
    protected float $jari_jari;

    public function __construct(float $p = 3.14, float $j = 4){
        $this->pi = $p;
        $this->jari_jari = $j;
    }
    function getLuas(){
        return $this->pi*$this->jari_jari*$this->jari_jari;
    }
}
class Trapesium{
    protected float $alas1;
    protected float $alas2;
    protected float $tinggi;

    public function __construct(float $a1 = 9, float $a2 = 8, float $t = 4){
        $this->alas1 = $a1;
        $this->alas2 = $a2;
        $this->tinggi = $t;
    }
    public function getLuas(){
        return 1/2 * ($this->alas1 + $this->alas2) * $this->tinggi;
    }
}