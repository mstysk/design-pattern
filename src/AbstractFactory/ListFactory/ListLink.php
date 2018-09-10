<?php
namespace Pattern\AbstractFactory\ListFactory;
use Pattern\AbstractFactory\Factory\Link;

/**
 * ListLink
 *
 * @uses Link
 * @package 
 */
class ListLink extends Link
{
    /**
     * makeHtml
     *
     * @access public
     * @return void
     */
    public function makeHtml()
    {
        return "<li><a href=\'{$this->url}\'>{$this->caption}</a></li>\n";
    } // End function makeHtml
} // End class ListLink
