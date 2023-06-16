<?php
spl_autoload_register(function ($class) {
  include $class . '.php';
});

$k = new Kotak(4, 6);
echo "Luas Kotak : ".$k->getLuas().PHP_EOL;

$kubus = new Kotak();
$kubus->setPanjang(4);
$kubus->setLebar(4);
echo "Luas Kubus : ".$kubus->getLuas().PHP_EOL;

$balok = new Balok(5, 6, 7);
echo "Luas Balok : ". $balok->getLuas().PHP_EOL;
echo "valume Balok : ". $balok->getVolume().PHP_EOL;

$ling = new Lingkaran();
$ling->setPanjang(4);
$ling->setLebar(4);
echo "Luas Lingkaran : ".$ling->getLuas().PHP_EOL;

$cut = new Kerucut();
$cut->setPanjang(6);
$cut->setLebar(2);
$cut->setTinggi(4);
echo "Volume Kerucut : ".$cut->getVolume().PHP_EOL;

$bung = new Tabung();
$bung->setPanjang(3);
$bung->setLebar(4);
$bung->setTinggi(5);
echo "Volume Tabung : ".$bung->getVolume().PHP_EOL;
echo "Luas Tabung : ".$bung->hitungLuas().PHP_EOL;    
