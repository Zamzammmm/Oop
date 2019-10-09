<?php

// buat class laptop
class laptop {

    // buat property untuk class laptop
    public $pemilik = "Zamzam Ubaidilah <br>";
    public $merk = "Asus <br>";
    public $ukuran_layar = "15 inchi";

    // buat method untuk class laptop
    public function hidupkan_laptop() {
      return "Hidupkan Laptop"; 
    }

    public function matikan_leptop() {
      return "Matikan Laptop";
    }
}

// buat objek dari class laptop (intansiasi)
$laptop_anto = new laptop();
echo "Nama : $laptop_anto->pemilik";
echo "Merk : $laptop_anto->merk";
echo "Ukuran Layar : $laptop_anto->ukuran_layar";
$laptop_andi = new laptop();
?>