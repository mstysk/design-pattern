<?php
namespace Pattern\AbstractFactory\Factory;

/**
 * Tray
 *
 * @uses Item
 * @abstract
 * @package 
 */
abstract class Tray extends Item
{
    protected $tray = [];

    /**
     * Constructor
     *
     * @param mixed $caption
     * @access public
     */
    public function __construct($caption)
    {
        parent::__construct($caption);
    } // End function Constructor

    /**
     * add
     *
     * @param Item $item
     * @access public
     * @return void
     */
    public function add(Item $item)
    {
        $this->tray[] = $item;
    } // End function add
} // End class Tray
