<?php

class File
{
    public $path;
    public $pointer;
    public $mode;

    public function __construct($path, $mode = 'a')
    {
       $this->mode = $mode;
       $this->path = $path;
       if(is_writable($path))
       {
            if (!$this->pointer = fopen($path, $this->mode)){
                    die("Помилка відкриття файлу: {$path}");
            }
       } else {
            $this->createFile();
       }
    }

    private function createFile()
    {
        if(touch($this->path)){
            if (!$this->pointer = fopen($this->path, $this->mode)) {
                die("Помилка відкриття файлу: {$this->path}");
            }
        } else {
            die("Помилка створення файлу: {$this->path}");
        }
    }

    public function __destruct()
    {
        fclose($this->pointer);
    }

    public function writeLine($text)
    {
       if (!fwrite($this->pointer, $text . PHP_EOL))
       {
            die("Помилка запису в файл");
       }
    }

    public function getFileContent()
    {
        return  "<pre>" . file_get_contents($this->path) . "</pre>" . PHP_EOL;
    }


}
