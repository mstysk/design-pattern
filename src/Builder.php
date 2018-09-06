<?php

require __DIR__ . '/../bootstrap.php';

use Pattern\Builder\Director;
use Pattern\Builder\TextBuilder;
use Pattern\Builder\HtmlBuilder;

class Text
{
    public function __construct()
    {
        $text = new TextBuilder();
        $director = new Director($text);

        $director->construct();

        $ret = $text->getResult();

        echo $ret;
    }
}

class Html
{
    public function __construct()
    {
        $html = new HtmlBuilder();
        $director = new Director($html);

        $director->construct();

        $ret = $html->getResult();

        echo $ret;
    }
}


new Html();

