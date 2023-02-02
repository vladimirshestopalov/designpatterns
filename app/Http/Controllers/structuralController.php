<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Structural\Decorator\decoratableText;
use App\DesignPatterns\Structural\Decorator\Decorators\sayADecorator;
use App\DesignPatterns\Structural\Decorator\Decorators\sayBDecorator;
use App\DesignPatterns\Structural\Facade\Facades\Logger;
use App\DesignPatterns\Structural\Facade\Log;
use App\DesignPatterns\Structural\Proxy\getProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class structuralController extends Controller
{
    public function start()
    {
        print "структурные паттерны";
    }

    public function proxy()
    {
        $get=new getProduct();
        print '<h1>PROXY</h1>';
        print $get->run('1').PHP_EOL;
        print "<br>";
        print $get->runImpl('2').PHP_EOL;
    }

    public function facade()
    {
//      Logname мжет быть и индетрфейсом, который реализует класс Log
        App::bind('Logname', function ($app) {
            return new Log();
        });

        print Logger::insert();
    }

    public function decoration()
    {
        $res=new sayADecorator(new sayBDecorator(new decoratableText()));
        $res->decorate();
    }
}
