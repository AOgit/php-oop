<?php

namespace classes;

use classes\interfaces\I3D;

class BookProduct extends Product implements I3D
{
    public $numPages;
    const TEST = 20;
    const TEST2 = 30;

    public function getNumPages()
    {
      return $this->numPages;
    }

    public function __construct($name, $price, $numPages = null)
    {
       parent::__construct($name, $price);
       $this->numPages = $numPages;
       $this->setDiscount(5);
    //    var_dump(self::TEST);
    //    var_dump(self::TEST2);
        // var_dump($this->protected);
        // var_dump($this->private);
    }

    public function test()
    {
        var_dump(I3D::TEST2);
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Цена без скидки: {$this->price}<br>";
        $out .= "Кол-во страниц: {$this->numPages}<br>";
        $out .= "Скидка: {$this->getDiscount()}<br>";
        return $out;
    }

    public function addProduct($name, $price, $numPages = 0)
    {
        var_dump($name);
        var_dump($price);
        var_dump($numPages);
        // TODO Implement addProduct() method
    }


}
