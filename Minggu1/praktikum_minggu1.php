<?php
    class Car {
        public $comp;
        public $color = 'beige';
        public $hasSunRoof = true;

        public function hello(){
            return "beep";
        }
    }

    // membuat instance
    $bmw = new Car();
    $mercedes = new Car();
    // getValues
    echo $bmw -> color;
    echo "<br/>";
    echo $mercedes ->color;
    echo "<hr/>";

    // setvalue
    $bmw -> color = 'blue';
    $bmw -> comp = 'BMW';
    $mercedes -> comp = "Mercedes Benz";

    // getValue
    echo $bmw ->color;
    echo "<br/>";
    echo $mercedes -> color;
    echo "<br/>";
    echo $bmw -> comp;
    echo "<br/>";
    echo $mercedes -> comp;
    echo "<hr/>";

    // methods get a beep
    echo $bmw -> hello();
    echo "<br/>";
    echo $mercedes -> hello();
?>