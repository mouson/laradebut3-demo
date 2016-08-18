<?php

namespace Mouson\Helpers\SequenceCalculator;

class PadovanSequenceCalculator implements CalculatorInterface
{

    public function calculate($value)
    {
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