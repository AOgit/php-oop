<?php
#[\AllowDynamicProperties]
// dynamic properties deprecated from PHP 8.2

class Car
{
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;
    // From PHP 5.6 конкатенация разрешена
    public $path = __DIR__ . '/test';



}
