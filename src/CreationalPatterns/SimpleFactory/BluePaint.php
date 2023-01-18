<?php

namespace Src\CreationalPatterns\SimpleFactory;

class BluePaint implements iPaint
{

    public function draw()
    {
        echo "This is a blue paint!";
    }
}