<?php
require_once 'classes/Car.php';


function debug($data)
{
    echo '<pre>' . print_r($data, true) . '</pre>';
}

echo Car::$countCar . "<br>";
$car1 = new Car('черный', 4, 180, 'volvo');
echo Car::$countCar . "<br>";
$car2 = new Car('белый', 4, 200, 'bmw');
echo Car::$countCar . "<br>";

// var_dump($car1);

// debug($car1);
// debug($car2);

echo $car1->getCarInfo();
echo '<br><br>';
echo $car2->getCarInfo();
echo Car::getCount();

echo "<br>";
echo Car::TEST_CAR;
echo "<br>";
echo Car::getPrototypeInfo();
echo "<br>";
echo Car::class;



