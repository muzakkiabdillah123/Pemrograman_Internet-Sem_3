<?php
class Mahasiswa
{
    public $nama, $id, $jenisKelamin;

    public function __construct($NAMA = "N/A", $ID = "N/A", $JENISKELAMIN = "N/A")
    {
        $this->nama = "$NAMA";
        $this->id = "$ID";
        $this->jenisKelamin = "$JENISKELAMIN";
    }
}

class MataPelajaran
{
    public $nama, $kode;

    public function __construct($NAMA = "N/A", $KODE = "N/A")
    {
        $this->nama = "$NAMA";
        $this->kode = "$KODE";
    }
}

$mhs1 = new Mahasiswa("Asep", "200", "Perempuan");
$mapel1 = new MataPelajaran("Promnet", "1");

var_dump($mhs1);
echo "<br>";
var_dump($mapel1);
