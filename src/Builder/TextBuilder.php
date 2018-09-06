<?php
namespace Pattern\Builder;

/**
 * TextBuilder
 *
 * @uses Builder
 * @package 
 * @version $id$
 * @copyright 2018 Blennd
 * @author Trevor Suarez <rican7@gmail.com>
 * @license PHP Version 5.4 {@link http://www.php.net/license/}
 */
class TextBuilder extends Builder
{
    /** @var ArrayObject **/
    private $buffer ;

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
        $this->buffer->append('==========================\n');// . PHP_EOL;
        $this->buffer->append("『{$title}』\n");
        $this->buffer->append('\n');
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
        $this->buffer->append("■{$str}\n");
        $this->buffer->append('\n');
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
        foreach ($items as $item) {
            $this->buffer->append("'{$item}'\n");
        }
        $this->buffer->append('\n');
    } // End function makeItmes

    /**
     * close
     *
     * @access public
     * @return void
     */
    public function close()
    {
        $this->buffer->append('==========================\n');// . PHP_EOL;
    } // End function close

    public function getResult()
    {
        return implode('', iterator_to_array($this->buffer));
    }
} // End class TextBuilder

