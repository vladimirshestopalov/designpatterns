<?php

namespace App\Http\Controllers;

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
        App::bind('Logname', function ($app) {
            return new Log();
        });

        print Logger::insert();
    }
}
