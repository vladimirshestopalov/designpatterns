<?php

namespace App\DesignPatterns\Creational\Builder\Builders;

use App\DesignPatterns\Creational\Builder\Contracts\Builder;
use App\DesignPatterns\Creational\Builder\Contracts\IEngine;

class carBuilder implements Builder
{
    private $car;

    public function reset()
    {
        $this->car=[];
    }

    public function setSeats(int $i)
    {
        $this->car['seats']=$i;
    }

    public function setEngine(IEngine $engine)
    {
        $this->car['engine']=$engine;
    }

    public function setTripComputer()
    {
        $this->car['tripComputer']='sport supercomputer';
    }

    public function getResult()
    {
        return $this->car;
    }


}
