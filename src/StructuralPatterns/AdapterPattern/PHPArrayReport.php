<?php

namespace Src\StructuralPatterns\AdapterPattern;

class PHPArrayReport implements PHPArrayReportInterfaceAdapter
{
    public function getData(): array {
        return [
            [
                'name' => 'iPhone',
                'price' => 1000,
                'count' => 23,
            ],
            [
                'name' => 'Xiaomi',
                'price' => 500,
                'count' => 65,
            ],
            [
                'name' => 'Samsung',
                'price' => 800,
                'count' => 34,
            ]
        ];
    }
}