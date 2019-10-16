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
echo "
<table>
    <tr>
        <th> Nama </th>
        <td> : $nama </td>
    </tr>
     <tr>
        <th> Nip </th>
        <td> : $nip </td>
    </tr>
     <tr>
        <th> Alamat </th>
        <td> : $alamat t</td>
    </tr>
    <tr>
        <th> Jumlah Hari Kerja </th>
        <td> : $jml_kerja </td>
    </tr>
    <tr>
        <th> Gaji Kotor </th>
        <td> : ".$pegawai->Gaji_kotor()." </td>
    </tr>
    <tr>
        <th> Gaji Bersih </th>
        <td> : ".$pegawai->Gaji_bersih()." </td>
    </tr>
    </table>";
?>