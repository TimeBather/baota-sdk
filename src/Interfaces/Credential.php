<?php


namespace BTSDK\Interfaces;


interface Credential
{
    /**
     * 获取请求Token
     * @param int $timestamp
     * @return string
     */
    public function getRequestToken($timestamp=-1);
}