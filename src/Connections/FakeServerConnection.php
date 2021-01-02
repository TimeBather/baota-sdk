<?php


namespace BTSDK\Connections;


use BTSDK\Interfaces\ServerConnection;
use BTSDK\Transmission\APIRequest;

class FakeServerConnection extends BaseServerConnection implements ServerConnection
{

    public function sendRequest(APIRequest $request)
    {
        var_dump($request);
        return [];
    }
}