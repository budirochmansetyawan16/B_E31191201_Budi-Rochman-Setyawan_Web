<?php
    class Tablet {
        public $merk;
        protected $camera="Sony";
        private $memory;

        public function beliTablet(){
            return "Beli tablet baru ";
        }

        public function setCamera($camera){
            $this->camera = $camera;
        }

        public function setMemory($memory){
            $this->memory = $memory;
        }
        public function tampilkan_memory(){
            return "Memory : ".$this->memory;
        }
    }

    class handphone extends Tablet {
        
        public function lihatMerk(){
            return "Merk : ".$this->merk;
        }
        public function lihatCamera(){
            return "Camera : ".$this->camera;
        }
    }

    $handphone_baru = new handphone();

    $handphone_baru->merk = "Xiaomi";
    $handphone_baru->setMemory('64 Gb');
    $handphone_baru->setCamera('64 Mega');

    // menampilkan public
    echo $handphone_baru->beliTablet().$handphone_baru->lihatMerk();
    echo "<br/>";
    // menampilkan protected (bisa diakses melalui class turunan)
    echo $handphone_baru->lihatCamera();
    echo "<br/>";
    // menampilkan private (hanya bisa diakses di class nya saja, class luar tidak bisa akses)
    echo $handphone_baru->tampilkan_memory();
?>