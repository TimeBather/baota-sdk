<?php


namespace BTSDK;


use BTSDK\Interfaces\Operation;
use BTSDK\Transmission\APIRequest;
use BTSDK\Interfaces\Credential;
use BTSDK\Interfaces\ServerConnection;

class APIClient
{
    /**
     * @var ServerConnection $connection API连接
     */
    protected $connection=null;
    /**
     * @var Credential $credential 登录凭据
     */
    protected $credential=null;
    public function __construct(ServerConnection $connection,Credential $credential)
    {
        $this->connection=$connection;
        $this->credential=$credential;
    }

    /**
     * 发送操作
     * @param Operation $operation 操作
     * @return Transmission\APIResponse API响应
     */
    public function send(Operation $operation){
        $request=new APIRequest();
        $timestamp=time();
        $request->body['request_time']=$timestamp;
        $request->body['request_token']=$this->credential->getRequestToken($timestamp);
        $request->headers['Content-Type']="application/x-www-form-urlencoded; charset=UTF-8";
        $request->requestOperation=$operation;
        $request=$operation->beforeSend($request);
        $response=$this->connection->sendRequest($request);
        $response=$operation->beforeResponse($response);
        return $response;
    }
}