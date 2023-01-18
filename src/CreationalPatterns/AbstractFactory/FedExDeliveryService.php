<?php

namespace Src\CreationalPatterns\AbstractFactory;

class FedExDeliveryService implements DeliveryServiceInterface
{
    public function sendPackage(PackageInterface $package): void
    {
        echo "Send package via FedEx  Delivery Service" . PHP_EOL;
    }
}