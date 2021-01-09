<?php


namespace BTSDK\Models;


use BTSDK\APIClient;

class MiddleModel
{
    protected $source;
    public function __construct($source,APIClient $client=null){
        $this->source=new $source;
        $this->source->setConnection($client==null?$this->source->getDefaultConnection():$client);

    }
    public function where($key,$value){
        $this->source->setOperationChainData('operation','where');
        $this->source->setOperationChainData('key',$key);
        $this->source->setOperationChainData('value',$value);
        return $this;
    }
    public function first(){
        $this->source->setOperationChainData('limit',1);
        return $this->get()->first();
    }
    public function limit($count){
        $this->source->setOperationChainData('limit',$count);
        return $this->get();
    }
    public function get(){
        return $this->source->callGet();
    }
}