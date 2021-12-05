<?php

class MMCCS
{

    public function __call($name, $args)
    {
        echo $name . ' ' . implode($args) . '<br>';
    }

    public static function __callStatic($name, $args)
    {
        echo $name . ' ' . implode($args) . '<br>';
    }

}

$mmccs = new MMCCS;
$mmccs->method(123, ' value');
MMCCS::staticMethod(456, ' other value');