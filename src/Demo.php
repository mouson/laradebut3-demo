<?php
/**
 * Created by PhpStorm.
 * User: mouson
 * Date: 2016/7/11
 * Time: 上午1:53
 */
include_once __DIR__ . '/../vendor/autoload.php';
use Mouson\Helpers\SequenceHelper;

$helper = SequenceHelper::make('Fibonacci');

$value = 22;
$result = sprintf(
    "%s Sequence %d is %d",
    $helper->getSequenceName(),
    $value,
    $helper->calculate($value)
);

echo $result . PHP_EOL;
