<?php 
  class Lingkaran{

    public $pi = 3.14;
    public $jari;
    public $luas;
    public $keliling;
    
    public function __construct ($jari) {

        return $this->jari = $jari;
    }
    public function Hitung_Luas() {

        $luas = $this->pi * $this->jari * $this->jari;
        return $luas;
    }
    public function Hitung_keliling() {

        $keliling = 2 * ($this->pi * $this->jari);
        return $keliling;
    }
}
$zam = new Lingkaran (10);
echo "Jari-Jari Lingkaran = $zam->jari<br>";
echo "Luas Lingkaran = ". $zam->Hitung_luas() ."<br>";
echo "Keliling Lingkaran = ".$zam->Hitung_keliling() ."<br>";
?>