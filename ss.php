<?php

class MMSS {

    protected $c1,$c2;

    public function __construct($c1,$c2)
    {
        $this->c1 = $c1;
        $this->c2 = $c2;
    }

    public static function __set_state($properties)
    {
        $mmss = new MMSS($properties['c1'], $properties['c2']);

        return $mmss;
    } 

}
$mmss = new MMSS('Hello', 'Aliens');
eval('$mmss2 = ' . var_export ($mmss, true) . ';'); 
echo '<pre>', print_r ($mmss2, true), '</pre>';