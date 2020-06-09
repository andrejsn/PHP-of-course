<?php

class Car {

    var $color;
    var $speed;

    function __construct($color)
    {
        $this->color = $color;
    }


}

$car = new Car('blue');
$car->speed = 0;

print_r($car);