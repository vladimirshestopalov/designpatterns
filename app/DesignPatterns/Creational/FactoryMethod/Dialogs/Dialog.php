<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Dialogs;

use App\DesignPatterns\Creational\FactoryMethod\Contracts\Button;

abstract class Dialog
{

    public function render()
    {
        return $this->render();
    }

    abstract public function createButton():Button;

}
