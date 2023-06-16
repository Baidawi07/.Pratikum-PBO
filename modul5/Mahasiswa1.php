<?php
  class Mahasiswa1 extends Prodi1{
  private int $nim;
  private string $nama;
  private int $prodi = 0;
  private string $alamat;
  private string $email;
  
  final public function setNim(int $nim){
    $this->nim = $nim;
  }
  final public function setNama(string $nama){
    $this->nama = $nama;
  }
  final public function setProdi(int $prodi){
    $this->prodi = $prodi ;
  }

  final public function getNim(){
    return $this->nim;
  }
  final public function getNama(){
    return $this->nama;
  }

  public function setAlamat(string $alamat){
    $this->alamat = $alamat;
  }
  public function setEmail(string $email){
    $this->email = $email;
  }

  public function getAlamat(){
    return $this->alamat;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getTampil(){
    echo "NIM Mahasiswa : ".$this->nim.PHP_EOL;
    echo "Nama mahasiswa : ".$this->nama.PHP_EOL;
    echo "Prodi mahasiswa : ".parent::getNamaProdi($this->prodi).PHP_EOL;
    echo "Alamat mahasiswa : ".$this->alamat.PHP_EOL;
    echo "Email Mahasiswa: ".$this->email.PHP_EOL; 
  }
}