<?php

namespace App\DesignPatterns\Structural\Decorator\Decorators;

use App\DesignPatterns\Structural\Decorator\IDecorate;

class sayADecorator implements IDecorate
{
    protected $decorratable;

    public function __construct(IDecorate $d)
    {
        $this->decorratable = $d;
    }

    public function decorate()
    {
        print "say A, ";
        print "<b>";
        $this->decorratable->decorate();
        print "</b>";
    }
}
