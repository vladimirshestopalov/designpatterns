<?php

namespace App\DesignPatterns\Structural\Facade\Facades;

use App\DesignPatterns\Structural\Facade\Contracts\Logname;
use Illuminate\Support\Facades\Facade;

//Класс-фасад. Определяет метод возвращающий имя класса-сервиса, который ресолвится через app(), и забинден на сервис-класс Log
class Logger extends Facade
{
    protected static function getFacadeAccessor()
    {
//        return 'Logname';
        return Logname::class;
    }
}
