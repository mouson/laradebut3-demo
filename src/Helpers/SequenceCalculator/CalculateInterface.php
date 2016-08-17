<?php
/**
 * Created by PhpStorm.
 * User: mouson
 * Date: 2016/7/11
 * Time: 上午2:54
 */

namespace Mouson\Helpers\SequenceCalculator;

interface CalculateInterface
{
   public function calculate($value);
   public function getSequenceName();
}
