<?php
namespace Pattern\Prototype\Framework;

class Manager
{
    private $showcase = [];

    public function register($name, Product $proto)
    {
        $this->showcase[$name] = $proto;
    }

    public function create($protoname)
    {
        $product = $this->showcase[$protoname];
        return $product->createClone();
    }
}
