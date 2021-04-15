<?php


namespace BTSDK\Operations\Site;


use BTSDK\Exceptions\ParameterRequiredException;
use BTSDK\Operations\BaseOperation;
use BTSDK\Interfaces\Operation;
use BTSDK\Transmissions\APIRequest;
use BTSDK\Traits\OperationUtils;

/**
 * 添加网站
 * Class AddSiteOperation
 * @package BTSDK\Operations\Site
 */
class AddSiteOperation extends BaseOperation implements  Operation
{
    use OperationUtils;

    /**
     * 获取当前Operation配置信息
     * @return array 配置数组
     */
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

    /**
     * 发送前回调,用于动态修改/加入/检测参数
     * @param APIRequest $request
     * @return APIRequest
     * @throws ParameterRequiredException
     */
    public function beforeSend(APIRequest $request)
    {
        $request=$this->beforeSendProcess($request);
        return $request;
    }
}