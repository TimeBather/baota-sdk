<?php


namespace BTSDK\Interfaces;


interface Credential
{
    public function getRequestToken($timestamp=null);
}