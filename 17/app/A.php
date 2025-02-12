<?php

namespace app;

class A
{
    private static $instance = [];

    // public function __construct()
    // {

    // }

    private function __construct()
    {

    }

    public static function getInstance()
    {
        $class = static::class;
        if (!isset(static::$instance[$class])) {
            static::$instance[$class] = new static();
        }
        return static::$instance[$class];
    }
}
