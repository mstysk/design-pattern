<?php
namespace Pattern\Observer;

use ArrayObject;

abstract class NumberGenerator
{
    /** @var ArrayObject */
    private $observers;

    public function __construct()
    {
        $this->observers = new ArrayObject;
    }

    public function addObserver(Observer $observer)
    {
        $this->observers->append($observer);
    }

    public function deleteObserver($observer)
    {
        $this->observers->offsetUnset($this->getObserverId($observer));
    }

    public function notifyObservers()
    {
        $it = $this->observers->getIterator();
        
        while ($it->valid()) {
            $observer = $it->current();
            $observer->update($this);
            $it->next();
        }
    }

    abstract public function getNumber();
    abstract public function execute();

    private function getObserverId($observer)
    {
        $it = $this->observers->getIterator();

        while($iterater->valid()) {
            if ($it->current === $observer) {
                return $it->key();
            }
            $it->next();
        }
        return null;
    }
}
