<?php

namespace Src\BehavioralPatterns\Mediator;

require __DIR__ . '/../../../vendor/autoload.php';

/**
 * Client code
 */

$mediator = new ChatRoom();

$john = new User('John Doe', $mediator);
$jane = new User('Jane Doe', $mediator);

$john->send('Hi there!');
$jane->send('Hey!');

// Output will be
// Feb 14, 10:58 [John]: Hi there!
// Feb 14, 10:58 [Jane]: Hey!


