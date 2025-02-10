<?php

require_once 'classes/I3D.php';
require_once 'classes/Product.php';
require_once 'classes/BookProduct.php';

function debug($data)
{
    echo '<pre>' . print_r($data, true) . '</pre>';
}

$book = new BookProduct('Три мушкетера', 20, 400);
debug($book);
echo $book->getProduct();
$book->addProduct('Test', 10, 5);

// $product = new Product('Test', 1);
// debug($product);
$book->test();
