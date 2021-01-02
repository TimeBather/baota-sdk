<?php


namespace BTSDK\Transmission;


class APIResponse
{
    protected $data=[];
    public function fill($data){
        $this->data=$data;
    }
    public function __get($key){
        return isset($this->data[$key])?$this->data[$key]:null;
    }
    public function getResponse(){
        return $this->data;
    }
}