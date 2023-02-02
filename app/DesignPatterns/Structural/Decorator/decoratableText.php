<?php

namespace App\DesignPatterns\Structural\Decorator;

use App\DesignPatterns\Structural\Decorator\Decorators\sayADecorator;
use App\DesignPatterns\Structural\Decorator\Decorators\sayBDecorator;

class decoratableText implements IDecorate
{
    public function decorate()
    {
        print "initial text";
    }
}
