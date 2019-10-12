<?php
class Karyawan
{
   public $nama;
   public $pekerjaan;
   public $tahun_bekerja;
   protected $gaji;
   private $gjmanager = 5000000;
   private $gjob = 500000;
   //optional parameter 
   public function setdata(
      $nama = "Zamzam Ubaidilah",
      $pekerjaan = "Direktur",
      $tahun_bekerja = 7
   ) {
      $this->nama = $nama;
      $this->pekerjaan = $pekerjaan;
      $this->tahun_bekerja = $tahun_bekerja;
   }
   public function getdata()
   {
      if (($this->pekerjaan == "Manager") && ($this->tahun_bekerja >= 10)) {
         $this->gaji = $this->tahun_bekerja * $this->gjmanager;
      } elseif (($this->pekerjaan == "Direktur") && ($this->tahun_bekerja >= 10)) {
         $this->gaji = $this->tahunbekerja * $this->gjob;
      } elseif (($this->pekerjaan == "Manager") && ($this->tahun_bekerja >= 5)) {
         $this->gaji = $this->tahun_bekerja * ($this->gjmanager - 1000000);
      } elseif (($this->pekerjaan == "Direktur") && ($this->tahun_bekerja >= 5)) {
         $this->gaji = $this->tahun_bekerja * ($this->gjob - 100000);
      }
      return $this->gaji;
   }
}
$karyawan = new Karyawan();
$karyawan->setdata();
echo "Nama = $karyawan->nama <br>";
echo "Pekerjaan = $karyawan->pekerjaan <br>";
echo "Tahun bekerja = $karyawan->tahun_bekerja <br>";
echo "Gaji = " . number_format($karyawan->getdata(), 0, ",", ".") . " <br>";