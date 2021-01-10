<?php


namespace BTSDK\Types;


use BTSDK\Exceptions\NotImplementedException;
use BTSDK\Interfaces\Type;

class BaseType implements Type
{

    public static function parse($data)
    {
        throw new NotImplementedException();
    }

    public function toString()
    {
        throw new NotImplementedException();
    }
}