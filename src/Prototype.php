<?php
require __DIR__ . '/../bootstrap.php';

use Pattern\Prototype\Framework;
use Pattern\Prototype\UnderlinePen;
use Pattern\Prototype\MessageBox;

class Main
{
    public function __construct()
    {
        $manager = new Framework\Manager();

        $upen = new UnderlinePen('~');
        $asterisk = new MessageBox('*');
        $slash = new Messagebox('/');

        $manager->register('strong message', $upen);
        $manager->register('warning box', $asterisk);
        $manager->register('slash box', $slash);

        $strong = $manager->create('strong message');
        $strong->uses('Hello, world');

        $warning = $manager->create('warning box');
        $warning->uses('Hello, world');

        $slash = $manager->create('slash box');
        $slash->uses('Hello, world');
    }
}

new Main();
