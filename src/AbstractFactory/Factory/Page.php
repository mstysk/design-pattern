<?php
namespace Pattern\AbstractFactory\Factory;

abstract class Page
{
    /** @var string */
    protected $title;

    /** @var string */
    protected $author;

    /** @var array */
    protected $content = [];

    /**
     * Constructor
     *
     * @param mixed $title
     * @param mixed $author
     * @access public
     */
    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
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
        $this->content[] = $item;
    } // End function add

    /**
     * output
     *
     * @access public
     * @return void
     */
    public function output()
    {
        echo $this->makeHtml();
    } // End function output

    /**
     * makeHtml
     *
     * @access public
     * @return ;
     */
    abstract public function makeHtml();
} // End function  // End function makeHtml
