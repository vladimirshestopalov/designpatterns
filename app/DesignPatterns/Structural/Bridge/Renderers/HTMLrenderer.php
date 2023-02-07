<?php

namespace App\DesignPatterns\Structural\Bridge\Renderers;

use App\DesignPatterns\Structural\Bridge\Contracts\Irenderer;

class HTMLrenderer implements Irenderer
{
    public function renderTitle($title)
    {
        print "<h1>{$title}</h1>";
    }

    public function renderDescr($descr)
    {
        print "<div>{$descr}</div>";
    }

}
