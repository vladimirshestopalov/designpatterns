<?php

namespace App\DesignPatterns\Creational\Builder\Parts;

use App\DesignPatterns\Creational\Builder\Contracts\IEngine;

class sportEngine implements IEngine
{
    public function start()
    {
        print 'RRRRRRR!!!!';
    }
}
