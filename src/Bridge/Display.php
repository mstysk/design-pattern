<?php
namespace Pattern\Bridge;

class Display
{
    /** @var DisplayImpl **/
    private $impl;

    public function __construct(DisplayImpl $impl)
    {
        $this->impl = $impl;
    }

    public function open()
    {
        $this->impl->rawOpen();
    }

    public function output()
    {
        $this->impl->rawOutput();
    }

    public function close()
    {
        $this->impl->rawClose();
    }

    final public function display()
    {
        $this->open();
        $this->output();
        $this->close();
    }
}
