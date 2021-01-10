<?php


namespace BTSDK\Definitions;


use BTSDK\Interfaces\ConstantDefinition;
use PhpEnum\Enum;

class SiteStatus extends Enum implements ConstantDefinition
{
    const STOPPED=0;
    const RUNNING=1;
}