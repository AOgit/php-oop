<?php

error_reporting(-1);

require_once __DIR__ . '/vendor/autoload.php';


echo "=======extend static=================<br>";
$a = \app\A::getInstance();
$a1 = \app\A::getInstance();

var_dump($a);
var_dump($a1);

$b = \app\B::getInstance();
$b1 = \app\B::getInstance();

echo "<br>";
var_dump($b);
var_dump($b1);

$c = \app\C::getInstance();
$c1 = \app\C::getInstance();

echo "<br><br>=======Traits=================<br>";
var_dump($c);
var_dump($c1);

$d = \app\D::getInstance();
$d1 = \app\D::getInstance();

echo "<br>";
var_dump($d);
var_dump($d1);
