<?php


namespace BTSDK\Interfaces;


use BTSDK\Interfaces\Operation;
use BTSDK\Transmission\APIRequest;
use BTSDK\Transmission\APIResponse;

interface ServerConnection
{
    /**
     * 发送请求方法
     * @param APIRequest $request API请求
     * @return APIResponse API响应
     */
    public function sendRequest(APIRequest $request);
}