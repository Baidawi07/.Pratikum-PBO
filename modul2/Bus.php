<?php
class Bus{
     private int $J_penumpang;
     private int $kapasitas;

     public function getJ_penumpang(): int {
          return $this->j_penumpang;
     }
     public function setJ_penumpang(int $jumlah): void {
          $this->j_penumpang = $jumlah;
     }
     public function getKapasitas(): int{
          return $this->kapasitas;
     }
     public function setKapasitas(int $kapasitas): void{
          $this->kapasitas = $kapasitas;
     }
     public function NambahPenumpang($jumlah){
          $total = $this->getJ_penumpang() + $jumlah;
          if($total > $this->kapasitas ){
               echo "penumpang penuh sudah melebihi kapasitas ";
          }else{
               return $total;
          }
     }
     public function GurangiPenumpag($jumlah){
          $total = $this->getJ_penumpang() - $jumlah;
          if($total > $this->kapasitas ){
               echo "penumpang penuh sudah melebihi kapasitas ";
          }else{
               return $total;
          }
     }
}
$bus1 = new Bus();
$bus1->setKapasitas(15);
$bus1->setJ_penumpang(9);
echo "kapasitas bus : ".$bus1->getKapasitas().PHP_EOL;
echo "jumlah penumpang bus : ".$bus1->getJ_penumpang().PHP_EOL;
echo "jumlah penumpang Setelah di kurangi : ".$bus1->GurangiPenumpag(5).PHP_EOL;

echo PHP_EOL;
echo PHP_EOL;
$bus2 = new Bus();
$bus2->setKapasitas(15);
$bus2->setJ_penumpang(12);
echo "kapasitas bus : ".$bus2->getKapasitas() .PHP_EOL;
echo "jumlah penumpang bus : ".$bus2->getJ_penumpang().PHP_EOL;
echo $bus2->NambahPenumpang(6).PHP_EOL;


