<?php

namespace App\DesignPatterns\Structural\Facade;

//Сервис-класс. Выполняет всю работу

use App\DesignPatterns\Structural\Facade\Contracts\Logname;

class Log implements Logname
{
    public function insert()
    {
        print "inserted to log";
    }
}
