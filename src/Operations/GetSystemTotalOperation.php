<?php


namespace BTSDK\Operations;


use BTSDK\Interfaces\Operation;
use BTSDK\Traits\OperationUtils;
use BTSDK\Transmission\APIResponse;

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