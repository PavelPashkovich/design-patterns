<?php

namespace Src\CreationalPatterns\AbstractFactory;

class UPSPackage implements PackageInterface
{
    public function getContent(): void
    {
        echo 'Check the content of UPS package' . PHP_EOL;
    }
}