<?php
class Parkiran{
     private int $j_sepeda;
     private int $j_mobil;
     private int $kapasitas_parkiran;

     public function getJ_sepeda(): int {
          return $this->j_sepeda;
     }
     public function set_sepeda(int $jumlah){
          $this->j_sepeda = $jumlah;
     }
     public function getJ_mobil(): int {
          return $this->j_mobil;
     }
     public function set_mobil(int $jumlah){
          $this->j_mobil = $jumlah;

     }
     public function getKapasitas_parkiran(): int{
          return $this->kapasitas_parkiran;
     }
     public function setKapasitas_parkiran(int $jumlah){
          $this->kapasitas_parkiran = $jumlah;
     }
     public function NambahParkiran($jumlah){
          $total = $this->getKapasitas_parkiran() + $jumlah; 
          return $total;
     }
     public function GurangiParkiran($jumlah){
          $total = $this->getKapasitas_parkiran() - $jumlah;
          return $total;
     }
}
$parkiran1 = new Parkiran();
$parkiran1->setKapasitas_parkiran(30);
$parkiran1->set_sepeda(20);
$parkiran1->set_mobil(8);
echo "kapasitas parkiran : ".$parkiran1->getKapasitas_parkiran().PHP_EOL;
echo "jumlah sepeda : ".$parkiran1->getJ_sepeda().PHP_EOL;
echo "jumlah mobil : ".$parkiran1->getJ_mobil().PHP_EOL;
echo "jumlah parkiran Saat ini : ".$parkiran1->NambahParkiran(2).PHP_EOL;


echo PHP_EOL;

$parkiran2 = new Parkiran();
$parkiran2->setKapasitas_parkiran(30);
$parkiran2->set_sepeda(20);
$parkiran2->set_mobil(9);
echo "kapasitas parkiran : ".$parkiran2->getKapasitas_parkiran().PHP_EOL;
echo "jumlah sepeda : ".$parkiran2->getJ_sepeda().PHP_EOL;
echo "jumlah mobil : ".$parkiran2->getJ_mobil().PHP_EOL;
echo "jumlah parkiarn Saat ini : ".$parkiran2->GurangiParkiran(5).PHP_EOL;
