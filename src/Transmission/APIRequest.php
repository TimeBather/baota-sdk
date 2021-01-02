<?php


namespace BTSDK\Transmission;


use BTSDK\Interfaces\Operation;

class APIRequest
{
    /**
     * @var string $url HTTP　URL
     */
    public $url='';
    /**
     * @var string $method HTTP请求方式
     */
    public $method='GET';
    /**
     * @var array $headers HTTP头
     */
    public $headers=[];
    /**
     * @var array $body HTTP体
     */
    public $body=[];
    /**
     * @var Operation|null $requestOperation 此请求对应操作
     */
    public $requestOperation=null;
}