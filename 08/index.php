<?php

require_once 'classes/Product.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';

function debug($data)
{
    echo '<pre>' . print_r($data, true) . '</pre>';
}

$book = new BookProduct('Три мушкетера', 20, 400);
$notebook = new NotebookProduct("Dell", 1000, 130);

debug($book);
debug($notebook);

echo $book->getProduct();
echo '<br>';
echo $notebook->getProduct();

