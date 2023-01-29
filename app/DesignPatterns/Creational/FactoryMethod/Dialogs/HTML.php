<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Dialogs;

use App\DesignPatterns\Creational\FactoryMethod\Contracts\Button;
use App\DesignPatterns\Creational\FactoryMethod\Factories\HTMLButton;

class HTML extends Dialog
{
    public function createButton():Button
    {
        return new HTMLButton();
    }
}
