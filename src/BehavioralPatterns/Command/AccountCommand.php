<?php

namespace Src\BehavioralPatterns\Command;

use Error;

abstract class AccountCommand
{
    public $account;
    public float $amount;
    public function __construct($account, $amount)
    {
        $this->account = $account;
        $this->amount = $amount;
    }

    public function execute() {
        throw new Error('Command execute() is not implemented');
    }

    public function undo() {
        throw new Error('Command undo() is not implemented');
    }
}
