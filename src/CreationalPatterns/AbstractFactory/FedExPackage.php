<?php

namespace Src\CreationalPatterns\AbstractFactory;

class FedExPackage implements PackageInterface
{
    public function getContent(): void
    {
        echo 'Check the content of FedEx package' . PHP_EOL;
    }
}