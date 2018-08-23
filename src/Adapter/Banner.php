<?php
namespace Pattern\Adapter;

class Banner
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function showWithParen()
    {
        echo sprintf('(%s)', $this->string);
    }

    public function showWithAster()
    {
        echo sprintf('*%s*', $this->string);
    }
}
