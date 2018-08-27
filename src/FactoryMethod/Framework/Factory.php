<?php
namespace Pattern\FactoryMethod\Framework;

/**
 * Factory
 *
 * @abstract
 * @package 
 * @version $id$
 * @copyright 2018 Blennd
 * @author Trevor Suarez <rican7@gmail.com>
 * @license PHP Version 5.4 {@link http://www.php.net/license/} 
 */
abstract class Factory
{
    /**
     * creatre
     *
     * @access public
     * @return ;
     */
    public function create($owner)
    {
        $product = $this->createProduct($owner);
        $this->registerProduct($product);
        return $product;
    }

    /**
     * createProduct
     *
     * @param mixed $owner
     * @access public
     * @return ;
     */
    abstract protected function createProduct($owner);

    /**
     * registerProduct
     *
     * @param Product $product
     * @access public
     * @return ;
     */
    abstract protected function registerProduct(Product $product);
} // End class Factory
