<?php


namespace BTSDK\Interfaces;


interface Type
{
    public static function parse($data);
    public function toString();
}