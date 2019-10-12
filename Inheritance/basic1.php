<?php
class Komputer
{
    public $processor = "Intel 2 Core N3350";
    public function __construct()
    {
        echo "Constructor Dari Komputer <br>";
    } 

    public function __destruct()
    {
        echo "Destructor Dari Komputer <br>";
    }
}
class Laptop extends Komputer
{
    public function __construct()
     {
         parent::__construct();
         echo "Constructor Dari Laptop <br>";
     }

      public function spesifikasi()
      {
          echo "Spesifikasi Laptop : ";
      }

    public function __destruct()
    {
        echo "Destructor Dari Laptop <br>";
         parent::__destruct();
    }
}
$asus = new Laptop();
$asus->spesifikasi();
echo $asus->processor . "<br>";
?>