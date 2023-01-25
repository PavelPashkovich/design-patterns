<?php

namespace Src\StructuralPatterns\AdapterPattern;

class SerializedToPHPArrayReportAdapter implements PHPArrayReportInterfaceAdapter
{
    private SerializedReport $report;

    public function __construct(SerializedReport $report)
    {
        $this->report = $report;
    }

    public function getData(): array
    {
        $data = unserialize($this->report->getData());
        return $data;
    }
}