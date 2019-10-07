<?php
//1. Class adalah sebuah bluprint/template untuk membuat instance dari object
//2. Class mendefinisikan object
//3. class Menyimpan data(property) dan prilaku (method)

//Membuat class dengan nama Kucing
  class Kucing
  {
    // Membuat Property
    public $warna = "Coklat";
    public $jumlah_kaki = 4;
    public $mkn_fav = "Pindang";

    //membuat method dengan nama bersuara
    public function bersuara()
    {
     return"Miaww";
    }
  }
  //membuat objek baru
  //ditandai dengan keyword 'new'
  $kucing1 = new Kucing;
  $kucing1 ->warna= "Oren"; 
  //var_dump($kucing1);

  echo"Warna Kucing : $kucing1->warna<br>";
  echo"Suaranya : ".$kucing1->bersuara();
?>