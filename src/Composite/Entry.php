<?php
namespace Pattern\Composite;

abstract class Entry
{
    abstract public function getName();

    abstract public function getSize();

    public function add(Entry $entry)
    {
        throw new \RuntimeException();
    }

    public function printList()
    {
        echo $this->printList('');
    }

    abstract protected function printList($prefix);

    public function __toString()
    {
        return $this->getName() . '(' . $this->getSize() . ')';
    }

}
