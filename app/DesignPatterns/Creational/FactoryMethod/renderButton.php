<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

use App\DesignPatterns\Creational\FactoryMethod\Dialogs\Windows;

class renderButton
{
    public function renderWindowsButton()
    {
        $dialog=new Windows();
        $button=$dialog->createButton();
        print $button->render();
    }
}
