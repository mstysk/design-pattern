<?php
namespace Pattern\AbstractFactory\Factory;

abstract class Factory
{
    public static function getFactory($className)
    {
        return new $className;
    }

    abstract function createLink($caption, $url);
    abstract function createTray($caption);
    abstract function createPage($title, $author);
}


