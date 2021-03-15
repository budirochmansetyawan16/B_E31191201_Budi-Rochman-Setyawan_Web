<?php
    class kalkulator{
        private $angka1='16';
        private $angka2='8';
        private $angka3='2';

        public function tambah(){
            $hasil = $this->angka1 + $this->angka2 + $this->angka3;
            return $hasil;
        }
        public function kurang(){
            $hasil = $this->angka1 - $this->angka2 - $this->angka3;
            return $hasil;
        }
        public function bagi(){
            $hasil = $this->angka1 / $this->angka2 / $this->angka3;
            return $hasil;
        }
        public function kali(){
            $hasil = $this->angka1 * $this->angka2 * $this->angka3;
            return $hasil;
        }
    }
    $kalkulator1 = new kalkulator();

    echo "Hasil penjumlahan = ".$kalkulator1->tambah();
    echo "<br/>";
    echo "Hasil pengurangan = ".$kalkulator1->kurang();
    echo "<br/>";
    echo "Hasil pembagian = ".$kalkulator1->bagi();
    echo "<br/>";
    echo "Hasil perkalian = ".$kalkulator1->kali();
?>