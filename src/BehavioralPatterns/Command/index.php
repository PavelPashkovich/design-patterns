<?php

namespace Src\BehavioralPatterns\Command;

require __DIR__ . '/../../../vendor/autoload.php';

/**
 * Client code
 */

$bank = new Bank();
$account1 = new BankAccount('Marcus Aurelius');
$bank->operation($account1, 1000);
$bank->operation($account1, -50);
$account2 = new BankAccount('Antoninus Pius');
$bank->operation($account2, 500);
$bank->operation($account2, -100);
$bank->operation($account2, 150);
$bank->showOperations();

$bank->undo(2);
$bank->showOperations();

var_dump($account1);
var_dump($account2);


