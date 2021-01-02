<?php


namespace BTSDK\Traits;


use BTSDK\Exceptions\NotImplementedException;
use BTSDK\Transmission\APIRequest;
use BTSDK\Transmission\APIResponse;
use BTSDK\Exceptions\InvalidParameterException;
use BTSDK\Exceptions\ParameterRequiredException;

trait OperationUtils
{
    protected $parameters=[];
    public function  getConfigure(){
        throw new NotImplementedException();
    }
    public function __set($key,$value){
        $this->parameters[$key]=$value;
    }
    public function __get($key){
        return isset($this->parameters[$key])?$this->parameters[$key]:null;
    }
    public function beforeSend(APIRequest $request){
        return $this->beforeSendProcess($request);
    }
    public function beforeResponse(APIResponse $response){
        return $this->beforeResponseProcess($response);
    }
    public function beforeSendProcess(APIRequest $request){
        $configure=$this->getConfigure();
        $request->url=$configure['url'];
        $request->method=$configure['method'];
        foreach($configure['parameters'] as $parameter){
            if(!isset($this->parameters[$parameter['displayName']]) && (isset($parameter['required']) && $parameter['required'])){
                throw new ParameterRequiredException();
            }
            $request->body[$parameter['name']]=$this->parameters[$parameter['displayName']];
        }
        return $request;
    }
    public function beforeResponseProcess(APIResponse $response){
        return $response;
    }
}