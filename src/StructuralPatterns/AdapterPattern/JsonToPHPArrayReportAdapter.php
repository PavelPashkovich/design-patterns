<?php

namespace Src\StructuralPatterns\AdapterPattern;

class JsonToPHPArrayReportAdapter implements PHPArrayReportInterfaceAdapter
{
    private JsonReport $report;

    public function __construct(JsonReport $report)
    {
        $this->report = $report;
    }

    public function getData(): array
    {
        $data = $this->report->buildJson();
        return json_decode($data, true);
    }
}