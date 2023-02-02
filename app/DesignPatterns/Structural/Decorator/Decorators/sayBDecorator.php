<?php

namespace App\DesignPatterns\Structural\Decorator\Decorators;

use App\DesignPatterns\Structural\Decorator\IDecorate;

class sayBDecorator implements IDecorate
{
    protected $decorratable;

    public function __construct(IDecorate $d)
    {
        $this->decorratable = $d;
    }

    public function decorate()
    {
        print "say B, ";
        print "<i>";
        $this->decorratable->decorate();
        print "</i>";
    }
}
