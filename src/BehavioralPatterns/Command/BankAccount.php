<?php

namespace Src\BehavioralPatterns\Command;

class BankAccount
{
    public string $name;
    public float $balance = 0;
    public function __construct($name)
    {
        $this->name = $name;
    }

}