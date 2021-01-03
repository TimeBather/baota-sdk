<?php


namespace BTSDK\OperationResults;


use BTSDK\Exceptions\NotImplementedException;
use BTSDK\Interfaces\OperationResult;
use BTSDK\Transmissions\APIResponse;

class BaseOperationResult implements OperationResult
{

    /**
     * 解析APIResponse结果
     * @param APIResponse $response API返回值
     * @return void
     * @throws NotImplementedException
     */
    public function parse(APIResponse $response)
    {
        throw new NotImplementedException();
    }
}