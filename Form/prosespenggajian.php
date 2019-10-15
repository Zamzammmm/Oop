<?php
class Gaji
{
    public $nama;
    public $nip;
    public $alamat;
    public $jml_kerja;

    public function __construct($nama, $nip, $alamat, $jml_kerja)
    {
        $this->nama = $nama;
        $this->nip = $nip;   
        $this->alamat = $alamat;
        $this->jml_kerja = $jml_kerja;
    }
    public function Gaji_kotor()
    {
        $Gaji_kotor = $this->jml_kerja * 75000;
        return $Gaji_kotor;
    }
    public function Gaji_bersih()
    {
        $Gaji_bersih = $this->Gaji_kotor() - ($this->Gaji_kotor() * 0.025);
        return $Gaji_bersih;
    }
}
if (isset($_POST['sbm'])) {
    $nama =$_POST['nama'];
    $nip =$_POST['nip'];
    $alamat =$_POST['alamat'];
    $jml_kerja =$_POST['jml_kerja'];
}
echo "<center> Hasil Penggajian </center><br>";
$pegawai = new Gaji($nama, $nip, $alamat, $jml_kerja);
echo "Nama        : " . $nama  . "<br>";
echo "Nip         : " . $nip   . "<br>";
echo "Alamat      : " . $alamat. "<br>";
echo "Jumlah Hari Kerja : " . $jml_kerja . "<br>";
echo "Gaji Kotor  : " . $pegawai->Gaji_kotor()."<br>";
echo "Gaji Bersih : " . $pegawai->Gaji_bersih()."<br>";
?>