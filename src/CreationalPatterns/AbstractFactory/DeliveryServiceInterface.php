<?php

namespace Src\CreationalPatterns\AbstractFactory;

interface DeliveryServiceInterface
{
    public function sendPackage(PackageInterface $package);
}