<?php
namespace Pattern\Iterator;

interface Iterator
{
  public function hasNext(): bool;
  public function next();
}
