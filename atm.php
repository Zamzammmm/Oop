<?php
    class Kartu_ATM {
         public $pemilik = "Zamzam Ubaidilah";
         protected $norek = "2210 2002 44";
         private $pin_atm = "300902";
         public function Tampilkan_norek(){
             return $this->norek;
         } public function Tampilkan_pin(){
             return $this->pin_atm;
         }
    }
    $atm = new Kartu_ATM();
    echo "Pemilik ATM = $atm->pemilik<br>";
    echo "Nomor Rekening = ".$atm->Tampilkan_norek()."<br>";
    echo "PIN ATM = ".$atm->Tampilkan_pin;
?>