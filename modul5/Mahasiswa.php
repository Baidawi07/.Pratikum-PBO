<?php
class Mahasiswa{
  private string $npm;
  private string $nama;
  private int $prodi = 0;
  public static string $uneversitas = "uneversitas Madura";

  public function __construct(string $npm, string $nama,){
    $this->npm = $npm;
    $this->nama = $nama;
  }

  public function setProdi(int $prodi): void {
    $this->prodi = $prodi;
  }

  public static function ubahKampus(string $kampus): void{
    Mahasiswa::$uneversitas = $kampus;
  }

  public function tampil(){
    echo "npm siswa : ". $this->npm .PHP_EOL;
    echo "nama sisawa : " .$this->nama .PHP_EOL;
    echo "nama prodi : " .prodi::getNamaProdi($this->prodi).PHP_EOL;
    echo "nama universitas : " .Mahasiswa::$uneversitas;
  }
}