<?php
namespace Pattern\Adapter;

class PrintBanner extends Banner implements PrintInterface
{
    public function __construct($string)
    {
        parent::__construct($string);
    }

    public function printWeak()
    {
        $this->showWithParen();
    }

    public function printStrong()
    {
        $this->showWithAster();
    }
}
