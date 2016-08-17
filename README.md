## Introduction

一個產生級數數列的工具

## Installation

Run this command to add this library to your composer.json file:

```
composer require mouson/sequence-helper
```

## Quick Start Guide

```=php
use Mouson\Helpers\SequenceHelper;

$helper = SequenceHelper::make('Fibonacci');

$value = 30;
$result = sprintf(
    "%s Sequence %d is %d",
    $helper->getSequenceName(),
    $value,
    $helper->calculate($value)
);

echo $result . PHP_EOL; // Fibonacci Sequence 30 is 832040

```