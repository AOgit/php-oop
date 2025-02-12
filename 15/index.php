<?php

error_reporting(-1);

use wfm\interfaces\{I3, IGadget};
use wfm\Product;
use app\{BookProduct, NotebookProduct};

require_once __DIR__ . '/vendor/autoload.php';

// function autoloader($class)
// {
//     // echo 1 . $class . "<br>";
//     // $file = __DIR__ . DIRECTORY_SEPARATOR . "classes". DIRECTORY_SEPARATOR . "{$class}.php";
//     $file = __DIR__ . DIRECTORY_SEPARATOR . "{$class}.php";
//     echo $file . "<br>";
//     if (file_exists($file)){
//         require_once $file;
//     }
// }

// spl_autoload_register('autoloader');

function debug($data)
{
    echo '<pre>' . print_r($data, true) . '</pre>';
}

function offerCase(IGadget $product){
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}<br>";
}

$book = new BookProduct('Три мушкетера', 20, 400);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');

// offerCase($notebook);

// debug($book);
// debug($notebook);

$a = new \app\A();
$b = new \app\B();

$a->getTest();
$b->getTest();

echo '<br>';

$a->getTest2();
$b->getTest2();

$book->doAction1();
$book->doAction2();
debug($book);

// $book->doAction1()->doAction2();
var_dump($book->doAction1());

