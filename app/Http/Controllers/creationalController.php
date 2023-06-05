<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Creational\Builder\buildSportCar;
use App\DesignPatterns\Creational\FactoryMethod\Dialogs\Windows;
use App\DesignPatterns\Creational\Singleton\laraSingletonClass;
use App\DesignPatterns\Creational\Singleton\laraSingletonInterface;
use App\DesignPatterns\Creational\Singleton\mySingletonClass;
use App\DesignPatterns\Structural\Proxy\getProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class creationalController extends Controller
{
    public function start()
    {
        return view('creational.index');
    }

    public function renderWindowsButton()
    {
        $dialog=new Windows();
        $button=$dialog->createButton();
        print $button->render();
    }
    public function makeSportCar()
    {
        $build=new buildSportCar();
        print "<pre>";
        var_dump($build->make());
        print "</pre>";
    }

    public function testSingleton()
    {
        $item=mySingletonClass::getInstance();
        $item2=mySingletonClass::getInstance();

//      Normal way

        print "<h1>Normal way</h1>";

        print $item->test()."<br>";
        print $item2->test()."<br>";

        if($item===$item2){print '<p>оба экземпляра одинаковы</p>';}


//      Lara way
        print "<h1>Lara way</h1>";

//        биндим интерфейс к классу (класс не обязан реализовывать интерфейс), точбы сделать синглтон
//        либо можно прописать в appServiceProvider:
//        public $singletons=[
//          laraSingletonInterface::class=>laraSingletonClass::class
//        ];


        App::singleton(laraSingletonInterface::class, function ($app) {
            return new laraSingletonClass();
        });

        $item3=app(laraSingletonInterface::class);
        $item3->test();
        $item4=app(laraSingletonInterface::class);

        var_dump($item3);
        var_dump($item4);
        if($item3===$item4){print '<p>оба экземпляра lara-синглтона одинаковы</p>';}
    }
}
