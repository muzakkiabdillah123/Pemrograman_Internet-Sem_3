<?php
class Burung
{
    // property (datanya)
    public $warna;
    public $ukuran;
    public $bentukParuh;

    // method
    public function berubahJahat()
    {
        $this->warna = "hitam";
    }

    public function __construct($Warna = "Transparan", $Ukuran = "Tidak ada", $BentukParuh = "Tidak ada")
    {
        $this->warna = $Warna;
        $this->ukuran = $Ukuran;
        $this->bentukParuh = $BentukParuh;
    }
}

// Create cara 1
$brg1 = new Burung;
$brg1->warna = "Merah";
$brg1->ukuran = "kecil";
$brg1->bentukParuh = "tajam";

// Create cara 2
$brg2 = new Burung("Merah", "Kecil", "Lancip");
$brg3 = new Burung("Kuning");

var_dump($brg1);
echo "<br>";
var_dump($brg2);
echo "<br>";
var_dump($brg3);
echo "<br>";
echo $brg1->warna, $brg1->ukuran;

// panggil method
echo $brg1->berubahJahat();
echo $brg1->warna;
