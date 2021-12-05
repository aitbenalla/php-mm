<?php

class MMI {

    public function __invoke($args)
    {
        echo $args;
    }
}

$mmi = new MMI;

$mmi('Hello Invoke');