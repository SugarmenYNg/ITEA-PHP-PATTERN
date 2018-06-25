<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 25.06.18
 * Time: 14:28
 */

namespace App\DesignPatterns\Collection;

class ArrayCollection implements \Iterator, \Countable, \ArrayAccess
{
    private $array = [];
    private $iteratorIndex = 0;

    public function __construct($array)
    {
        $this->array = $array;
    }

    public function current()
    {
        return $this->array[$this->iteratorIndex];
    }

    public function next()
    {
        $this->iteratorIndex++;
    }

    public function key()
    {
        return $this->iteratorIndex;
    }

    public function valid()
    {
        return isset($this->array[$this->iteratorIndex]);
    }

    public function rewind()
    {
        $this->iteratorIndex = 0;
    }

    public function count()
    {
        return \count($this->array);
    }

    public function offsetExists($offset)
    {
        return isset($this->array[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->array[$offset];
    }

    public function offsetSet($offset, $value)
    {
        throw new \LogicException('Collection is read only');
    }

    public function offsetUnset($offset)
    {
        unset($this->array[$offset]);
    }
}
