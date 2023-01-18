<?php

namespace Src\CreationalPatterns\SimpleFactory;

class RedPaint implements iPaint
{

    public function draw()
    {
        echo "This is a red paint!";
    }
}