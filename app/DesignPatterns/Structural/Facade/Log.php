<?php

namespace App\DesignPatterns\Structural\Facade;

//Сервис-класс. Выполняет всю работу

class Log
{
    public function insert()
    {
        print "inserted to log";
    }
}
