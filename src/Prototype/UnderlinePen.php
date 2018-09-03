<?php
namespace Pattern\Prototype;

use Pattern\Prototype\Framework\Product;

class UnderlinePen implements Product
{
    /** @var string decoration **/
    private $deco;

    /**
     * Constructor
     *
     * @param string $char
     * @access public
     */
    public function __construct($deco)
    {
        $this->deco = $deco;
    }

    /**
     * uses
     *
     * @param string $s
     * @access public
     */
    public function uses($s)
    {
        echo "\"{$s}\"";
        echo PHP_EOL;
        $this->outputDeco(strlen($s));
        echo PHP_EOL;

    }

    public function createClone()
    {
        return clone $this;
    }

    private function outputDeco($length)
    {
        for ($i = 0; $i < $length; $i++) {
            echo $this->deco;
        }
    }
}
