<?php

namespace App\DesignPatterns\Structural\Bridge\Renderers;

use App\DesignPatterns\Structural\Bridge\Contracts\Irenderer;

class simpleRenderer implements Irenderer
{
    public function renderTitle($title)
    {
        print $title;
    }

    public function renderDescr($descr)
    {
        print $descr;
    }
}
