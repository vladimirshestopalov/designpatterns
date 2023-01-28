<?php

namespace App\DesignPatterns\Structural\Proxy;

use App\DesignPatterns\Structural\Proxy\Contracts\productRepositoryInterface;
use App\DesignPatterns\Structural\Proxy\Repositories\productRepository;
use Illuminate\Support\Facades\App;

class getProduct
{
    public function run(int $pid)
    {
        return (new productRepository())->find($pid);
    }

    public function runImpl(int $pid)
    {
        //биндинг привязан в appserviceprovider
        return (App::make(productRepositoryInterface::class))->find($pid);
    }
}
