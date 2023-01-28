<?php

namespace App\DesignPatterns\Structural\Proxy\Repositories;

class productRepository
{
    public function find(int $pid)
    {
        return 'product'.$pid.' from noraml repo';
    }
}
