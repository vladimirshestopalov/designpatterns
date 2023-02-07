<?php

namespace App\DesignPatterns\Structural\Bridge\Contracts;

interface Irenderer
{
    public function renderTitle($title);

    public function renderDescr($descr);
}
