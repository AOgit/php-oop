<?php

class BookProduct extends Product
{
    public $numPages;

    public function getNumPages()
    {
      return $this->numPages;
    }

    public function __construct($name, $price, $numPages = null)
    {
       parent::__construct($name, $price);
       $this->numPages = $numPages;
       $this->setDiscount(5);
        // var_dump($this->protected);
        // var_dump($this->private);
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Цена без скидки: {$this->price}<br>";
        $out .= "Кол-во страниц: {$this->numPages}<br>";
        $out .= "Скидка: {$this->getDiscount()}<br>";
        return $out;
    }

}
