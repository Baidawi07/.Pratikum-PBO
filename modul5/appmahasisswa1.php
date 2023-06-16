<?php
spl_autoload_register(function($class){
  include $class. '.php';
});

do{
$siswa = new Mahasiswa1();
echo "Masukkan NIM anda : ";
$siswa->setNim (trim(fgets(STDIN)));
echo "Masukkan nama anda : ";
$siswa->setNama (trim(fgets(STDIN)));

echo "Masukkan prodi anda : ";
$siswa->setProdi (trim(fgets(STDIN)));

echo "Masukkan alamat anda : ";
$siswa->setAlamat (trim(fgets(STDIN)));

echo "Masukkan Email anda : ";
$siswa->setEmail (trim(fgets(STDIN)));

echo "---------BIODATA SISWA-------------".PHP_EOL;
echo $siswa->getTampil();

echo "pilih y untuk input data lagi : ";
$a = trim(fgets(STDIN));
}while ($a == 'y');

