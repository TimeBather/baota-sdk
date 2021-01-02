<?php


namespace BTSDK\Interfaces;


use BTSDK\Transmission\APIRequest;
use BTSDK\Transmission\APIResponse;

interface Operation
{
    /**
     * 获取当前Operation配置信息
     * @return array 配置数组
     */
    public function getConfigure();
    public function __set($key, $value);
    public function __get($key);

    /**
     * 发送前回调,用于动态修改/加入/检测参数
     * @param APIRequest $request
     * @return APIRequest
     */
    public function beforeSend(APIRequest $request);

    /**
     * 发送后回调,用于解析参数
     * @param APIResponse $response 原响应
     * @return APIResponse 修改后响应
     */
    public function beforeResponse(APIResponse $response);
}