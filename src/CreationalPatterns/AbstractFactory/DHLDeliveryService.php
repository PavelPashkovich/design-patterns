<?php

namespace Src\CreationalPatterns\AbstractFactory;

class DHLDeliveryService implements DeliveryServiceInterface
{
    public function sendPackage(PackageInterface $package): void
    {
        echo "Send package via DHL Delivery Service" . PHP_EOL;
    }
}