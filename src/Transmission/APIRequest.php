<?php


namespace BTSDK\Transmission;


class APIRequest
{
    public $url='';
    public $method='GET';
    public $headers=[];
    public $body=[];
    public $requestOperation=null;
}