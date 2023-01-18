<?php

namespace Src\CreationalPatterns\AbstractFactory;

require __DIR__ . '/../../../vendor/autoload.php';

// create delivery factories
$deliveryFactories = [
    new TNTDeliveryFactory(),
    new UPSDeliveryFactory(),
    new FedExDeliveryFactory(),
    new DHLDeliveryFactory(),
];

// send suitable packages via delivery services
function delivery(array $deliveryFactories): void
{
    foreach ($deliveryFactories as $deliveryFactory) {
        // create delivery service
        $deliveryService = $deliveryFactory->createDeliveryService();
        // create package
        $package = $deliveryFactory->createPackage();
        // check package
        $package->getContent();
        // send package
        $deliveryService->sendPackage($package);
    }
}

delivery($deliveryFactories);
