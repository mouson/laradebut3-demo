<?php
/**
 * Created by PhpStorm.
 * User: mouson
 * Date: 2016/8/18
 * Time: 下午8:34
 */
namespace Mouson\Helpers\SequenceCalculator;

interface CalculatorInterface
{
    /**
     * @param $value
     *
     * @return int|mixed
     */
    public function calculate($value);

    public function getSequenceName();
}