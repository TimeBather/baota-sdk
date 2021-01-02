<?php


namespace BTSDK\Credentials;


use BTSDK\Interfaces\Credential;

class TokenCredential extends BaseCredential implements Credential
{
    protected $encryptedToken="";
    public function __construct($token){
        $this->encryptedToken=md5($token);
    }
    public function getRequestToken($timestamp=null){
        if($timestamp==null)$timestamp=time();
        return md5($timestamp.$this->encryptedToken);
    }
}