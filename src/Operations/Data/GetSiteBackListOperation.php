<?php


namespace BTSDK\Operations\Database\System\System\System\System\System\System\System\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Site\Files\Files\Files\Files\Files\Data;


use BTSDK\Interfaces\Operation;
use BTSDK\Traits\OperationUtils;
use BTSDK\Transmissions\APIResponse;

/**
 * 获取网站备份列表
 */
class GetSiteBackListOperation extends BaseOperation implements Operation
{
    use OperationUtils;
    public function getConfigure()
    {
        return [
            'url' => '/data?action=getData&table=backup',
            'method' => 'POST',
            'parameters' => [
                ['name'=>'p','displayName'=>'page'],
                ['name'=>'limit','displayName'=>'limit','required'=>true],
                ['name'=>'type','displayName'=>'typeId'],
                ['name'=>'tojs','displayName'=>'paginationCallback'],
                ['name'=>'search','displayName'=>'searchKeyword']
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
