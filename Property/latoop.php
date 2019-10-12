<?php
    class RPL1 {
        public $siswa;
        public $laki;
        public $cewe;
        public $walas;
        public $ketua;
        public function sekolah() {
            return "SMK ASSALAAM";
        } public function jurusan() {
            return "RPL";
        } 
    }
    $all = new RPL1;
    $all->siswa=35;
    $all->laki=20;
    $all->cewe=15;
    $all->walas="Sofwan M, S.Pd";
    $all->ketua="Zamzam Ubaidilah";
    echo "Di ".$all->sekolah().", terdapat jurusan ".$all->jurusan()."<br><br>";
    echo "Di ".$all->jurusan()." 1, terdiri dari $all->siswa siswa,
    yang diantara nya : <br>";
    echo "Siswa Laki Laki : $all->laki<br>";
    echo "Siswa Perempuan : $all->cewe<br>";
    echo "Wali Kelas : $all->walas<br>";
    echo "Ketua Murid : $all->ketua<br><br>";
    $all2 = new RPL1;
    $all2->siswa=30;
    $all2->laki=20;
    $all2->cewe=10;
    $all2->walas="Wildan A, S.Kom";
    $all2->ketua="Zamzam Ubaidilah";
    echo "Di ".$all2->jurusan()." 2, terdiri dari $all2->siswa siswa,
    yang diantara nya : <br>";
    echo "Siswa Laki Laki : $all2->laki<br>";
    echo "Siswa Perempuan : $all2->cewe<br>";
    echo "Wali Kelas : $all2->walas<br>";
    echo "Ketua Murid : $all2->ketua<br><br>";
    $all3 = new RPL1;
    $all3->siswa=30;
    $all3->laki=20;
    $all3->cewe=10;
    $all3->walas="Tammy Ayundari, S.pd";
    $all3->ketua="Zamzam Ubaidilah";
    echo "Di ".$all3->jurusan()." 3, terdiri dari $all3->siswa siswa,
    yang diantara nya : <br>";
    echo "Siswa Laki Laki : $all3->laki<br>";
    echo "Siswa Perempuan : $all3->cewe<br>";
    echo "Wali Kelas : $all3->walas<br>";
    echo "Ketua Murid : $all3->ketua<br><br>";
?>