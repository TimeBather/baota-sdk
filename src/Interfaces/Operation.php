<?php


namespace BTSDK\Interfaces;


use BTSDK\Transmission\APIRequest;
use BTSDK\Transmission\APIResponse;

interface Operation
{
    public function getConfigure();
    public function __set($key,$value);
    public function __get($key);
    public function beforeSend(APIRequest $request);
    public function beforeResponse(APIResponse $response);
}