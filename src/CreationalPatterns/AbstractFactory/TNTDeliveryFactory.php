<?php

namespace Src\CreationalPatterns\AbstractFactory;

class TNTDeliveryFactory implements AbstractFactoryInterface
{

    public function createDeliveryService(): DeliveryServiceInterface
    {
        return new TNTDeliveryService();
    }

    public function createPackage(): PackageInterface
    {
        return new TNTPackage();
    }
}