<?php
class Kendaraan {
    private $jenis;
    private $jumlahPenumpang;
    private $biayaTiketKendaraan;
    private $biayaTiketPerPenumpang;

    public function __construct($jenis, $jumlahPenumpang, $biayaTiketKendaraan, $biayaTiketPerPenumpang) {
        $this->jenis = $jenis;
        $this->jumlahPenumpang = $jumlahPenumpang;
        $this->biayaTiketKendaraan = $biayaTiketKendaraan;
        $this->biayaTiketPerPenumpang = $biayaTiketPerPenumpang;
    }

    public function hitungTotal() {
        return $this->biayaTiketKendaraan + ($this->jumlahPenumpang * $this->biayaTiketPerPenumpang);
    }
}

class BUS extends Kendaraan {
    public function hitungTotal() {
        $total = parent::hitungTotal();
        return $total + ($total * 0.05);
    }
}

class MINIBUS extends Kendaraan {
    public function hitungTotal() {
        $total = parent::hitungTotal();
        return $total + ($total * 0.02);
    }
}

class MOBIL extends Kendaraan {
    public function hitungTotal() {
        return parent::hitungTotal();
    }
}

class SEPEDA_MOTOR extends Kendaraan {
    public function hitungTotal() {
        return parent::hitungTotal();
    }
}

$bus = new BUS("BUS", 30, 10000, 500);
echo "total bayar BUS : ".$bus->hitungTotal().PHP_EOL;

$minibus = new MINIBUS("MINIBUS", 20, 8000, 400);
echo "total bayar BUS : " .$minibus->hitungTotal().PHP_EOL;

$mobil = new MOBIL("MOBIL", 4, 6000, 300);
echo "total bayar BUS : ". $mobil->hitungTotal().PHP_EOL;

$sepedaMotor = new SEPEDA_MOTOR("SEPEDA MOTOR", 2, 4000, 200);
echo $sepedaMotor->hitungTotal();
$bus = new BUS("BUS", 30, 10000, 500);
echo "total bayar BUS : ". $bus->hitungTotal().PHP_EOL;

$minibus = new MINIBUS("MINIBUS", 20, 8000, 400);
echo "total bayar BUS : ". $minibus->hitungTotal().PHP_EOL;

$mobil = new MOBIL("MOBIL", 4, 6000, 300);
echo "total bayar BUS : ". $mobil->hitungTotal().PHP_EOL;

$sepedaMotor = new SEPEDA_MOTOR("SEPEDA MOTOR", 2, 4000, 200);
echo "total bayar BUS : ". $sepedaMotor->hitungTotal().PHP_EOL;