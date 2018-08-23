<?php

use Pattern\Adapter\PrintBanner;

class Main
{
    public function __construct()
    {
        $print = new PrintBanner('Hello');

        $print->printWeak();
        $print->printStrong();
    }
}

require __DIR__ . '/../bootstrap.php';

new Main();
