<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Factories;

use App\DesignPatterns\Creational\FactoryMethod\Contracts\Button;

class WindowsButton implements Button
{
    public function render()
    {
        return "This is Windows button";
    }

    public function onclick()
    {
        return "click windows button";
    }


}
