<?php


namespace BTSDK\Handlers;


use BTSDK\Interfaces\Handler;
use Closure;

class ParseHandler implements Handler
{
    protected $parser=[];
    protected $links=[];
    public function column($name, Closure $callback){
        $this->parser[$name]=$callback;
    }
    public function link($from,$to){
        $this->links[$to]=$from;
    }
    public function parse($key,Closure $valueReader){
        $key=isset($this->links[$key])?$this->links[$key]:$key;
        return isset($this->parser[$key])?$this->parser[$key]($valueReader($key)):$valueReader($key);
    }
}