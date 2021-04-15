<?php
require_once "vendor/autoload.php";
use BTSDK\APIClient;
use BTSDK\Credentials\TokenCredential;
use BTSDK\Models\SiteModel;
use BTSDK\OperationsFiles\Files\Files\Data\Crontab\Crontab\Crontab\AddSiteOperation;
use BTSDK\Connections\GuzzleServerConnection;
use BTSDK\Connections\FakeServerConnection;
use BTSDK\OperationsFiles\Files\Files\Data\Crontab\Crontab\Crontab\GetSitesOperation;
use BTSDK\OperationsFiles\Files\Files\Data\Crontab\Crontab\Crontab\GetSystemTotalOperation;
use BTSDK\Operations\Site\AddDomainOperation;
$token=new TokenCredential("7Vnnk8mfzSvJXrADDsJ10iSU0CdzRnbe");
$server=new GuzzleServerConnection("http://admin.dingtalkapp.bcsite.cn:8888/",30);
$client=new APIClient($server,$token);
$mySite=SiteModel::find(23);
var_dump($mySite->created_at);
