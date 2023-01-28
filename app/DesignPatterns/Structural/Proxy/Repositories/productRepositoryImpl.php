<?php

namespace App\DesignPatterns\Structural\Proxy\Repositories;

use App\DesignPatterns\Structural\Proxy\Contracts\productRepositoryInterface;

class productRepositoryImpl implements productRepositoryInterface
{
    public function find(int $pid)
    {
        return 'product id'.$pid.' from '.__CLASS__;
    }
}
