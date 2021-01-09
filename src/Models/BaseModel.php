<?php


namespace BTSDK\Models;


use BTSDK\APIClient;
use BTSDK\Exceptions\NotImplementedException;
use BTSDK\Interfaces\Model;

class BaseModel implements Model
{
    protected static $defaultConnection=null;
    protected $currentConnection=null;
    protected $operationChain=[];
    public static function all()
    {
        throw new NotImplementedException();
    }

    public static function connection(APIClient $client)
    {
        throw new NotImplementedException();
    }

    public static function where($key,$value)
    {
        throw new NotImplementedException();
    }

    public static function find($id)
    {
        throw new NotImplementedException();

    }

    public static function setDefaultConnection(APIClient $client)
    {
        self::$defaultConnection=$client;
    }

    public static function getDefaultConnection()
    {
        return self::$defaultConnection;
    }



    public function callGet()
    {
        throw new NotImplementedException();
    }

    public function setConnection(APIClient $client)
    {
        $this->currentConnection=$client;
    }

    public function setOperationChainData($key, $value)
    {
        $this->operationChain[$key]=$value;

    }
}