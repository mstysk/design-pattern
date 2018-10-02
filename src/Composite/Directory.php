<?php
namespace Pattern\Composite;

class Directory extends Entry
{
    private $name;
    private $directory;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSize()
    {
        return array_reduce(
            $this->directory,
            function($carry, $item) {
                return $carry + $item->getSize();
            },
            0
        );
    }

    public function add(Entry $entry)
    {
        $this->directory[] = $entry;
    }

    protected function printList($prefix)
    {
        $mess = $prefix . '/' . (string)$this . PHP_EOL;

        foreach ($this->directory as $directory) {
            $mess .= $this->printList($prefix . (string)$this) . PHP_EOL;
        }
        return $mess;
    }
}
