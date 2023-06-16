<?php
spl_autoload_register(function($class) {
  include $class . '.php';
});

$luas = new BangunDatar();
$luas->setPanjang(2);
$luas->setLebar(3);
echo "Luas BangunDtar = ".$luas->getLuas().PHP_EOL;

// $luas = new SegiTiga();
// $luas->setPanjang(2);
// $luas->setLebar(3);
// echo "Luas segitiga = ".$luas->getLuas().PHP_EOL;

// $luas = new Trapesium();
// $luas->setPanjangAtas(4);
// $luas->setPanjang(2);
// echo "Luas trapesium = ".$luas->getLuas().PHP_EOL;