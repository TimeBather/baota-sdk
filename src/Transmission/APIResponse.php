<?php


namespace BTSDK\Transmission;


class APIResponse
{
    /**
     * @var array $data 数据数组
     */
    protected $data=[];

    /**
     * @param array $data 往Response中填充
     */
    public function fill(array $data){
        $this->data=$data;
    }
    public function __get($key){
        return isset($this->data[$key])?$this->data[$key]:null;
    }

    /**
     * @return array 获得的响应
     */
    public function getResponse(){
        return $this->data;
    }
}