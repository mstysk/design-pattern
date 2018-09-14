<?php
namespace Pattern\Strategy;

class WinningStrategy extends Strategy
{

    private $won = false;
    private $prevHand;

    public function __construct(Hand $hand)
    {
        $this->prevHand = $hand;
    }
    public function nextHand()
    {
        if (!$this->won) {
            $this->prevHand = new Hand(Hand::$hands[\rand(0, 2)])
        }
        return $this->prevHand;
    }

    public function study($win)
    {
        $this->won = $win;
    }
}
