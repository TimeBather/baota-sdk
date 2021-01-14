<?php


namespace BTSDK\Operations\Database\System\System\System\System\System\System\System\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site;


use BTSDK\Interfaces\Operation;
use BTSDK\Traits\OperationUtils;
use BTSDK\Transmissions\APIResponse;

/**
 * 删除网站备份
 */
class DeleteSiteBackupOperation extends BaseOperation implements Operation
{
    use OperationUtils;
    public function getConfigure()
    {
        return [
            'url' => '/site?action=DelBackup',
            'method' => 'POST',
            'parameters' => [
                ['name'=>'id','displayName'=>'id','required'=>true],
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
