<?php
#[\AllowDynamicProperties]
// dynamic properties deprecated from PHP 8.2

class Car
{
    public $color;
    public $wheels;
    public $speed = 180;
    public $brand;
    // From PHP 5.6 конкатенация разрешена
    // public $path = __DIR__ . '/test';

    public function __construct($color, $wheels = 4, $speed, $brand)
    {
       $this->color = $color;
       $this->wheels = $wheels;
       $this->speed = $speed;
       $this->brand = $brand;
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

    public function __destruct()
    {
        var_dump($this);
    }
}
