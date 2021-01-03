<?php


namespace BTSDK\Connections;


use BTSDK\Exceptions\NotImplementedException;
use BTSDK\Interfaces\ServerConnection;
use BTSDK\Transmissions\APIRequest;

class BaseServerConnection implements ServerConnection
{

    /**
     * 发送请求方法
     * @param APIRequest $request
     * @throws NotImplementedException
     */
    public function sendRequest(APIRequest $request)
    {
        throw new NotImplementedException();
    }
}