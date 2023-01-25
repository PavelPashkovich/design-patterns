<?php

namespace Src\StructuralPatterns\AdapterPattern;

class JsonReport
{
    public function buildJson(): string {
        return '[{"name": "iPhone","price": 1000,"count": 23},{"name": "Xiaomi","price": 500,"count": 65},{"name": "Samsung","price": 800,"count": 34}]';
    }
}