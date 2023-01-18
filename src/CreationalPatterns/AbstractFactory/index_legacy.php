<?php

namespace Src\CreationalPatterns\AbstractFactory;

require __DIR__ . '/../../../vendor/autoload.php';

// create delivery services
$deliveryServices = [
    new TNTDeliveryService(),
    new UPSDeliveryService(),
    new FedExDeliveryService(),
    new DHLDeliveryService(),
];

// send suitable packages via delivery services
function delivery(array $deliveryServices): void
{
    foreach ($deliveryServices as $deliveryService) {
        if ($deliveryService instanceof TNTDeliveryService) {
            $package = new TNTPackage();
        } elseif ($deliveryService instanceof UPSDeliveryService) {
            $package = new UPSPackage();
        } elseif ($deliveryService instanceof FedExDeliveryService) {
            $package = new FedExPackage();
        } elseif ($deliveryService instanceof DHLDeliveryService) {
            $package = new DHLPackage();
        } else {
            return;
        }
        $package->getContent();
        $deliveryService->sendPackage($package);
    }
}

delivery($deliveryServices);
