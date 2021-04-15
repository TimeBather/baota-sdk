<?php


namespace BTSDK\Operations\Files;


use BTSDK\Interfaces\Operation;
use BTSDK\Operations\BaseOperation;
use BTSDK\Traits\OperationUtils;
use BTSDK\Transmissions\APIResponse;

/**
 * 回收站
 */
class GetRecyclebinOperation extends BaseOperation implements Operation
{
    use OperationUtils;
    public function getConfigure()
    {
        return [
            'url' => '/files?action=Get_Recycle_bin',
            'method' => 'POST',
            'parameters' => [
                ['name'=>'action','displayName'=>'action','required'=>true,'default'=>'Get_Recycle_bin'],
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
