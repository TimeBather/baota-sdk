<?php


namespace BTSDK\Models;


use BTSDK\Collections\BaseCollection;
use BTSDK\Definitions\SiteStatus;
use BTSDK\Exceptions\NotSupportException;
use BTSDK\Handlers\ParseHandler;
use BTSDK\Interfaces\Model;
use BTSDK\Operations\GetSitesOperation;
use BTSDK\Traits\Model as ModelTrait;
use BTSDK\Types\Path;

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
        $operation->limit=PHP_INT_MAX-1;
        $operation->searchKeyword=$this->operationChain['value'];
        $response=$this->currentConnection->send($operation)->asRawArray();
        $resultArray=[];
        // TODO 宝塔面板API接口IP白名单错误拦截
        foreach($response['data'] as $v){
            if(isset($this->operationChain['key']) && $this->operationChain['key']!=null && $v[$this->operationChain['key']]==$this->operationChain['value']){
                array_push($resultArray,$v);
                if(isset($this->operationChain['limit'])&&count($resultArray)>=$this->operationChain['limit']){
                    break;
                }
            }
        }
        return new BaseCollection($resultArray,self::class);
    }
    public function handleParse(ParseHandler $handler){
        $handler->column('status',function($data){
            return $data;
        });
        $handler->link('ps','remark');
        $handler->link('addtime','created_at');
        $handler->column('addtime',function($data){
            return strtotime($data);
        });
        $handler->link('edate','destroy_at');
        $handler->column('edate',function($data){
            return strtotime($data);
        });
        $handler->column('path',function($data){
            return Path::parse($data);
        });

    }
}