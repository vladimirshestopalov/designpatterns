<?php

namespace App\DesignPatterns\Structural\Facade\Facades;

use Illuminate\Support\Facades\Facade;

class Logger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Logname';
    }
}
