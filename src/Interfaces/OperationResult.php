<?php


namespace BTSDK\Interfaces;


use BTSDK\Transmissions\APIResponse;

interface OperationResult
{
    /**
     * 解析APIResponse结果
     * @param APIResponse $response API返回值
     * @return void
     */
    public function parse(APIResponse $response);
}