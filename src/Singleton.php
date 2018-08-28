<?php

use Pattern\Singleton\Singleton;

class Main 
{
    public function __construct()
    {
        $obj1 = Singleton::getInstance();
        $obj2 = Singleton::getInstance();

        if ($obj1 === $obj2) {
            echo '同じだよ';
        } else {
            echo '違うよ';
        }
    }
}

require __DIR__ . '/../bootstrap.php';

new Main();
