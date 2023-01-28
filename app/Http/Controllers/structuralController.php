<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Structural\Proxy\getProduct;
use Illuminate\Http\Request;

class structuralController extends Controller
{
    public function start()
    {
        print "структурные паттерны";
    }

    public function proxy()
    {
        print '<h1>PROXY</h1>';
        print (new getProduct())->run('1').PHP_EOL;
        print "<br>";
        print (new getProduct())->runImpl('2').PHP_EOL;
    }
}
