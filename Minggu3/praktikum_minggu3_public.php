<?php
    class Car {
        // public methode properties
        public $model;

        public function getModel(){
            return "The car model is ". $this->model;
        }
    }

    $mercedes = new Car();
    // akses properti dari dalam class
    $mercedes->model = "Mercedes Benz";
    // akses properti dari luar class
    echo $mercedes->getModel();
?>