<?php
namespace PHPSmart\Contracts;

/**
 * Interface Convert
 * @package PHPSmart\Contracts
 */
interface Convert
{
    /**
     * Convert data loaded into - ARRAY
     * @param $data
     * @return mixed
     */
    public static function toArray($data);

    /**
     * Convert data loaded into - JSON
     * @param $data
     * @return mixed
     */
    public static function toJson($data);

    /**
     * Convert data loaded into - STDCLASS
     * @param $data
     * @return mixed
     */
    public static function toClass($data);

    /**
     * Convert data loaded into
     * @param $data
     * @return mixed
     */
    public static function toTable($data);

    /**
     * Convert data loaded into
     * @param $data
     * @return mixed
     */
    public static function toCsv($data);

}