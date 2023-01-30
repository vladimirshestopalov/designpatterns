<?php

namespace App\DesignPatterns\Creational\Builder;

use App\DesignPatterns\Creational\Builder\Builders\carBuilder;

class buildSportCar
{
    public function make()
    {
        $director=new Director();
        $builder=new carBuilder();

        return $director->makeSportsCar($builder)->getResult();;
    }
}
