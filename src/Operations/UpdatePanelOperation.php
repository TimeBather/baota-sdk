<?php


namespace BTSDK\Operations;


use BTSDK\Interfaces\Operation;
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
