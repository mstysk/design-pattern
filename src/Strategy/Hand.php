<?php
namespace Pattern\Strategy;

class Hand
{
    const GUU = 0;
    const CHO = 1;
    const PAA = 2;

    public static $hands = [
        self::GUU,
        self::CHO,
        self::PAA,
    ];

    public static $handsOfString = [
        self::GUU => 'ぐー',
        self::CHO => 'ちょき',
        self::PAA => 'ぱー',
    ];

    private $handvalue;

    public function __construct($handlevalue)
    {
        if (!in_array($handvalue, static::hands, true)) {
            throw new Exception('ダメです');
        }
        $this->handvalue = $handvalue;
    }

    public function getHand()
    {
        return $this->handvalue;
    }

    public function isStrongerThan(Hand $hand)
    {
        return $this->fight($hand) === 1;
    }

    public function isWeekerThan(Hand $hand)
    {
        return $this->fight($hand) === -1;
    }

    private function fight(Hand $hand)
    {
        return ($hand->getHand() + 1) % 3 === $this->getHand();
    }

    public function __toString()
    {
        return static::handsOfString[$this->handvalue];
    }

    public function otherThan($other)
    {
        $handlevalue = ($this->getHand() + $other) % 3;
        return new self($handlevalue);
    }
}
