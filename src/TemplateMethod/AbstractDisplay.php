<?php
namespace Pattern\TemplateMethod;

/**
 * AbstractDisplay
 *
 * @abstract
 * @package Pattern\TemplateMethod;
 */
abstract class AbstractDisplay
{
    /**
     * open
     *
     * @abstract
     * @access public
     * @return ;
     */
    abstract public function open();

    /**
     * output
     *
     * @abstract
     * @access public
     * @return ;
     */
    abstract public function output();

    /**
     * close
     *
     * @abstract
     * @access public
     * @return ;
     */
    abstract public function close();

    /**
     * display
     *
     * @access public
     * @return void
     */
    public function display()
    {
        $this->open();
        for ($i = 0; $i < 5; $i++) {
            $this->output();
        }
        $this->close();
    }
}
