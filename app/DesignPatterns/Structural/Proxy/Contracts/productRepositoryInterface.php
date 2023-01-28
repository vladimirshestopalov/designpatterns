<?php

namespace App\DesignPatterns\Structural\Proxy\Contracts;

interface productRepositoryInterface
{
    public function find(int $pid);
}
