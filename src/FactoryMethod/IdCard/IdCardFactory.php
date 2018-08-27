<?php
namespace Pattern\FactoryMethod\IdCard;

use Pattern\FactoryMethod\Framework;

class IdCardFactory extends Framework\Factory
{
    /** @var array **/
    private $owners;

    protected function createProduct($owner)
    {
        return new IdCard($owner);
    }

    protected function registerProduct(Framework\Product $product)
    {
        $this->owners[] = $product->getOwner();
    }

    public function getOwners()
    {
        return $this->owners;
    }
}
