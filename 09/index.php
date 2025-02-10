<?php

require_once 'classes/Product.php';
require_once 'classes/BookProduct.php';

function debug($data)
{
    echo '<pre>' . print_r($data, true) . '</pre>';
}

$book = new BookProduct('Три мушкетера', 20, 400);
debug($book);
echo $book->getProduct();

echo $book->getDiscount();
// $book->discount = 50;

// echo $book->price;

// var_dump($book->public);
// var_dump($book->private);
// var_dump($book->protected);
