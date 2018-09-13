<?php
use Pattern\Observer\RandomNumberGenerator;
use Pattern\Observer\DigitObserver;
use Pattern\Observer\GraphObserver;

class Main
{
    public function __construct()
    {
        $generator = new RandomNumberGenerator;

        $digit = new DigitObserver;
        $graph = new GraphObserver;

        $generator->addObserver($digit);
        $generator->addObserver($graph);

        $generator->execute();
    }
}

require __DIR__ . '/../bootstrap.php';

new Main;
