<?php


namespace PHPSmart\Convert\Concerns;


trait HasToCsv
{
    //Param
    private static $array;

    /**
     * Convert data loaded into - CSV
     * @param $data
     * @return mixed
     */
    public static function toCsv($data)
    {
        // Load array into prop after validate
        self::$array = self::loadData($data);

        // Return
        return self::$array;
    }

}