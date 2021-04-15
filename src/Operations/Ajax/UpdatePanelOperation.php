<?php


namespace BTSDK\Operations\Ajax;


use BTSDK\Interfaces\Operation;
use BTSDK\Operations\BaseOperation;
use BTSDK\Traits\OperationUtils;
use BTSDK\Transmissions\APIResponse;

/**
 * 检查面板更新
 */
class UpdatePanelOperation extends BaseOperation implements Operation
{
    use OperationUtils;
    public function getConfigure()
    {
        return [
            'url' => '/ajax?action=UpdatePanel',
            'method' => 'POST',
            'parameters' => [
                ['name'=>'check','displayName'=>'check'],
                ['name'=>'force','displayName'=>'force'],
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
