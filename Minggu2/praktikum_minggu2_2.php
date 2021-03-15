<?php
    class Car {
        public $tank;
        // add galloms of fuel to the tank when we fill it
        public function fill($float){
            $this->tank += $float;
            return $this;
        }

        // substract gallons of fuel from the tank as we ride the car
        public function ride($float){
            $miles = $float;
            $gallons  = $miles/50;
            $this->tank-=($gallons);

            return $this;
        }
    }
    // create a new object from the car class
    $bwm = new Car();

    // add 10 gallons of fuel, then ride 40 minutes,
    // and get the number of gallons in the tank.
    $tank = $bwm->fill(10)->ride(40)->tank;

    // printout.
    echo "The number of gallons left in the tank: ". $tank ." gal.";
?>