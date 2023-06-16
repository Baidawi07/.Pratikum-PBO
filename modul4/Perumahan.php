<?php
class Perumahan{
  protected $subsidi;
  protected $luxury;
  protected $victory;

public function setSubsidi($subsidi){
  $this->subsidi = $subsidi;
}
public function getSubsidi(){
  return $this->subsidi;
}
public function setLuxury($luxury){
  $this->luxury = $luxury;
}
public function getLuxury(){
  return $this->luxury;
}
public function setVictory($victory){
  $this->victory = $victory;
}
public function getVictory(){
  return $this->victory;
}
}

class Rudi extends Perumahan{
  public function setMembelivictory($victory){
    $this->victory = $victory;
  }
  public function getbelivictory(){
   return parent::setVictory($victory);
  }
  public function totalBayar(){
    return parent::getVictory() * 21/100;
  }
}

class Alex extends Perumahan{
  public function setMembeliSubsidi($subsidi){
    $this->subsidi = $subsidi;
  }
  public function getbeliSubsidi(){
   return parent::setSubsidi($subsidi);
  }
  public function totalBayar(){
    return parent::getSubsidi() * 21/100;
  }
}
$perumahan = new Perumahan();
$perumahan->setSubsidi(3000000000);
$perumahan->setLuxury(750000000);
$perumahan->setVictory(150000000);

$rudi = new Rudi();
$rudi->setMembeliVictory(300000000);
echo "total bayar Rudi ".$rudi->totalBayar().PHP_EOL;

$alex = new Alex();
$alex->setMembeliSubsidi(1500000000);
echo "total Bayar Alex ".$alex->totalBayar();