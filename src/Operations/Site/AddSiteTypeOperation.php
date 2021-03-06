<?php


namespace BTSDK\Operations\Site;


use BTSDK\Interfaces\Operation;
use BTSDK\Operations\BaseOperation;
use BTSDK\Traits\OperationUtils;
use BTSDK\Transmissions\APIResponse;

/**
 * 添加网站分类
 */
class AddSiteTypeOperation extends BaseOperation implements Operation
{
    use OperationUtils;
    public function getConfigure()
    {
        return [
            'url' => '/site?action=add_site_type',
            'method' => 'POST',
            'parameters' => [
                ['name'=>'name','displayName'=>'name','required'=>true],
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
