<?php

namespace Src\CreationalPatterns\AbstractFactory;

interface AbstractFactoryInterface
{
    public function createDeliveryService(): DeliveryServiceInterface;
    public function createPackage(): PackageInterface;
}