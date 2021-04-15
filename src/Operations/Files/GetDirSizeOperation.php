<?php


namespace BTSDK\Operations\Files;


use BTSDK\Interfaces\Operation;
use BTSDK\Operations\BaseOperation;
use BTSDK\Traits\OperationUtils;
use BTSDK\Transmissions\APIResponse;

/**
 * 获取面板日志大小
 */
class GetDirSizeOperation extends BaseOperation implements Operation
{
    use OperationUtils;
    public function getConfigure()
    {
        return [
            'url' => '/files?action=GetDirSize',
            'method' => 'POST',
            'parameters' => [
                ['name'=>'path','displayName'=>'path','required'=>true,'default'=>'/www/wwwlogs'],
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
