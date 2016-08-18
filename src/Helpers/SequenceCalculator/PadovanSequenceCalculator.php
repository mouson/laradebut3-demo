<?php

namespace Mouson\Helpers\SequenceCalculator;

class PadovanSequenceCalculator implements CalculatorInterface
{

    public function calculate($value)
    {
        /**
         * 公式
         *
         * f(0) = f(1) = f(2) = 1
         * f(n) = f(n-2) + f(n-3)
         *
         */
        if ($value >= 0 && $value <= 2) {
            return 1;
        }
        return $this->calculate($value-2) + $this->calculate($value-3);
    }

    public function getSequenceName()
    {
        return 'Padovan';
    }
}