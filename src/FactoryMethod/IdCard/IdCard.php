<?php
namespace Pattern\FactoryMethod\IdCard;

use Pattern\FactoryMethod\Framework;

class IdCard extends Framework\Product
{
    /** @string **/
    private $owner;

    public function __construct($owner)
    {
        echo "${owner}のカードを作ります";
        $this->owner = $owner;
    }

    public function uses()
    {
        echo "{$this->owner}のカードを使います";
    }

    public function getOwner()
    {
        return $this->owner;
    }
}
