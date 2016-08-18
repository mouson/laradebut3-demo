<?php

namespace Mouson\Helpers\SequenceCalculator;

class PadovanSequenceCalculator implements CalculatorInterface
{

    private static $result = array();

    public function calculate($value)
    {
        /**
         * 公式
         *
         * f(0) = f(1) = f(2) = 1
         * f(n) = f(n-2) + f(n-3)
         *
         */

        if (key_exists($value, self::$result)) {
            return self::$result[$value];
        }
        if ($value >= 0 && $value <= 2) {
            return 1;
        }
        self::$result[$value] = $this->calculate($value-2) + $this->calculate($value-3);

        return self::$result[$value];
    }

    public function getSequenceName()
    {
        return 'Padovan';
    }
}