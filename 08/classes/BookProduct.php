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
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Кол-во страниц: {$this->numPages}<br>";
        return $out;
    }

}
