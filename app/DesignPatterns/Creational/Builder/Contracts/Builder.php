<?php

namespace App\DesignPatterns\Creational\Builder\Contracts;

interface Builder
{
    public function reset();

    public function setSeats(int $i);

    public function setEngine(IEngine $engine);

    public function setTripComputer();

}
