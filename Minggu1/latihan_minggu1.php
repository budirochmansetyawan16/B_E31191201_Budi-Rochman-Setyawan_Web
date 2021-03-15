<?php
    class buku {
        public $judul_buku;
        public $pengarang;
        public $penerbit;
        public $tahun_terbit;
        public $cetakan;
    }

    class kendaraan {
        public $jenis_kendaraan;
        public $jumlah_roda;
        public $merk;
        public $bahan_bakar;
        public $harga;
        public $tahun_pembuatan;

        public function subsidi(){
            if ($this->bahan_bakar=="premium" && $this->tahun_pembuatan<2005) {
                return "Ya";
            }else {
                return "Tidak";
            }
        }

        public function hargaSecond(){
            if ($this->tahun_pembuatan>2010) {
                $second = $this->harga-($this->harga*(20/100));
                return $second;
            }
            elseif ($this->tahun_pembuatan>=2005 && $this->tahun_pembuatan<=2010) {
                $second = $this->harga-($this->harga*(30/100));
                return $second;
            }
            elseif ($this->tahun_pembuatan<2005) {
                $second = $this->harga-($this->harga*(40/100));
                return $second;
            }
        }
    }
    $kendaraan1 = new kendaraan();
    $kendaraan2 = new kendaraan();
    $kendaraan3 = new kendaraan();

    $kendaraan1->jenis_kendaraan='Mobil';
    $kendaraan1->jumlah_roda='4';
    $kendaraan1->merk='Tesla';
    $kendaraan1->bahan_bakar='Listrik';
    $kendaraan1->harga='5000000000';
    $kendaraan1->tahun_pembuatan='2019';

    $kendaraan2->jenis_kendaraan='Mobil';
    $kendaraan2->jumlah_roda='4';
    $kendaraan2->merk='Avanza';
    $kendaraan2->bahan_bakar='premium';
    $kendaraan2->harga='500000000';
    $kendaraan2->tahun_pembuatan='2004';

    $kendaraan3->jenis_kendaraan='Mobil';
    $kendaraan3->jumlah_roda='4';
    $kendaraan3->merk='Inova';
    $kendaraan3->bahan_bakar='premium';
    $kendaraan3->harga='600000000';
    $kendaraan3->tahun_pembuatan='2007';

    echo "KENDARAAN 1";
    echo "<br/>";
    echo "Status Subsidi BBM = ". $kendaraan1->subsidi();
    echo "<br/>";
    echo "Harga second = ".$kendaraan1->hargaSecond();
    echo "<hr/>";

    echo "<br/>";
    echo "KENDARAAN 2";
    echo "<br/>";
    echo "Status Subsidi BBM = ". $kendaraan2->subsidi();
    echo "<br/>";
    echo "Harga second = ".$kendaraan2->hargaSecond();
    echo "<hr/>";

    echo "<br/>";
    echo "KENDARAAN 3";
    echo "<br/>";
    echo "Status Subsidi BBM = ". $kendaraan3->subsidi();
    echo "<br/>";
    echo "Harga second = ".$kendaraan3->hargaSecond();
    echo "<hr/>";
?>