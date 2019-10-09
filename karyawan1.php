<?php
// PUBLIC
class Karyawan
{
    public $nama;
    public $tahun_bekerja;
    public $pekerjaan;
    protected $gaji;
    private $gjmanager = 5000000;
    private $gjsekertaris = 2000000;
    private $gjob = 500000;
    public function setdata($nama,$pekerjaan,$tahun_bekerja)
    {
        $this->nama = $nama;
        $this->pekerjaan = $pekerjaan;
        $this->tahun_bekerja = $tahun_bekerja;
    }
    public function getdata()
    {
        if (($this->pekerjaan == "Direktur") && ($this->tahun_bekerja >=10)) {
            $this->gaji = $this->tahun_bekerja*$this->gjmanager;
        }
        elseif (($this->pekerjaan == "Sekertaris") && ($this->tahun_bekerja >=10)) {
            $this->gaji = $this->tahun_bekerja*$this->gjsekertaris;
        }
        elseif (($this->pekerjaan == "Pemasaran") && ($this->tahun_bekerja >=10)) {
            $this->gaji = $this->tahun_bekerja*$this->gjob;
        }
        elseif (($this->pekerjaan == "Direktur") && ($this->tahun_bekerja >=5)) {
            $this->gaji = $this->tahun_bekerja*($this->gjmanager-1000000);
        }
        elseif (($this->pekerjaan == "Sekertaris") && ($this->tahun_bekerja >=5)) {
            $this->gaji = $this->tahun_bekerja*($this->gjsekertaris-500000);
        }
        elseif (($this->pekerjaan == "Pemasaran") && ($this->tahun_bekerja >=5)) {
            $this->gaji = $this->tahun_bekerja*($this->gjob-100000);
        }
        return $this->gaji;
    }
}
$karyawan = new Karyawan();
$karyawan->setdata("Zamzam Ubaidilah","Direktur",10);
$karyawan2 = new Karyawan();
$karyawan2->setdata("Rijal","Pemasaran",5);
$karyawan3 = new Karyawan();
$karyawan3->setdata("Salma","Sekertaris",10);
echo "Nama = $karyawan->nama<br>";
echo "Pekerjaan = $karyawan->pekerjaan<br>";
echo "Tahun bekerja = ".$karyawan->tahun_bekerja."<br>";
echo "Gaji = ".number_format($karyawan->getdata(),0,",",".")."<br><br><br>";
echo "Nama = $karyawan2->nama<br>";
echo "Pekerjaan = $karyawan2->pekerjaan<br>";
echo "Tahun bekerja = ".$karyawan2->tahun_bekerja."<br>";
echo "Gaji = ".number_format($karyawan2->getdata(),0,",",".")."<br><br><br>";
echo "Nama = $karyawan3->nama<br>";
echo "Pekerjaan = $karyawan3->pekerjaan<br>";
echo "Tahun bekerja = ".$karyawan3->tahun_bekerja."<br>";
echo "Gaji = ".number_format($karyawan3->getdata(),0,",",".")."<br><br><br>";
?>