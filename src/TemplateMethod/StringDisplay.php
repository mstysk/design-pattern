<?php
namespace Pattern\TemplateMethod;

/**
 * CharDisplay
 *
 * @uses AbstractDisplay
 * @package Pattern\TemplateMethod
 */
class StringDisplay extends AbstractDisplay
{

    /** @var string **/
    private $string;

    /**
     * Constructor
     *
     * @param string $string
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * open
     *
     * @access public
     * @return void
     */
    public function open()
    {
        echo '+----+';
    }

    public function close()
    {
        echo '+----+';
    }

    public function output()
    {
        echo "|{$this->string}|";
    }
}
