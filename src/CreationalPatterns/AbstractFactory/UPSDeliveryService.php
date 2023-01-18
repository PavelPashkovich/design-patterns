<?php

namespace Src\CreationalPatterns\AbstractFactory;

class UPSDeliveryService implements DeliveryServiceInterface
{
    public function sendPackage(PackageInterface $package): void
    {
        echo "Send package via UPS Delivery Service" . PHP_EOL;
    }
}