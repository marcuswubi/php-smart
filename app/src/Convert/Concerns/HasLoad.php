<?php
namespace PHPSmart\Convert\Concerns;

trait HasLoad
{
    /**
     * @param array $array
     * @return array
     */
    private static function prepareArray(
        array $array
    ) {
        try {
            return $array;
        } catch (TExceptionAbstract $e) {
            return $e->toJson();
        }
    }

    /**
     * @param object $data
     * @return object
     */
    private static function prepareObject(
        object $data
    ) {
        try {
            return $data;
        } catch (TExceptionAbstract $e) {
            return $e->toJson();
        }
    }

    /**
     * @param object $data
     * @return object
     */
    private static function prepareJson(
        object $data
    ) {
        try {
            return $data;
        } catch (TExceptionAbstract $e) {
            return $e->toJson();
        }
    }

    /**
     * @param string $data
     * @return string
     */
    private static function prepareCsv(
        string $data
    ) {
        try {
            return $data;
        } catch (TExceptionAbstract $e) {
            return $e->toJson();
        }
    }

    /**
     * @param string $data
     * @return string
     */
    private static function prepareTable(
        string $data
    ) {
        try {
            return $data;
        } catch (TExceptionAbstract $e) {
            return $e->toJson();
        }
    }

    protected static function loadData($data)
    {
        return $data;
    }
}