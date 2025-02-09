<?php

require_once "classes/File.php";

$file = new File('myfile.txt', 'w');

var_dump($file);

echo $file->getFileContent();

$file->writeLine("Привіт це перший рядок! ");

echo $file->getFileContent();

$file->writeLine("Другий рядок");

echo $file->getFileContent();

