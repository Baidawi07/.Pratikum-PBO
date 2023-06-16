<?php
spl_autoload_register(function($class){
  include $class. '.php';
});
$najib = new Mahasiswa('2021520021', 'najib');
$najib->setProdi(Prodi::$INFORMATIKA);
echo $najib->tampil().PHP_EOL;

$rido = new Mahasiswa('2021520022', 'rido');
$rido->setProdi(Prodi::$TEKNIK_SIPIL);
echo $rido->tampil().PHP_EOL;

Mahasiswa::$uneversitas = 'UNIRA';
echo $najib->tampil().PHP_EOL;
//echo $najib->tampil().PHP_EOL;

// Mahasiswa::$uneversitas = 'Univ. Madura';
// echo $najib->tampil().PHP_EOL;
// echo $najib->tampil().PHP_EOL;