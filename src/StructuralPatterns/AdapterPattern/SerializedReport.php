<?php

namespace Src\StructuralPatterns\AdapterPattern;

class SerializedReport
{
    public function getData(): string {
        return 'a:3:{i:0;a:3:{s:4:"name";s:6:"iPhone";s:5:"price";i:1000;s:5:"count";i:23;}i:1;a:3:{s:4:"name";s:6:"Xiaomi";s:5:"price";i:500;s:5:"count";i:65;}i:2;a:3:{s:4:"name";s:7:"Samsung";s:5:"price";i:800;s:5:"count";i:34;}}';
    }
}

