<?php

namespace App\DesignPatterns\Creational\Builder\Parts;

use App\DesignPatterns\Creational\Builder\Contracts\IEngine;

class Engine implements IEngine
{
    public function start()
    {
        print 'rrr';
    }
}
