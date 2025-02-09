<?php
require_once 'classes/Car.php';


function debug($data)
{
    echo '<pre>' . print_r($data, true) . '</pre>';
}

$car1 = new Car('черный', 4, 180, 'volvo');
$car2 = new Car('белый', 4, 200, 'bmw');

// var_dump($car1);

// debug($car1);
// debug($car2);

echo $car1->getCarInfo();
echo '<br><br>';
echo $car2->getCarInfo();
