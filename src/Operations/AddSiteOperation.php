<?php


namespace BTSDK\Operations;


use BTSDK\Operations\BaseOperation;
use BTSDK\Interfaces\Operation;
use BTSDK\Transmission\APIRequest;
use BTSDK\Traits\OperationUtils;

class AddSiteOperation extends BaseOperation implements  Operation
{
    use OperationUtils;
    public function getConfigure()
    {
        return [
            'url'=>'/site?action=AddSite',
            'method'=>'POST',
            'parameters'=>[
                /* ["name"=>"domains","displayName"=>"domains","required"=>true] */
                ["name"=>"path","displayName"=>"rootPath","required"=>true],
                ["name"=>"type_id","displayName"=>"typeId","required"=>true],
                ["name"=>"version","displayName"=>"phpVersion","required"=>true],
                ["name"=>"port","displayName"=>"sitePort","required"=>true],
                ["name"=>"ps","displayName"=>"siteRemark","required"=>true],
                ["name"=>"ftp","displayName"=>"ftpEnabled","required"=>true],
                ["name"=>"ftp_username","displayName"=>"ftpUsername"],
                ["name"=>"ftp_password","displayName"=>"ftpPassword"],
                ["name"=>"sql","displayName"=>"databaseEnabled"],
                ["name"=>"codeing","displayName"=>"databaseEncoding"],
                ["name"=>"datauser","displayName"=>"databaseUsername"],
                ["name"=>"datapassword","displayName"=>"databasePassword"]
            ]
        ];
    }

    public function beforeSend(APIRequest $request){
        $request=$this->beforeSendProcess($request);
        return $request;
    }
}