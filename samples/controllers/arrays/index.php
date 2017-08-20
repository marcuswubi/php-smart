<?php
require '../../../vendor/autoload.php';

use PHPSmart\Convert\Controllers\Convert;

$data = [
    'teste' => 1
];
echo '<pre>';
print_r($convert = (
    new Convert()
)->toJson($data));
echo '</pre>';
