<?php
    interface hitungLuas {
        public function hitungLuasPersegi();
        public function hitungLuasSegitiga();
        public function hitungLuasLingkaran();
    }

    class Persegi implements hitungLuas{
        private $sisi;

        public function __construct($sisi)
        {
            $this->sisi = $sisi;
        }
        public function hitungLuasPersegi()
        {
            return $this->sisi * $this->sisi;
        }
        public function hitungLuasSegitiga()
        {
            return $this->sisi * $this->sisi / 2;
        }
        public function hitungLuasLingkaran()
        {
            return $this->sisi * $this->sisi * pi();
        }
    }

    class Segitiga extends Persegi{

    }
    class Lingkaran extends Persegi{

    }

    $persegi = new Persegi(5);
    $segitiga = new Segitiga(8);
    $lingkaran = new Lingkaran(6);

    echo $persegi->hitungLuasPersegi();
    echo "<br/>";
    echo $segitiga->hitungLuasSegitiga();
    echo "<br/>";
    echo $lingkaran->hitungLuasLingkaran();
?>