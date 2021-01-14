<?php


namespace BTSDK\Operations\Database\System\System\System\System\System\System\System\Site\Site\Site\Site\Site\Site\Site;


use BTSDK\Interfaces\Operation;
use BTSDK\Traits\OperationUtils;
use BTSDK\Transmissions\APIResponse;

/**
 * 开启并设置网站密码访问
 */
class SetHasPwdOperation extends BaseOperation implements Operation
{
    use OperationUtils;
    public function getConfigure()
    {
        return [
            'url' => '/site?action=SetHasPwd',
            'method' => 'POST',
            'parameters' => [
                ['name'=>'id','displayName'=>'id','required'=>true],
                ['name'=>'username','displayName'=>'username','required'=>true],
                ['name'=>'password','displayName'=>'password','required'=>true],
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
