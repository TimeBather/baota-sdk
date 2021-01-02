<?php


namespace BTSDK\Interfaces;


use BTSDK\Interfaces\Operation;
use BTSDK\Transmission\APIRequest;

interface ServerConnection
{
    public function sendRequest(APIRequest $request);
}