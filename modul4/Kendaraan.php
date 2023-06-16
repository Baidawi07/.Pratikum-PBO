<?php
class Kendaraan{
  protected string $jenis;
  protected int $jumlah_penumpang;
  protected float $biaya_tiket;
  protected float $biaya_perpenumpang;
  
  public function __construct($jenis, $jumlah_p = 0, $biaya_t = 0, $biaya_p = 0){
    $this->jenis = $jenis;
    $this->jumlah_penumpang = $jumlah_p;
    $this->biaya_tiket = $biaya_t;
    $this->biaya_perpenumpang = $biaya_p;
  }
  
    public function getJenis(){
      return $this->jenis;
    }
    public function getJumlahPenumpang(){
      return $this->jumlah_penumpang;
    }
    public function getBiayaTiket(){
      return $this->biaya_tiket;
    }
    public function getBiayaPerpenumpang(){
      return $this->biaya_perpenumpang;
    }
}

class Bus extends Kendaraan{
  public function __construct($jenis, $jumlah_p, $biaya_t, $biaya_p){
    parent::__construct($jenis, $jumlah_p, $biaya_t, $biaya_p);
  }
  public function pembayaranBus(){
    //Mencari 5% dari pembayaran
    $persen = (parent::getBiayaPerpenumpang() + parent::getBiayaTiket()) * 5/100 * parent::getJumlahPenumpang();
    $total = (parent::getBiayaPerpenumpang() + parent::getBiayaTiket()) * parent::getJumlahPenumpang() + $persen;
    return $total; 
  }

}

class MiniBus extends Kendaraan{
  public function __construct($jenis, $jumlah_p, $biaya_t, $biaya_p){
    parent::__construct($jenis, $jumlah_p, $biaya_t, $biaya_p);
  }
  public function pembayaranMiniBus(){
    //Mencari 2% dari pembayaran
    $persen = (parent::getBiayaPerpenumpang() + parent::getBiayaTiket()) * 2/100 * parent::getJumlahPenumpang();
    $total = (parent::getBiayaPerpenumpang() + parent::getBiayaTiket()) * parent::getJumlahPenumpang() + $persen;
    return $total;
  }
}

class Mobil extends Kendaraan{
  public function __construct($jenis, $jumlah_p, $biaya_t, $biaya_p){
    parent::__construct($jenis, $jumlah_p, $biaya_t, $biaya_p);
  }
  public function pembayaranMobil(){
    $total = (parent::getBiayaPerpenumpang() + parent::getBiayaTiket()) * parent::getJumlahPenumpang();
    return $total;
  }
}

class SepadaMotor extends Kendaraan{
  public function __construct($jenis, $jumlah_p, $biaya_t, $biaya_p){
    parent::__construct($jenis, $jumlah_p, $biaya_t, $biaya_p);
  }
  public function pembayaranSepdaMotor(){
    $total = (parent::getBiayaPerpenumpang() + parent::getBiayaTiket()) * parent::getJumlahPenumpang();
    return $total;
  }
}

$bus = new Bus('BUS', 10, 5000, 15000);
echo "Total Pembayaran Bus Rp.". number_format($bus->pembayaranBus(), 0, '.', '.'). PHP_EOL;;

$mini_bus = new MiniBus('MINI BUS', 10, 5000, 15000);
echo "Total Pembayaran Mini Bus RP.". number_format($mini_bus->pembayaranMiniBus(), 0, '.', '.'). PHP_EOL;

$mobil = new Mobil('MOBIL', 10, 5000, 15000);
echo "Total Pembayaran Mobil Rp.". number_format($mobil->pembayaranMobil(), 0, '.', '.'). PHP_EOL;

$sepede = new SepadaMotor('Sepada Motor', 10, 5000, 15000);
echo "Total Pembayaran Sepada Motor Rp.". number_format($sepede->pembayaranSepdaMotor(), 0, '.', '.');
