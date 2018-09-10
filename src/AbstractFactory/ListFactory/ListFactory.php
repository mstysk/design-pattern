<?php
namespace Pattern\AbstractFactory\ListFactory;
use Pattern\AbstractFactory\Factory\Factory;


class ListFactory extends Factory
{
    public function createLink($caption, $url)
    {
        return new ListLink($caption, $url);
    }

    public function createTray($caption)
    {
        return new ListTray($caption);
    }

    public function createPage($title, $author)
    {
        return new ListPage($title, $author);
    }
}
