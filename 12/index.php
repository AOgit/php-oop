<?php

error_reporting(-1);

// use classes\interfaces\I3;
use classes\interfaces\IGadget;
// use classes\Product;
use classes\BookProduct;
use classes\NotebookProduct;

function autoloader($class)
{
    // echo 1 . $class . "<br>";
    // $file = __DIR__ . DIRECTORY_SEPARATOR . "classes". DIRECTORY_SEPARATOR . "{$class}.php";
    $file = __DIR__ . DIRECTORY_SEPARATOR . "{$class}.php";
    // echo $file . "<br>";
    if(file_exists($file)){
        require_once $file;
    }
}

spl_autoload_register('autoloader');

function debug($data)
{
    echo '<pre>' . print_r($data, true) . '</pre>';
}

function offerCase(IGadget $product){
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}<br>";
}

$book = new BookProduct('Три мушкетера', 20, 400);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');

// var_dump($notebook instanceof IGadget);
offerCase($notebook);
// offerCase($book);

debug($book);

echo $book->getProduct();


class A {};
class B extends A {};
class C{};

$a = new A();
$b = new B();
$c = new C();

var_dump($a instanceof A);
echo "<br>";
var_dump($b instanceof A);
echo "<br>";
var_dump($c instanceof c);
