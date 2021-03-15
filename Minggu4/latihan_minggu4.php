<?php
    class mobilLengkap {
        
        public $aksi1;
        public $aksi2;
        public $aksi3;

        public function nontonTV(){
            return "Aksi nonton TV : "."<br/>".$this->aksi1."<br/>".$this->aksi2."<br/>".$this->aksi3."<br/><hr/>";
        }
    }
    class MobilBMW extends mobilLengkap {
            
    }
    class MobilBMWberaksi {
        public function nontonTv(){
            return "Aksi nonton TV : "."<br/>".$this->aksi1."<br/>".$this->aksi2."<br/>".$this->aksi3;
        }
        public function hidupkanMobil(){
            return "Mobil Di Hidupkan";
        }
        public function matikanMobil(){
            return "Mobil Di Matikan";
        }
        public function ubahGigi(){
            return "Mobil Mengubah Gigi";
        }
    }
    $mobil = new MobilBMW();

    $mobil->aksi1="TV Di Hidupkan";
    $mobil->aksi2="TV Mencari Chanel";
    $mobil->aksi3="TV Menampilkan Gambar";
    echo $mobil->nontonTV();

    $mobil2 = new MobilBMWberaksi();

    $mobil2->aksi1="TV Di Hidupkan";
    $mobil2->aksi2="TV Mencari Chanel";
    $mobil2->aksi3="TV Menampilkan Gambar";

    echo $mobil2->nontonTv();
    echo "<br/>";
    echo $mobil2->hidupkanMobil();
    echo "<br/>";
    echo $mobil2->matikanMobil();
    echo "<br/>";
    echo $mobil2->ubahGigi(); 
?>