<?php

namespace Src\BehavioralPatterns\Command;

class Income extends AccountCommand
{
    public function execute() {
        $this->account->balance += $this->amount;
    }

    public function undo() {
        $this->account->balance -= $this->amount;
    }
}