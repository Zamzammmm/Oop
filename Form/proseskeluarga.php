<?php
if(isset($_POST['sbm'])){
    $a=$_POST['nama'];
    $b=$_POST['nik'];
    $c=$_POST['alamat'];
    $d=$_POST['umur'];
}
class Form_Keluarga
{
    public $nama, $nik, $umur;
    public function __construct($nama, $nik, $umur)
    {
    $this->nama=$nama;
    $this->nik=$nik;
    $this->umur=$umur;
    }
    public function keluarga_saya(){
    return"Nama : ".$this->nama."<br>".
          "Nik : ".$this->nik."<br>".
          "Umur : ".$this->umur."<br>";
    }
}
for($i=0; $i < count($a); $i++){
$kb = new Form_Keluarga($a[$i], $b[$i], $d[$i]);
echo $kb->keluarga_saya();
}
echo "Alamat : ".$c;
?>