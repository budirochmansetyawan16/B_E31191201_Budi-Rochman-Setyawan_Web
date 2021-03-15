<?php
    class laptop {
        public $pemilik;
        public $merk;

        public function hidupkan_laptop(){
            return "Hidupkan laptop ". $this->merk . " punya ". $this->pemilik;
        }
        public function matikan_laptop(){
            return "Matikan laptop ". $this->merk . " punya ". $this->pemilik;
        }
        public function restart_laptop(){
            return "Matikan laptop ". $this->merk . " punya ". $this->pemilik . ". Hidupkan laptop ". $this->merk . " punya ". $this->pemilik;
        }
    }
    $laptop1 = new laptop();
    $laptop2 = new laptop();
    $laptop3 = new laptop();

    $laptop1->pemilik='A';
    $laptop1->merk='Asus';

    $laptop2->pemilik='B';
    $laptop2->merk='Acer';

    $laptop3->pemilik='C';
    $laptop3->merk='Lenovo';

    echo $laptop1->hidupkan_laptop();
    echo "<br/>";
    echo $laptop2->matikan_laptop();
    echo "<br/>";
    echo $laptop3->restart_laptop();
?>