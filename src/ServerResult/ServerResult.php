<?php


namespace BTSDK\ServerResult;


use BTSDK\Exceptions\NotSupportException;
use BTSDK\Interfaces\OperationResult;
use BTSDK\Transmissions\APIResponse;

class ServerResult
{
    protected $response;
    protected $result;
    public function __construct(APIResponse $response,OperationResult $result=null){
        $this->response=$response;
        $this->result=$result;
    }
    public function asRawArray(){
        return  $this->response->getResponse();
    }
    public function asResponse(){
        return $this->response;
    }
    public function asOperationResult(){
        if($this->result==null)throw new NotSupportException();
        return $this->result;
    }
}