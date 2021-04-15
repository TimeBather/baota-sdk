<?php


namespace BTSDK\Operations\Site;


use BTSDK\Interfaces\Operation;
use BTSDK\Operations\BaseOperation;
use BTSDK\Traits\OperationUtils;
use BTSDK\Transmissions\APIResponse;

/**
 * 添加网站域名
 */
class AddDomainOperation extends BaseOperation implements Operation
{
    use OperationUtils;
    public function getConfigure()
    {
        // API接口请求参数
        $get = [
            'action'=>'AddDomain',
        ];
        // 当前目录名转换小写，获取接口地址并拼接完整API请求接口
        $url = '/'.mb_strtolower(getcwd()).'?'.http_build_query($get);
        return [
            'url' => $url,
            'method' => 'POST',
            'parameters' => [
                ['name'=>'id','displayName'=>'id','required'=>true],
                ['name'=>'webname','displayName'=>'webname','required'=>true],
                ['name'=>'domain','displayName'=>'domain','required'=>true],
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
