<?php
spl_autoload_register(function($class){
  include $class .'.php';
});
$segitiga = new SegiTiga();
echo "Luas Segitiga : ".$segitiga->getLuas().PHP_EOL;;

$lingkaran = new Lingkaran();
echo "Luas Lingkaran : ".$lingkaran->getLuas().PHP_EOL;

$trapesium = new Trapesium();
echo "Luas Trapesium : ".$trapesium->getLuas();