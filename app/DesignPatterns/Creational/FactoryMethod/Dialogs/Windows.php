<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Dialogs;

use App\DesignPatterns\Creational\FactoryMethod\Contracts\Button;
use App\DesignPatterns\Creational\FactoryMethod\Factories\WindowsButton;

class Windows extends Dialog
{
    public function createButton():Button
    {
        return new WindowsButton();
    }
}
