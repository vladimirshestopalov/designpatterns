<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Creational\FactoryMethod\Dialogs\Windows;
use App\DesignPatterns\Structural\Proxy\getProduct;
use Illuminate\Http\Request;

class creationalController extends Controller
{
    public function start()
    {
        print "Порождающие паттерны";
    }

    public function renderWindowsButton()
    {
        $dialog=new Windows();
        $button=$dialog->createButton();
        print $button->render();
    }
}
