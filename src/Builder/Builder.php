<?php
namespace Pattern\Builder;

abstract class Builder
{
    abstract public function makeTitle($title);
    abstract public function makeString($str);
    abstract public function makeItems(array $items);
    abstract public function close();
}
