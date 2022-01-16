<?php

$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015
];

$toyota = [
    'model' => 'Corola',
    'speed' => 150,
    'doors' => 5,
    'year' => 2016
];

$opel = [
    'model' => 'Not a car',
    'speed' => 60,
    'doors' => 'holes',
    'year' => 2018
];

$cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

foreach ($cars as $name => $car) {
    echo "CAR $name <br>";
    echo "{$car['model']} {$car['speed']} {$car['doors']} {$car['year']} <br>";
    echo '<br>';
}