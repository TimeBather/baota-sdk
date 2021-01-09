<?php


namespace BTSDK\Interfaces;


use BTSDK\APIClient;

interface Model
{
    public static function all();
    public static function connection(APIClient $client);
    public static function where($key,$value);
    public static function find($id);
    public static function setDefaultConnection(APIClient $client);
    public function callGet();
    public static function getDefaultConnection();
    public function setConnection(APIClient $client);
    public function setOperationChainData($key,$value);
}