<?php

namespace Src\CreationalPatterns\SimpleFactory;

use Exception;

class PaintFactory
{
    /**
     * @throws Exception
     */
    public static function create(string $color): iPaint {
        $className = ucfirst($color) . 'Paint';
        if (class_exists($className)) {
            return new $className();
        }
        throw new Exception("$className class does not exists! ");
    }
}