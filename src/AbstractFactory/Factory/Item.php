<?php
namespace Pattern\AbstractFactory\Factory;

abstract class Item
{

    /** @var string */
    protected $caption;

    /**
     * Constructor
     *
     * @param mixed $caption
     * @access public
     */
    public function __construct($caption)
    {
        $this->caption = $caption;
    } // End function Constructor

    /**
     * makeHtml
     *
     * @abstract
     * @access public
     * @return ;
     */
    abstract public function makeHtml();
} // End function makeHtml
