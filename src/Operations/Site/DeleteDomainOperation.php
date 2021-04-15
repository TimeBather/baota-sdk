<?php


namespace BTSDK\Operations\Site;


use BTSDK\Interfaces\Operation;
use BTSDK\Operations\BaseOperation;
use BTSDK\Traits\OperationUtils;
use BTSDK\Transmissions\APIResponse;

/**
 * 删除网站域名
 */
class DeleteDomainOperation extends BaseOperation implements Operation
{
    use OperationUtils;
    public function getConfigure()
    {
        return [
            'url' => '/site?action=DelDomain',
            'method' => 'POST',
            'parameters' => [
                ['name'=>'id','displayName'=>'id','required'=>true],
                ['name'=>'webname','displayName'=>'webname','required'=>true],
                ['name'=>'domain','displayName'=>'domain','required'=>true],
                ['name'=>'port','displayName'=>'port','required'=>true],

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
