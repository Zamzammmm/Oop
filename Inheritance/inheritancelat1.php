<?php
    Class ATM {
        public $uang = "<b>Rp. 1.000.000</b>";
        public function __construct(){
            echo "Masukan kartu ATM<br>";
        } public function __destruct(){
            echo "Ambil kartu ATM<br>";
        }
    } 
    
    class Kartu extends ATM{
        public function __construct(){
            parent::__construct();
            echo "Masukan pin ATM<br>";
        }
        public function Tarik_Uang(){
            echo "Ambil uang sebesar : ";
        } public function __destruct(){
            echo "Ambil uang yang keluar<br>";
            parent::__destruct();
        }
    }
    $kartu = new Kartu();
    $kartu->Tarik_Uang();
    echo $kartu->uang . "<br>";
?>