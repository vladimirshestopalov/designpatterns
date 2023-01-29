<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Factories;

use App\DesignPatterns\Creational\FactoryMethod\Contracts\Button;

class HTMLButton implements Button
{
    public function render()
    {
        return "This is HTML button";
    }

    public function onclick()
    {
        return "click Html button";
    }
}
