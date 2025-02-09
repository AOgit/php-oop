<?php
#[\AllowDynamicProperties]
// dynamic properties deprecated from PHP 8.2

class Car
{
    public $color;
    public $wheels;
    public $speed = 180;
    public $brand;

    public const TEST_CAR = 'Прототип';
    public const TEST_CAR_SPEED = 300;

    // From PHP 5.6 конкатенация разрешена
    // public $path = __DIR__ . '/test';

    public static $countCar = 0;

    public function __construct($color, $wheels, $speed, $brand)
    {
       $this->color = $color;
       $this->wheels = $wheels;
       $this->speed = $speed;
       $this->brand = $brand;
       self::$countCar++;
    }

    public function __destruct()
    {
        // var_dump($this);
    }

    public static function getCount()
    {
       return self::$countCar;
    }

    public function getCarInfo()
    {
        return "
            Цвет: {$this->color}<br>
            Кол-во колес: {$this->wheels}<br>
            Скорость: {$this->speed}<br>
            Марка: {$this->brand}<br>
        ";
    }

    public static function getPrototypeInfo()
    {
        return "
        <h3>Данные тестового авто:</h3>
        Наименование: " .self::TEST_CAR . "<br>
        Скорость: " . self::TEST_CAR_SPEED . "<br>";
    }

}
