<?php

namespace Src\CreationalPatterns\AbstractFactory;

class UPSDeliveryFactory implements AbstractFactoryInterface
{

    public function createDeliveryService(): DeliveryServiceInterface
    {
        return new UPSDeliveryService();
    }

    public function createPackage(): PackageInterface
    {
        return new UPSPackage();
    }
}