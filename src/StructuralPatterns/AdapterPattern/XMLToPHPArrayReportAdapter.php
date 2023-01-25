<?php

namespace Src\StructuralPatterns\AdapterPattern;

class XMLToPHPArrayReportAdapter implements PHPArrayReportInterfaceAdapter
{
    private XMLReport $report;

    public function __construct(XMLReport $report)
    {
        $this->report = $report;
    }

    public function getData(): array
    {
        $xmlData = $this->report->buildXML();
        $xml = simplexml_load_string($xmlData);
        return json_decode(json_encode($xml), true)['item'];
    }
}