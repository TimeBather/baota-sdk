<?php


namespace BTSDK\Traits;


use BTSDK\Exceptions\NotImplementedException;
use BTSDK\Transmission\APIRequest;
use BTSDK\Transmission\APIResponse;
use BTSDK\Exceptions\InvalidParameterException;
use BTSDK\Exceptions\ParameterRequiredException;

trait OperationUtils
{
    /**
     * @var array $parameters 注入参数列表
     */
    protected $parameters=[];
    /**
     * 获取当前Operation配置信息
     * @return array 配置数组
     * @throws NotImplementedException
     */
    public function  getConfigure(){
        throw new NotImplementedException();
    }
    public function __set($key,$value){
        $this->parameters[$key]=$value;
    }
    public function __get($key){
        return isset($this->parameters[$key])?$this->parameters[$key]:null;
    }

    /**
     * 发送前回调,用于动态修改/加入/检测参数
     * @param APIRequest $request
     * @return APIRequest
     * @throws ParameterRequiredException
     */
    public function beforeSend(APIRequest $request)
    {
        return $this->beforeSendProcess($request);
    }
    /**
     * 发送后回调,用于解析参数
     * @param APIResponse $response 原响应
     * @return APIResponse 修改后响应
     */
    public function beforeResponse(APIResponse $response){
        return $this->beforeResponseProcess($response);
    }

    /**
     * 发送前处理
     * @param APIRequest $request API请求
     * @return APIRequest 修改后API请求
     * @throws ParameterRequiredException
     * @throws NotImplementedException
     */
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

    /**
     * 发送后处理
     * @param APIResponse $response API响应
     * @return APIResponse 修改后API响应
     */
    public function beforeResponseProcess(APIResponse $response){
        return $response;
    }
}