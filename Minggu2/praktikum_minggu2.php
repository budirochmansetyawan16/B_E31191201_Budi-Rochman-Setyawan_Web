<?php
    class Car {
        public $comp;
        public $color = 'beige';
        public $hasSunRoof = true;

        public function hello(){
            return "Beep I am a <i>". $this->comp. "</i>, and I am <i>".
            $this->color;
        }
    }

    // membuat instance
    $bmw = new Car();
    $mercedes = new Car();

    // setvalue
    $bmw -> color = 'blue';
    $bmw -> comp = 'BMW';
    $mercedes -> comp = "Mercedes Benz";

    // call hello method untuk $bmw object
    echo $bmw -> hello();
?>