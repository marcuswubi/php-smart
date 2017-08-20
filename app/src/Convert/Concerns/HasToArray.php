<?php
namespace PHPSmart\Convert\Concerns;


trait HasToArray
{
    //Param
    private static $array;

    /**
     * Convert data loaded into - ARRAY
     * @param $data
     * @return mixed
     */
    public static function toArray($data)
    {
        // Load array into prop after validate
        self::$array = self::loadData($data);

        // Return
        return self::$array;
    }
}