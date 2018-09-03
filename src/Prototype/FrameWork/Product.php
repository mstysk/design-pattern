<?php
namespace Pattern\Prototype\Framework;

interface Product extends Cloneable
{
    public function uses($s);
    public function createClone();
}
