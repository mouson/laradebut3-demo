<?php
/**
 * Created by PhpStorm.
 * User: mouson
 * Date: 2016/7/13
 * Time: 上午7:57
 */

namespace Mouson\Helpers;

use Mouson\Helpers\SequenceCalculator\FibonacciSequenceCalculator;
use Mouson\Helpers\SequenceCalculator\PadovanSequenceCalculator;

class SequenceHelper
{
    /**
     * @param $algorithm
     *
     * @return FibonacciSequenceCalculator
     */
    static public function make($algorithm)
    {
        switch ($algorithm) {
            case 'Padovan':
                return new PadovanSequenceCalculator();
            case 'Fibonacci':
            default :
            return new FibonacciSequenceCalculator();
            break;
        }
    }
}