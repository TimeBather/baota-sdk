<?php


namespace BTSDK\Credentials;


use BTSDK\Exceptions\NotImplementedException;
use BTSDK\Interfaces\Credential;

class BaseCredential implements Credential
{

    /**
     * 获取请求Token
     * @param int $timestamp
     * @throws NotImplementedException
     */
    public function getRequestToken($timestamp = -1)
    {
        throw new NotImplementedException();
    }
}