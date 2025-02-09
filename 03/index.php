<?php
require_once 'classes/Car.php';


function debug($data)
{
    echo '<pre>' . print_r($data, true) . '</pre>';
}

$car1 = new Car();
$car2 = new Car();

// var_dump($car1);
debug($car1);
$car1->color = 'черный';
$car1->brand = 'volvo';
$car1->year = 2018;

$car2->color = 'белый';
$car2->brand = 'bmw';
$car2->speed = 200;
$car2->year = 2017;

debug($car1);
debug($car2);

echo $car1->getCarInfo();
echo '<br><br>';
echo $car2->getCarInfo();
