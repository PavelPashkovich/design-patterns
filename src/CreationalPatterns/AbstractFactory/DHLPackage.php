<?php

namespace Src\CreationalPatterns\AbstractFactory;

class DHLPackage implements PackageInterface
{
    public function getContent(): void
    {
        echo 'Check the content of DHL package' . PHP_EOL;
    }
}