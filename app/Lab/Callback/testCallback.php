<?php

namespace App\Lab\Callback;

class testCallback
{
    public function go()
    {
        $strings = ["apple", "orange", "banana", "coconut"];
//        $c=function($item) { return strlen($item);};
//        $c=$this->getCallback();
        $c=[$this,'closure'];
//        $c=\Closure::fromCallable([$this, 'closure']);
        $lengths = array_map( $c , $strings);
        print_r($lengths);
    }

    private function getCallback():callable
    {
        return function($i){return strlen($i)+100;};
    }

    private function closure($i){
        return strlen($i)+100;
    }
}
