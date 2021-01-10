<?php


namespace BTSDK\Traits;


use BTSDK\APIClient;
use BTSDK\Handlers\ParseHandler;
use BTSDK\Models\MiddleModel;

trait Model
{
    protected $parser=null;
    public static function all(){
        return self::where(null,null);
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
    public function readRaw($key){
        return $this->sourceData[$key];
    }
    public function __get($key){
        if($this->parser==null){
            $this->parser=new ParseHandler();
            $this->handleParse($this->parser);
        }
        $that=$this;
        return $this->parser->parse($key,function($realKey)use($that){
            return $that->readRaw($realKey);
        });
    }


}