<?php


namespace PHPSmart\Convert\Concerns;


trait HasToTable
{
    //Param
    private static $array;

    /**
     * Convert data loaded into - TABLE
     * @param $data
     * @return mixed
     */
    public static function toTable($data)
    {
        // Load array into prop after validate
        self::$array = self::loadData($data);

        // Return
        return self::$array;
    }
}