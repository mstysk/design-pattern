<?php
namespace Pattern\AbstractFactory\Factory;

/**
 * Link
 *
 * @abstract
 * @package 
 * @version $id$
 */
abstract class Link extends Item
{

    /** @var string */
    protected $url;

    /**
     * Constructor
     *
     * @param mixed $caption
     * @param mixed $url
     * @access public
     */
    public function __construct($caption, $url)
    {
        parent::__construct($caption);
        $this->url = $url;
    } // End function Constructor
} // End class Link
