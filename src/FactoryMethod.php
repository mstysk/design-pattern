<?php
use Pattern\FactoryMethod;

class Main
{
    public function __construct()
    {
        $factory = new FactoryMethod\IdCard\IdCardFactory();       
        $card1 = $factory->create('結城浩');
        $card2 = $factory->create('とむら');
        $card3 = $factory->create('佐藤');

        $card1->uses();
        $card2->uses();
        $card3->uses();

        var_dump($factory->getOwners());
    }
}

require __DIR__ . '/../bootstrap.php';

new Main();
