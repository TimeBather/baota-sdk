<?php


namespace BTSDK\Interfaces;


interface Model
{
    public static function all();
    public static function connection();
    public static function where();
    public static function whereIn();

}