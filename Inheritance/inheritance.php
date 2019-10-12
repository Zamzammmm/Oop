<?php
// buat class induk: komputer
class komputer {
  
   public $merk;
   public $processor;
   public $memory;
  
   public function beli_komputer() {
     return "Beli Laptop Baru";
   }
}
  
// turunkan class komputer ke laptop
class laptop extends komputer {
  
   public function lihat_spec() {
     return "Merk : $this->merk, Processor : $this->processor ,Memory : $this->memory";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();
  
// isi property objek
$laptop_baru->merk = "Asus X441N";
$laptop_baru->processor ="intel core N3350";
$laptop_baru->memory = "4 GB";
  
//panggil method objek
echo $laptop_baru->beli_komputer();
echo "<br />";
echo $laptop_baru->lihat_spec();
?>