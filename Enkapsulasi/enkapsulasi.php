<?php
  class Produk
{
    public $namaProduk; 
    protected $harga;
    private $diskon=0.1;

    public function setHarga($harga){
        $this->harga=$harga;
    } 
    protected function getDiskon(){
        return ($this->harga * $this->diskon);
    }
    public function beli(){
        return "Membeli Produk";
    }
    public function CetakInfo(){
        return "Nama Produk $this->namaProduk<br>
        Harga : " . $this->harga ." <br>
        Diskon : " . $this->getDiskon();
    }
}
$produk1 = new Produk;
$produk1->namaProduk= "Komik Naruto";
$produk1->setHarga(100000);
echo $produk1->beli() . "<br>";
echo $produk1->CetakInfo();
?>