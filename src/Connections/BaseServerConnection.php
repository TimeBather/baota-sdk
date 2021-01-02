<?php


namespace BTSDK\Connections;


use BTSDK\Exceptions\NotImplementedException;
use BTSDK\Interfaces\ServerConnection;
use BTSDK\Transmission\APIRequest;

class BaseServerConnection implements ServerConnection
{

    public function sendRequest(APIRequest $request)
    {
        throw new NotImplementedException();
    }
}