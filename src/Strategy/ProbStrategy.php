<?php
namespace Pattern\Strategy;

class ProbStrategy extends Strategy
{
    private $prevHand;
    private $currentHand;

    private $history = [
        [1, 1, 1],
        [1, 1, 1],
        [1, 1, 1],
    ];
    public function __construct(Hand $hand)
    {
        $this->prevHand = $hand;
    }

    public function nextHand()
    {
        


        $this->prevHand = $this->currentHand;
        return $this->currentHand;
    }

    public function getSum(Hand $hand)
    {
        return array_sum($this->history[$hand->getHand()];
    }

    public function study($win)
    {
        if ($win) {
            $this->history[$this->prevHand->getHand()][$this->currentHand->getHand()]++;
        } else {
            $this->history[$this->prevHand->getHand()][$this->currentHand->otherThan(1)->getHand()]++;
            $this->history[$this->prevHand->getHand()][$this->currentHand->otherThan(2)->getHand()]++;
        }
    }
}
