<?php
class Membeli{
     private string $nama_barang;
     private int $jumlah;
     private int $perset;

     public function getNamaBarang(){
          return $this->nama_barang;    
     }
     public function setNamaBarang($jenis){
          $this->nama_barang = $jenis;
     }

     public function getJumlah(){
          return $this->jumlah;
     }
     public function setJumlah($jml){
          $this->jumlah = $jml;
     }

     public function getPerset(){
          return $this->perset;
     }
     public function setPerset($pcs){
          $this->perset = $pcs;
     }
}
$barang1 = new Membeli();
$barang1->setNamaBarang('Piring keramik');
$barang1->setJumlah(5);
$barang1->setPerset(35000);

$barang2 = new Membeli();
$barang2->setNamaBarang('Sendok');
$barang2->setJumlah(10);
$barang2->setPerset(27000);

$barang3 = new Membeli();
$barang3->setNamaBarang('garpu');
$barang3->setJumlah(10);
$barang3->setPerset(25000);

$barang4 = new Membeli();
$barang4->setNamaBarang('mangko');
$barang4->setJumlah(15);
$barang4->setPerset(13000);

$barang5 = new Membeli();
$barang5->setNamaBarang('rak piring');
$barang5->setJumlah(1);
$barang5->setPerset(734500);

echo"total jumlah pengeluaran barang sinta  : ";
echo $total = $barang1->getJumlah() + $barang2->getJumlah() + $barang3->getJumlah() + $barang4->getJumlah() + $barang5->getJumlah().PHP_EOL;
echo"total pcs pengeluaran barang sinta  : ";
echo $total = $barang1->getPerset() + $barang2->getPerset() + $barang3->getPerset() + $barang4->getPerset() + $barang5->getPerset();









