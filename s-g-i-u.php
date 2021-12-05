<?php

class MMSGIU
{
    private $attributs = [];

    public function __get($name)
    {
        if (isset($this->attributs[$name])) {
            return $this->attributs[$name];
        } else {
            return 'not found';
        }
    }

    public function __set($name, $val)
    {
        $this->attributs[$name] = $val;
    }

    public function showAttributs()
    {
        echo '<pre>', print_r($this->attributs, true), '</pre>';
    }

    public function __isset($name)
    {
        return isset($this->attributs[$name]);
    }
    public function __unset($name)
    {
        if (isset($this->attributs[$name])) {
            unset($this->attributs[$name]);
        }
    }
}

$obj = new MMSGIU;
$obj->attribut = 'Simple test';
$obj->unAttributPrive = 'Other simple test';

echo $obj->attribut;
echo $obj->otherAtribut;

if (isset($obj->attribut)) {
    echo true;
} else {
    echo false;
}

unset($obj->attribut);

if (isset($obj->attribut)) {
    echo true;
} else {
    echo false;
}
