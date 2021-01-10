<?php


namespace BTSDK\Operations;


use BTSDK\Interfaces\Operation;
use BTSDK\Traits\OperationUtils;

/**
 * 获取站点数据
 */
class GetSitesOperation extends BaseOperation implements Operation
{
    use OperationUtils;

    /**
     * 获取当前Operation配置信息
     * @return array 配置数组
     */
    public function getConfigure()
    {
        return [
            'url'=>'/data?action=getData&table=sites',
            'method'=>'POST',
            'parameters'=>[
                ['name'=>'p','displayName'=>'page'],
                ['name'=>'limit','displayName'=>'limit','required'=>true],
                ['name'=>'type','displayName'=>'typeId'],
                ['name'=>'order','displayName'=>'orderType'],
                ['name'=>'tojs','displayName'=>'paginationCallback'],
                ['name'=>'search','displayName'=>'searchKeyword']
            ]
        ];
    }
}