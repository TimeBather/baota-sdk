<?php


namespace BTSDK\Models;


use BTSDK\Collections\BaseCollection;
use BTSDK\Exceptions\NotSupportException;
use BTSDK\Interfaces\Model;
use BTSDK\Operations\GetSitesOperation;
use BTSDK\Traits\Model as ModelTrait;

class SiteModel extends BaseModel implements Model
{
    use ModelTrait;
        protected $sourceData=[];
    public function __construct($data=null)
    {
        if ($data == null) return;
        $this->sourceData = $data;
    }
    public function callGet()
    {
        if($this->operationChain['operation']!='where'){
            throw new NotSupportException();
        }
        $operation=new GetSitesOperation();
        $operation->limit=99999999;
        $operation->searchKeyword=$this->operationChain['value'];
        $response=$this->currentConnection->send($operation)->asRawArray();
        $resultArray=[];
        // TODO 宝塔面板API接口IP白名单错误拦截
        foreach($response['data'] as $v){
            if($v[$this->operationChain['key']]==$this->operationChain['value']){
                array_push($resultArray,$v);
                if(isset($this->operationChain['limit'])&&count($resultArray)>=$this->operationChain['limit']){
                    break;
                }
            }
        }
        return new BaseCollection($resultArray,self::class);
    }
}