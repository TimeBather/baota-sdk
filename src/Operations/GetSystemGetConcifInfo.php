<?php


namespace BTSDK\Operations;


use BTSDK\Interfaces\Operation;
use BTSDK\Traits\OperationUtils;
use BTSDK\Transmissions\APIResponse;

/**
 * 获取/刷新服务器配置（完整）
 */
class GetSystemGetConcifInfo extends BaseOperation implements Operation
{
    use OperationUtils;
    public function getConfigure()
    {
        return [
            'url' => '/system?action=GetConcifInfo',
            'method' => 'POST',
            'parameters' => []
        ];
    }

    /**
     * 发送后回调,用于解析参数
     * @param APIResponse $response 原响应
     * @return APIResponse 修改后响应
     */
    public function beforeResponse(APIResponse $response)
    {
        return $response;
    }
}
