<?php


namespace BTSDK\Operations;


use BTSDK\Exceptions\NotImplementedException;
use BTSDK\Interfaces\Operation;
use BTSDK\Transmission\APIRequest;
use BTSDK\Transmission\APIResponse;

class BaseOperation implements Operation
{
    /**
     * 获取当前Operation配置信息
     * @return array 配置数组
     * @throws NotImplementedException
     */
    public function getConfigure()
    {
        throw new NotImplementedException();
    }

    public function __set($key, $value)
    {
        throw new NotImplementedException();
    }

    public function __get($key)
    {
        throw new NotImplementedException();
    }

    /**
     * 发送前回调,用于动态修改/加入/检测参数
     * @param APIRequest $request
     * @return APIRequest
     * @throws NotImplementedException
     */
    public function beforeSend(APIRequest $request)
    {
        throw new NotImplementedException();
    }

    /**
     * 发送后回调,用于解析参数
     * @param APIResponse $response 原响应
     * @return APIResponse 修改后响应
     * @throws NotImplementedException
     */
    public function beforeResponse(APIResponse $response)
    {
        throw new NotImplementedException();
    }
}