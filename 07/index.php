<?php

require_once 'classes/Product.php';

function debug($data)
{
    echo '<pre>' . print_r($data, true) . '</pre>';
}

$book = new Product('Три мушкетера', 20, null, 1000);
$notebook = new Product("Dell", 1000, "Intel");

debug($book);
debug($notebook);

echo $book->getProduct('book');
echo '<br>';
echo $notebook->getProduct();

