<?php


namespace BTSDK\Types;


use BTSDK\Interfaces\Type;
use Webmozart\PathUtil\Path as PathParser;
class Path extends BaseType implements Type
{
    protected $path;
    public static function parse($data)
    {
        return new self($data);
    }
    public function __construct($data){
        $this->path=PathParser::canonicalize($data);
    }
    public function toString()
    {
        return $this->path;
    }
    public function __call($name,$value){
        array_unshift($value,$this->path);
        return call_user_func_array([PathParser::class,$name],$value);
    }
}