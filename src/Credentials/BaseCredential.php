<?php


namespace BTSDK\Credentials;


use BTSDK\Exceptions\NotImplementedException;
use BTSDK\Interfaces\Credential;

class BaseCredential implements Credential
{

    public function getRequestToken($timestamp = null)
    {
        throw new NotImplementedException();
    }
}