<?php

namespace Src\StructuralPatterns\AdapterPattern;

require __DIR__ . '/../../../vendor/autoload.php';

// reports
$reports = [
    new JsonReport(),
    new PHPArrayReport(),
    new SerializedReport(),
    new XMLReport(),
];

// client code, not using Adapter design pattern
function clientCode(array $reports): void
{
    foreach ($reports as $report) {
        if ($report instanceof PHPArrayReport) {
            $reportData = $report;
        } elseif ($report instanceof JsonReport) {
            $reportData = (new JsonToPHPArrayReportAdapter($report));
        } elseif ($report instanceof SerializedReport) {
            $reportData = (new SerializedToPHPArrayReportAdapter($report));
        } elseif ($report instanceof XMLReport) {
            $reportData = (new XMLToPHPArrayReportAdapter($report));
        }

        renderView($reportData);
    }
}

function renderView(PHPArrayReportInterfaceAdapter $adapter): void {
    print_r($adapter->getData());
}

clientCode($reports);
