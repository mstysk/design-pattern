<?php
namespace Pattern\Builder;

/**
 * HtmlBuilder
 *
 * @uses Builder
 * @package 
 * @version $id$
 * @copyright 2018 Blennd
 * @author Trevor Suarez <rican7@gmail.com>
 * @license PHP Version 5.4 {@link http://www.php.net/license/}
 */
class HtmlBuilder extends Builder
{
    /** @var File **/
    private $writer;

    /** @var ArrayObject **/
    private $buffer;

    public function __construct()
    {
        $this->buffer = new \ArrayObject;
    }

    /**
     * makeTitle
     *
     * @param mixed $title
     * @access public
     * @return void
     */
    public function makeTitle($title)
    {
        $this->buffer->append(
            "<html><head><title>{$title}</title></head><body>"
        );
        $this->buffer->append(
            "<h1>{$title}</h1>"
        );
    } // End function makeTitle

    /**
     * makeString
     *
     * @param mixed $str
     * @access public
     * @return void
     */
    public function makeString($str)
    {
        $this->buffer->append("<p>{$str}</p>");
    } // End function makeString

    /**
     * makeItmes
     *
     * @param array $items
     * @access public
     * @return void
     */
    public function makeItems(array $items)
    {
        $this->buffer->append('<ul>');
        foreach ($items as $item) {
            $this->buffer->append("<li>{$item}</li>");
        }
        $this->buffer->append('</ul>');

    } // End function makeItmes

    /**
     * close
     *
     * @access public
     * @return void
     */
    public function close()
    {
        $this->buffer->append('</body></html>');
    } // End function close

    public function getResult()
    {
        return implode('', iterator_to_array($this->buffer));
    }
} // End class TextBuilder

