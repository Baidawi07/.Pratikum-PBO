<?php
spl_autoload_register(function($class) {
  include $class . '.php';
});

//dengan parameter
$balok = new BangunDatar3(7,2);
echo "luas balok : ".$balok->getLuas();
//tanpa parameter
echo PHP_EOL;
$balok = new BangunDatar3();
echo "luas balok : ".$balok->getLuas();
