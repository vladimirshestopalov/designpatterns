<?php

namespace App\DesignPatterns\Creational\Builder;

use App\DesignPatterns\Creational\Builder\Contracts\Builder;
use App\DesignPatterns\Creational\Builder\Parts\sportEngine;

class Director
{
    public function makeSportsCar(Builder $builder)
    {
        $builder->reset();
        $builder->setSeats(2);
        $builder->setEngine(new sportEngine());
        $builder->setTripComputer();

        return $builder;
    }
}
