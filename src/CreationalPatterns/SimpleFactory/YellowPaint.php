<?php

namespace Src\CreationalPatterns\SimpleFactory;

class YellowPaint implements iPaint
{

    public function draw()
    {
        echo "This is a yellow paint!";
    }
}