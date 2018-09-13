<?php
namespace Pattern\Observer;

interface Observer
{
    public function update(NumberGenerator $generator);
}
