<?php
    class Produk {
        var $pemilik;
        var $merk;
        var $harga;
        var $size;
        function Beli(){
            return "Membeli";
        }
    }
    $jaket_sxn = new Produk();
    $jaket_gpl = new Produk();
    $jaket_sxn->pemilik = "Zamzam Ubaidilah";
    $jaket_sxn->merk = "Eiger";
    $jaket_sxn->harga = "Rp. 400.000";
    $jaket_sxn->size = "L";
    $jaket_gpl->pemilik = "Raihan";
    $jaket_gpl->merk = "My Pride";
    $jaket_gpl->harga = "Rp. 500.000";
    $jaket_gpl->size = "M";
    echo "$jaket_sxn->pemilik ".$jaket_sxn->Beli()." jaket dengan merk $jaket_sxn->merk dan
    ukuran $jaket_sxn->size yang seharga $jaket_sxn->harga<br>";
    
    echo "$jaket_gpl->pemilik ".$jaket_gpl->Beli()." jaket dengan merk $jaket_gpl->merk dan
    ukuran $jaket_gpl->size yang seharga $jaket_gpl->harga<br>";
?>