<?php
namespace Pattern\Adapter;

class PrintBanner extends Printer
{
    /** @var Banner **/
    private $banner;

    /**
     * Constructor
     *
     * @param string $string
     */
    public function __construct($string)
    {
        $this->banner = new Banner($string);
    } // End function Constructor

    /**
     * printWeak
     */
    public function printWeak()
    {
        $this->banner->showWithParen();
    } // End function printWeak

    /**
     * printStrong
     */
    public function printStrong()
    {
        $this->banner->showWithAster();
    } // End function printStrong
}
