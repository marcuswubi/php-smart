<?php
namespace PHPSmart\Convert\Controllers;

//contracts
use PHPSmart\Contracts\Convert as ConvertContract;
//convert operations - array,json,class,csv,table
use PHPSmart\Convert\Concerns\HasConvertOperations;

/**
 * Class Convert
 * @package PHPSmart\Convert\Controllers
 */
class Convert implements ConvertContract
{
    use HasConvertOperations;
}