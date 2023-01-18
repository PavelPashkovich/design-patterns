<?php

namespace Src\CreationalPatterns\SimpleFactory;

use Exception;

require __DIR__ . '/../../../vendor/autoload.php';

try {
    $redPaint = PaintFactory::create('red');
    $redPaint->draw();
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $greenPaint = PaintFactory::create('green');
    $greenPaint->draw();
} catch (Exception $e) {
    echo $e->getMessage();
}