<?php

namespace App\DesignPatterns\Creational\Singleton;

class mySingletonClass
{
    private int $v;
    private static $instance;

    public static function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }
    public function test()
    {
        $this->v=1;
        return $this->v;
    }
}
