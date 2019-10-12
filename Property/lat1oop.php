<?php
       
    class Produk
    {
        public $warna;
        public $merk;
        public $ukuran;

        public function hitamputih()
        {
            return "sekolah";
        }
        public function bebas()
        {
            return "olahraga";
        }
    }
    $beli1 = new Produk;
    $beli1 ->warna = "marron";
    $beli1 ->merk = "covers";
    $beli1 ->ukuran = "40";
    echo "Toko Sepatu";
    echo "<br>";
    echo" Zamzam membeli Sepatu Warna : $beli1->warna<br>";
    echo"merk sepatunya : $beli1->merk<br>";
    echo"dengan ukuran :  $beli1->ukuran<br>";
    echo"Untuk di pakai : ".$beli1->bebas();
    echo "<br>";
    echo "<br>";

    $beli2 = new Produk;
    $beli2 ->warna = "Biru";
    $beli2 ->merk = "Vans";
    $beli2 ->ukuran = "38";
    echo" Rafli membeli Sepatu Warna : $beli2->warna<br>";
    echo"merk sepatunya : $beli2->merk<br>";
    echo"dengan ukuran :  $beli2->ukuran<br>";
    echo"Untuk di pakai : ".$beli2->hitamputih();
    echo "<br>";
    echo "<br>";

    $beli3 = new Produk;
    $beli3 ->warna = "Cyan";
    $beli3 ->merk = "Nike";
    $beli3 ->ukuran = "39";
    echo" Rijal membeli Sepatu Warna : $beli3->warna<br>";
    echo"merk sepatunya : $beli3->merk<br>";
    echo"dengan ukuran :  $beli3->ukuran<br>";
    echo"Untuk di pakai : ".$beli3->bebas();
    echo "<br>";


    