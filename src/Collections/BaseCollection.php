<?php


namespace BTSDK\Collections;


use ArrayAccess;
use BTSDK\Exceptions\NotImplementedException;
use BTSDK\Exceptions\NotSupportException;
use Iterator;

class BaseCollection implements ArrayAccess, Iterator
{
    protected $data;
    protected $source;
    public function __construct(array $data,$source){
        $this->data=$data;
        $this->source=$source;
    }
    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }
    public function offsetGet($offset)
    {
        if(class_exists($this->source)){
            return new $this->source($this->data[$offset]);
        }
        return $this->data[$offset];
    }

    public function offsetSet($offset, $value)
    {
        throw new NotSupportException();
    }

    public function offsetUnset($offset)
    {
        throw new NotSupportException();
    }
    protected $pointer=null;
    public function current()
    {
        // TODO: Implement current() method.
    }

    public function next()
    {
        // TODO: Implement next() method.
    }

    public function key()
    {
        // TODO: Implement key() method.
    }

    public function valid()
    {
        // TODO: Implement valid() method.
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
    }
    public function first(){
        return isset($this->data[0])?$this->offsetGet(0):null;
    }
}