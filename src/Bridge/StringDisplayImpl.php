<?php
namespace Pattern\Bridge;

class StringDisplayImpl extends DisplayImpl
{
    /** @var string **/
    private $string;
    
    /** @var int **/
    private $width;

    public function __construct($string)
    {
        $this->string = $string;
        $this->width = \strlen($string);
    }
    
    public function rawOpen()
    {
        $this->outputLine();
    }

    public function rawOutput()
    {
        echo "|{$this->string}|";
    }

    public function rawClose()
    {
        $this->outputLine();
    }

    private function outputLine()
    {
        echo '+';
        for ($i = 0; $i < $this->width; $i++) {
            echo '-';
        }
        echo '+';
    }
}
