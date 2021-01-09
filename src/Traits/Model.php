<?php


namespace BTSDK\Traits;


use BTSDK\APIClient;
use BTSDK\Models\MiddleModel;

trait Model
{
    public static function all(){

    }
    public static function find($id){
        return self::where("id",$id)->first();
    }
    public static function where($key,$value){
        return (new MiddleModel(self::class))->where($key,$value);
    }
    public static function connection(APIClient $client)
    {
        return new MiddleModel(self::class,$client);
    }

}