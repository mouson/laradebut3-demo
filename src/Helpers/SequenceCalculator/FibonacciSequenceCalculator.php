<?php
/**
 * Created by PhpStorm.
 * User: mouson
 * Date: 2016/7/11
 * Time: 上午1:41
 */

namespace Mouson\Helpers\SequenceCalculator;

class FibonacciSequenceCalculator {
    /**
     * @param $value
     *
     * @return int|mixed
     */
    public function calculate($value)
    {
        /**
         * 公式：
         *
         * f(0) = 0
         * f(1) = 1
         * f(n-1)+f(n-2)
         */
        if ($value == 0) {
            return 0;
        }
        if ($value == 1) {
            return 1;
        }
        return $this->calculate($value-1) + $this->calculate($value-2);
    }

    public function getSequenceName()
    {
        return 'Fibonacci';
    }
}
