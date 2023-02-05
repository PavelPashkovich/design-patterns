<?php

namespace Src\BehavioralPatterns\Iterator\Real;

require __DIR__ . '/../../../../vendor/autoload.php';

/**
 * Client code
 */

$csv = new CsvIterator(__DIR__ . '/some.csv');

foreach ($csv as $key => $row) {
    print_r($row);
}





