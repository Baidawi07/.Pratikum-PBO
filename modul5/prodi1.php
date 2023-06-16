<?php
class Prodi1{
  const hukum = 11;
  const manejemen = 21;
  const akuntansi = 22;
  const administrasi = 31;
  const peternakan = 41;
  const teknik_sipil = 51;
  const informatika = 52;
  const teknik_industri = 53;
  const indonesia = 61;
  const matematika = 62;
  const inggris = 63;

  public static function getNamaProdi(int $id){
    switch($id){
      case 11 :
        return "HUKUM";
      case 21 :
        return "MANAJEMEN";
      case 22 :
        return "AKUNTANSI";
      case 31 :
        return "ADMINISTRASI PUBLIK";
      case 41 :
        return "PETERNAKAN";
      case 51 :
        return "TEKNIK SIPIL";
      case 52 :
        return "INFORMATIKA";
      case 53 :
        return "TEKNIK INDUSTRI";
      case 61 :
        return "PENDIDIKAN BAHASA INDONESIA";
      case 62 :
        return "PENDIDIKAN MATEMATIKA";
      case 63 :
        return "PENDIDIKAN BAHASA INGGRIS";
    }
  }
}