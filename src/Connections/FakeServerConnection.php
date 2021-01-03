<?php


namespace BTSDK\Connections;


use BTSDK\Exceptions\NotSupportException;
use BTSDK\Interfaces\ServerConnection;
use BTSDK\Transmissions\APIRequest;
use BTSDK\Transmissions\APIResponse;

class FakeServerConnection extends BaseServerConnection implements ServerConnection
{

    /**
     * 发送请求方法
     * @param APIRequest $request API请求
     * @return APIResponse
     * @throws NotSupportException
     * @return APIResponse API相应
     */
    public function sendRequest(APIRequest $request)
    {
        $operationConfigure=$request->requestOperation->getConfigure();
        if(!isset($operationConfigure['fakeFactory']) || !class_exists($operationConfigure['fakeFactory'])){
            throw new NotSupportException();
        }
        return new APIResponse();
    }
}