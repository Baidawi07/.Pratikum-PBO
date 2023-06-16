<?php
class Baju{
     public $nama="";
     public $harga=0;

     function setNama($n){
         $this->nama = $n;
     }
     function setHarga($h){
         $this->harga = $h;
     }
     function getNama(){
         return $this->nama;
     }
     function getHarga(){
         return $this->harga;
     }
}
class Perabotan{
     public $nama="";
     public $harga=0;

     function setNama($n){
         $this->nama = $n;
     }
     function setHarga($h){
         $this->harga = $h;
     }
     function getNama(){
         return $this->nama;
     }
     function getHarga(){
         return $this->harga;
     }
}
class Transaksi{
     public $baju;
     public $prb;

     function __construct($b, $p){
      $this->baju = $b;
      $this->prb = $p;
     }

     function getHargaPerabotan(){
         return $this->prb->getHarga();
     }
     function getHargaBaju(){
         return $this->baju->getHarga();
     }

     function totalBelanja($jb, $jp){
         return ($this->getHargaBaju()*$jb) + ($this->getHargaPerabotan()*$jp);
     }
}

$baju = new Baju();
$prb = new Perabotan();
echo "Masukkan nama anda : ";
$baju->setNama(trim(fgets(STDIN)));
$prb->setNama($baju->nama);

echo "Masukkan harga baju : ";
$baju->setHarga(trim(fgets(STDIN)));

echo "Masukkan jumlah baju : ";
$jumlahBaju = trim(fgets(STDIN));

echo "Masukkan harga perabotan : ";
$prb->setHarga(trim(fgets(STDIN)));
echo "Masukkan jumlah perabotan : ";
$jumlahPrb = trim(fgets(STDIN));

$total = new Transaksi($baju,$prb);
echo "Total belanja $baju->nama : ";
echo $total->totalBelanja($jumlahBaju, $jumlahPrb);
?>