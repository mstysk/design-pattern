<?php
namespace Pattern\AbstractFactory\TableFactory;
use Pattern\AbstractFactory\Factory\Link;

/**
 * TableLink
 *
 * @uses Link
 * @package 
 */
class TableLink extends Link
{
    /**
     * makeHtml
     *
     * @access public
     * @return void
     */
    public function makeHtml()
    {
        return "<td><a href=\'{$this->url}\'>{$this->caption}</a></td>\n";
    } // End function makeHtml
} // End class ListLink
