<?php

namespace Src\CreationalPatterns\AbstractFactory;

class TNTDeliveryService implements DeliveryServiceInterface
{
    public function sendPackage(PackageInterface $package): void
    {
        echo "Send package via TNT Delivery Service" . PHP_EOL;
    }
}