<?php

class MMC
{

    private static $instances = 0;

    public function __construct()
    {
        self::$instances++;
    }

    public function __clone()
    {
        self::$instances++;
    }

    public static function getInstances()
    {
        return self::$instances;
    }
}

$mmc = new MMC;

$mmc_copy = clone $mmc;

echo $mmc::getInstances();