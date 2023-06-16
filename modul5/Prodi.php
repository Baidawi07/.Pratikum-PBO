<?php
final class Prodi{
  static int $INFORMATIKA = 52;
  static int $TEKNIK_SIPIL = 51;
  static int $TEKNIK_INDUSTRI = 53;

  public static function getNamaProdi($kode){
    switch($kode){
      case 52 :
        return "INFORMATIKA";
      case 51 :
        return "TEKNIK SIPIL";
      case 53 :
        return "TEKNIK INDUSTRI";
    }
    return "";
  }
}