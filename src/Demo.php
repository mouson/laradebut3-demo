<?php
/**
 * Created by PhpStorm.
 * User: mouson
 * Date: 2016/7/11
 * Time: 上午1:53
 */
include_once __DIR__ . '/../vendor/autoload.php';
use Mouson\Helpers\SequenceHelper;

/**
<<<<<<< ddf428daad8af2d4a0f463e8f3a15ba229c8dd64
 * @param $helper
 * @param $value
 *
 * @return string
 */
function getResult($helper, $value)
{
    return sprintf(
        "%s Sequence %d is %d",
        $helper->getSequenceName(),
        $value,
        $helper->calculate($value)
    );
}

/**
 * 費式級數函式使用範例
 */
$helper = SequenceHelper::make('Fibonacci');
$value = 22;
$result = getResult($helper, $value);
echo $result . PHP_EOL;

/**
 * 巴多萬級數函式使用範例
 */
$helper = SequenceHelper::make('Padovan');
$value  = 50;
$result = getResult($helper, $value);
echo $result . PHP_EOL;
