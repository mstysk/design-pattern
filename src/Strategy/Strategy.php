<?php
namespace Pattern\Strategy;

interface Strategy
{
    abstract public function nextHand();
    abstract public function study($win);
}
