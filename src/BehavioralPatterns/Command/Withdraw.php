<?php

namespace Src\BehavioralPatterns\Command;

class Withdraw extends AccountCommand
{
    public function execute() {
        $this->account->balance -= $this->amount;
    }

    public function undo() {
        $this->account->balance += $this->amount;
    }
}