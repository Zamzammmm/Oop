<?php
if(isset($_POST['sbm'])){
    $a=$_POST['nama'];
    $b=$_POST['nik'];
    $c=$_POST['alamat'];
    $d=$_POST['umur'];
}
class Form_Keluarga
{
    public $nama, $nik, $umur,$alamat;
    public function __construct($nama, $nik, $umur,$alamat)
    {
    $this->nama=$nama;
    $this->nik=$nik;
    $this->umur=$umur;
    $this->alamat=$alamat;
    }
    public function keluarga_saya(){
    return"<table>
            <tr>
                <th>Nama  </th> 
                <td> : $this->nama</td>
            </tr>    
            <tr>
                <th>Nik  </th>
                <td> : $this->nik</td>                
            </tr>
            <tr>
                <th>Umur  </th>
                <td> : $this->umur</td>
            </tr>    
            <tr>
                <th>Alamat  </th>                
                <td> : $this->alamat</td>
            </tr>     
            </table>";
    }
}
for($i=0; $i < count($a); $i++){
$kb = new Form_Keluarga($a[$i], $b[$i], $d[$i],$c);
echo $kb->keluarga_saya();
}
?>