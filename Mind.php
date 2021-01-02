<?php
require_once "vendor/autoload.php";
use \BTSDK\APIClient;
use \BTSDK\Credentials\TokenCredential;
use \BTSDK\Operations\AddSiteOperation;
use \BTSDK\Connections\GuzzleServerConnection;
use \BTSDK\Connections\FakeServerConnection;
use BTSDK\Operations\GetSystemTotalOperation;

$token=new TokenCredential("*");
$server=null;
$server=new GuzzleServerConnection("****",30);
$client=new APIClient($server,$token);
$getTotal=new GetSystemTotalOperation();


try{
    $response=$client->send($getTotal);
    var_dump($response->getResponse());
}catch(\BTSDK\Exceptions\InvalidParameterException $e){
    print("参数错误");
}catch(\BTSDK\Exceptions\BaseException $e){
    print("其他错误");
    var_dump($e);
}
