<?php


namespace BTSDK\Operations\System;


use BTSDK\Interfaces\Operation;
use BTSDK\Operations\BaseOperation;
use BTSDK\Traits\OperationUtils;
use BTSDK\Transmissions\APIResponse;

/**
 * 获取系统基础统计
 */
class GetSystemTotalOperation extends BaseOperation implements Operation
{
    use OperationUtils;
    public function getConfigure()
    {
        return [
            'url'=>'/system?action=GetSystemTotal',
            'method'=>'POST',
            'parameters'=>[]
        ];
    }

    /**
     * 发送后回调,用于解析参数
     * @param APIResponse $response 原响应
     * @return APIResponse 修改后响应
     */
    public function beforeResponse(APIResponse $response)
    {
        $response=$this->beforeResponseProcess($response);
        $data=$response->getResponse();
        $response->fill([
            "environment"=>[
                "system"=>$data['system'],
                "runTime"=>$data['time'],
                "panelVersion"=>$data['version']
            ],
            "cpu"=>[
                "used"=>$data['cpuRealUsed'],
                "count"=>$data['cpuNum']
            ],
            "memory"=>[
                "used"=>$data['memRealUsed'],
                "cached"=>$data['memCached'],
                "free"=>$data['memFree'],
                "buffers"=>$data['memBuffers']
            ]
        ]);
        return $response;
    }
}