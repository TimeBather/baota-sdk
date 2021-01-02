<?php


namespace BTSDK\Operations;


use BTSDK\Exceptions\NotImplementedException;
use BTSDK\Interfaces\Operation;
use BTSDK\Transmission\APIRequest;
use BTSDK\Transmission\APIResponse;

class BaseOperation implements Operation
{

    public function getConfigure()
    {
        throw new NotImplementedException();
    }

    public function __set($key, $value)
    {
        throw new NotImplementedException();
    }

    public function __get($key)
    {
        throw new NotImplementedException();
    }

    public function beforeSend(APIRequest $request)
    {
        throw new NotImplementedException();
    }

    public function beforeResponse(APIResponse $response)
    {
        throw new NotImplementedException();
    }
}