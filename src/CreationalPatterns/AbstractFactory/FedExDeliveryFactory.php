<?php

namespace Src\CreationalPatterns\AbstractFactory;

class FedExDeliveryFactory implements AbstractFactoryInterface
{

    public function createDeliveryService(): DeliveryServiceInterface
    {
        return new FedExDeliveryService();
    }

    public function createPackage(): PackageInterface
    {
        return new FedExPackage();
    }
}