<?php
namespace Pattern\Observer;

class GraphObserver implements Observer
{
    public function update(NumberGenerator $generator)
    {
        echo $generator->getNumber();
         echo 'GraphObserver:' . \implode('', \array_map(function($a) {
            return '*';
        }, \range(0, $generator->getNumber()))) . "\n" ;

        \sleep(2);
    }
}
