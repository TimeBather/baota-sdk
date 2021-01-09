<?php
require_once "vendor/autoload.php";
use BTSDK\APIClient;
use BTSDK\Credentials\TokenCredential;
use BTSDK\Models\SiteModel;
use BTSDK\Operations\AddSiteOperation;
use BTSDK\Connections\GuzzleServerConnection;
use BTSDK\Connections\FakeServerConnection;
use BTSDK\Operations\GetSitesOperation;
use BTSDK\Operations\GetSystemTotalOperation;

$token=new TokenCredential("7Vnnk8mfzSvJXrADDsJ10iSU0CdzRnbe");
//$server=new FakeServerConnection();
$server=new GuzzleServerConnection("http://admin.dingtalkapp.bcsite.cn:8888/",30);
$client=new APIClient($server,$token);
/*$getTotal=new GetSitesOperation();
$getTotal->limit=30;
$getTotal->searchKeyword=23;
try{
    $response=$client->send($getTotal)->asResponse();
    var_dump($response->getResponse());
}catch(\BTSDK\Exceptions\InvalidParameterException $e){
    print("参数错误");
}catch(\BTSDK\Exceptions\BaseException $e){
    print("其他错误");
    var_dump($e);
}
*/
$mySite=SiteModel::find(22);
