<?php

namespace Src\CreationalPatterns\AbstractFactory;

class TNTPackage implements PackageInterface
{
    public function getContent(): void
    {
        echo 'Check the content of TNT package' . PHP_EOL;
    }
}