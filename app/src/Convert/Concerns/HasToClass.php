<?php
namespace PHPSmart\Convert\Concerns;


trait HasToClass
{
    //Param
    private static $array;

    /**
     * Convert data loaded into - STDCLASS
     * @param $data
     * @return mixed
     */
    public static function toClass($data)
    {
        // Load array into prop after validate
        self::$array = self::loadData($data);

        // Return
        return self::$array;
    }

}