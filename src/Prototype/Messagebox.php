<?php
namespace Pattern\Prototype;

use Pattern\Prototype\Framework\Product;

class MessageBox implements Product
{
    private $decochar;
    const MARGIN = 4;

    public function __construct($decochar)
    {
        $this->decochar = $decochar;
    }

    public function uses($s)
    {
        $this->outputDecochar(strlen($s));
        echo PHP_EOL;
        echo "{$this->decochar} {$s} {$this->decochar}";
        echo PHP_EOL;
        $this->outputDecochar(strlen($s));
        echo PHP_EOL;
    }

    public function createClone()
    {
        return clone $this;
    }

    private function outputDecochar($length)
    {
        for($i = 0; $i < $length + self::MARGIN; $i++) {
            echo $this->decochar;
        }
    }
}
