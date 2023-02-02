<?php

namespace Src\BehavioralPatterns\Command;
use Src\BehavioralPatterns\Command\Income;
use Src\BehavioralPatterns\Command\Withdraw;

class Bank
{
    public $commands = [];

    public function operation($account, $amount) {
        $command = $amount < 0 ? new Withdraw($account, abs($amount)) : new Income($account, abs($amount));
        $command->execute();
        $this->commands[] = $command;
    }

    public function undo($count) {
        for ($i = 0; $i < $count; $i++) {
            $command = array_pop($this->commands);
            $command->undo();
        }
    }

    public function showOperations() {
        foreach ($this->commands as $command) {
            $className = explode('\\', get_class($command));
            echo 'Operation: ' . array_pop($className) . '; ' . ' Account: ' . $command->account->name . '; ' . 'Amount: ' . $command->amount . PHP_EOL;
        }
    }
}