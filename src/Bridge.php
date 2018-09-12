<?php

use Pattern\Bridge\Display;
use Pattern\Bridge\CountDisplay;
use Pattern\Bridge\StringDisplayImpl;

class Main
{
    public function __construct()
    {
        $d1 = new Display(new StringDisplayImpl('Hello, Japan.'));
        $d2 = new CountDisplay(new StringDisplayImpl('Hello, World.'));
        $d3 = new CountDisplay(new StringDisplayImpl('Hello, Universe.'));

        $d1->display();
        $d2->display();
        $d3->display();
        $d3->multiDisplay(3);
    }
}

require __DIR__ . '/../bootstrap.php';

$main = new Main();
