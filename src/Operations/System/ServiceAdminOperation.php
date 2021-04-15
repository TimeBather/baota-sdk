<?php


namespace BTSDK\Operations\System;


use BTSDK\Interfaces\Operation;
use BTSDK\Operations\BaseOperation;
use BTSDK\Traits\OperationUtils;
use BTSDK\Transmissions\APIResponse;

/**
 * 系统服务
 */
class ServiceAdminOperation extends BaseOperation implements Operation
{
    use OperationUtils;
    public function getConfigure()
    {
        return [
            'url' => '/system?action=ServiceAdmin',
            'method' => 'POST',
            'parameters' => [
                ['name'=>'name','displayName'=>'name','required'=>true],
                ['name'=>'type','displayName'=>'type','required'=>true],
            ]
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
