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
            $reportData = $report->getData();
        } elseif ($report instanceof JsonReport) {
            $reportData = json_decode($report->buildJson(), true);
        } elseif ($report instanceof SerializedReport) {
            $reportData = unserialize($report->getData());
        } elseif ($report instanceof XMLReport) {
            $xmlData = $report->buildXML();
            $xml = simplexml_load_string($xmlData);
            $reportData = json_decode(json_encode($xml), true)['element'];
        }

        renderView($reportData);
    }
}

function renderView(array $reportData): void {
    print_r($reportData);
}

clientCode($reports);
