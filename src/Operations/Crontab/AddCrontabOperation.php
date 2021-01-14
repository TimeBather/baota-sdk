<?php


namespace BTSDK\Operations\Database\System\System\System\System\System\System\System\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Files\Files\Files\Files\Files\Data\Crontab\Crontab\Crontab;


use BTSDK\Interfaces\Operation;
use BTSDK\Traits\OperationUtils;
use BTSDK\Transmissions\APIResponse;

/**
 * 添加计划任务
 */
class AddCrontabOperation extends BaseOperation implements Operation
{
    use OperationUtils;
    public function getConfigure()
    {
        return [
            'url' => '/crontab?action=AddCrontab',
            'method' => 'POST',
            'parameters' => [
                ['name'=>'name','displayName'=>'name','required'=>true],
                ['name'=>'type','displayName'=>'type'],
                ['name'=>'where1','displayName'=>'where1'],
                ['name'=>'hour','displayName'=>'hour'],
                ['name'=>'minute','displayName'=>'minute'],
                ['name'=>'week','displayName'=>'week'],
                ['name'=>'sType','displayName'=>'sType'],
                ['name'=>'sBody','displayName'=>'sBody'],
                ['name'=>'sName','displayName'=>'sName'],
                ['name'=>'backupTo','displayName'=>'backupTo'],
                ['name'=>'save','displayName'=>'save'],
                ['name'=>'urladdress','displayName'=>'urladdress']
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
