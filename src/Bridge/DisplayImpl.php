<?php
namespace Pattern\Bridge;

abstract class DisplayImpl
{
    abstract public function rawOpen();
    abstract public function rawOutput();
    abstract public function rawClose();
}
