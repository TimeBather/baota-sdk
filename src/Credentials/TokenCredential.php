<?php


namespace BTSDK\Credentials;


use BTSDK\Interfaces\Credential;

class TokenCredential extends BaseCredential implements Credential
{
    protected $encryptedToken="";

    /**
     * 初始化TokenCredential类
     * @param $token string 宝塔面板APIToken
     */
    public function __construct($token){
        $this->encryptedToken=md5($token);
    }

    /**
     * 获取请求Token
     * @param int $timestamp 当前时间戳
     * @return string
     */
    public function getRequestToken($timestamp=-1){
        if($timestamp==-1)$timestamp=time();
        return md5($timestamp.$this->encryptedToken);
    }
}