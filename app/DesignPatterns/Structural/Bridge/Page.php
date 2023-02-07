<?php

namespace App\DesignPatterns\Structural\Bridge;

abstract class Page
{
    protected $renderer;

    /**
     * @param $renderer
     */
    public function __construct($renderer)
    {
        $this->renderer = $renderer;
    }

    public function changeRenderer($renderer)
    {
        $this->renderer = $renderer;
    }

    abstract public function renderWholePage();


}
