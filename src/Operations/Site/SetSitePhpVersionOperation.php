<?php


namespace BTSDK\Operations\Database\System\System\System\System\System\System\System\Site\Site\Site\Site\Site\Site;


use BTSDK\Interfaces\Operation;
use BTSDK\Traits\OperationUtils;
use BTSDK\Transmissions\APIResponse;

/**
 * 修改指定网站的PHP版本
 */
class SetSitePhpVersionOperation extends BaseOperation implements Operation
{
    use OperationUtils;
    public function getConfigure()
    {
        return [
            'url' => '/site?action=SetPHPVersion',
            'method' => 'POST',
            'parameters' => [
                ['name'=>'siteName','displayName'=>'siteName','required'=>true],
                ['name'=>'version','displayName'=>'version','required'=>true],
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
