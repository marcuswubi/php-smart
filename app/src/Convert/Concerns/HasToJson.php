<?php
namespace PHPSmart\Convert\Concerns;


trait HasToJson
{
    /**
     * Convert data loaded into - JSON
     * @param $data
     * @return mixed
     */
    public static function toJson($data)
    {
        // Load array into prop after validate
        self::$array = self::loadData($data);

        // Return
        return self::$array;
    }

}