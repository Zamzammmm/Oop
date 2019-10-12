<?php 
class Elektronik
{
    public $laptop = "Asus Dan Lenovo";
    public function __construct()
    {
        echo "<b> Asus X441N </b><br>";
    }
    public function __destruct()
    {
        echo "<b> Lenovo ThinkPad </b><br>";
    }
}
class laptop extends Elektronik
{
    public function __construct()
    {
        parent::__construct();
        echo "Harga Laptop Asus = Rp.4.500.000,00<br>"; 
    }
    public function namaleptop()
      {
          echo "<b>Nama Laptop : </b>";
      }
    public function __destruct()
    {
        echo "Harga Laptop Lenovo ThinkPad = Rp.3.500.000,00 <br>";
         parent::__destruct();
    }
}
$a = new laptop();
$a->namaleptop();
echo $a->laptop . "<br>";
?>