<?php


namespace BTSDK\Operations;


use BTSDK\Interfaces\Operation;
use BTSDK\Traits\OperationUtils;
use BTSDK\Transmissions\APIResponse;

/**
 * 删除网站分类
 */
class RemoveSiteTypeOperation extends BaseOperation implements Operation
{
    use OperationUtils;
    public function getConfigure()
    {
        return [
            'url' => '/site?action=remove_site_type',
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
